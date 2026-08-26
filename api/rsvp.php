<?php
header('Content-Type: application/json; charset=utf-8');

// Configuração da API do Google Sheets (App Script Web App)
// INSTRUÇÕES: Cole abaixo a URL do seu Google Apps Script gerada no deploy
$googleScriptUrl = "https://script.google.com/macros/s/AKfycbzHluN51yfHZfh4esp4VN1Zws97uK3kKd5sBdrXSNnLD48La8kUFyECdPawJV3kTRvX/exec";

$dataFile = __DIR__ . '/../data/rsvp.json';

// Ensure data directory and file exist
if (!file_exists(__DIR__ . '/../data')) {
    mkdir(__DIR__ . '/../data', 0777, true);
}

if (!file_exists($dataFile)) {
    file_put_contents($dataFile, json_encode([]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
    $presenca = filter_input(INPUT_POST, 'presenca', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($nome) || empty($telefone)) {
        echo json_encode(['success' => false, 'message' => 'Por favor, preencha nome e telefone.']);
        exit;
    }

    $existing = json_decode(file_get_contents($dataFile), true) ?: [];

    $novoRegistro = [
        'id' => uniqid(),
        'nome' => $nome,
        'telefone' => $telefone,
        'presenca' => $presenca,
        'data_registro' => date('d/m/Y H:i')
    ];

    array_unshift($existing, $novoRegistro);
    file_put_contents($dataFile, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

    // Envio para o Google Sheets (Web App)
    if (!empty($googleScriptUrl) && !str_contains($googleScriptUrl, "SUA_URL_AQUI")) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $googleScriptUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_POSTREDIR, 3); // Mantém POST ao redirecionar 302
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($novoRegistro));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($ch);
        curl_close($ch);
    }

    $msg = $presenca === 'Confirmada' ? 'Presença confirmada com sucesso!' : 'Sua resposta foi registrada. Sentiremos sua falta!';
    echo json_encode(['success' => true, 'message' => $msg]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $existing = json_decode(file_get_contents($dataFile), true) ?: [];
    echo json_encode($existing);
    exit;
}
