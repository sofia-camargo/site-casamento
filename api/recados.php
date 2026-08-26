<?php
header('Content-Type: application/json; charset=utf-8');

$dataFile = __DIR__ . '/../data/recados.json';

if (!file_exists(__DIR__ . '/../data')) {
    mkdir(__DIR__ . '/../data', 0777, true);
}

if (!file_exists($dataFile)) {
    // Initial sample messages
    $sampleData = [
        [
            'id' => '1',
            'nome' => 'Maria e João (Padrinhos)',
            'mensagem' => 'Que a caminhada de vocês seja sempre repleta de cumplicidade, harmonia e muito amor! Estamos muito felizes por fazer parte deste grande dia.',
            'data' => '21/07/2026'
        ],
        [
            'id' => '2',
            'nome' => 'Carlos Eduardo & Família',
            'mensagem' => 'Jiúlia e Vinícius, que alegria ver o amor de vocês culminar nesta linda união! Contando os dias para celebrar com vocês.',
            'data' => '20/07/2026'
        ]
    ];
    file_put_contents($dataFile, json_encode($sampleData, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($nome) || empty($mensagem)) {
        echo json_encode(['success' => false, 'message' => 'Preencha seu nome e a mensagem.']);
        exit;
    }

    $existing = json_decode(file_get_contents($dataFile), true) ?: [];

    $novoRecado = [
        'id' => uniqid(),
        'nome' => $nome,
        'mensagem' => $mensagem,
        'data' => date('d/m/Y')
    ];

    array_unshift($existing, $novoRecado);

    if (file_put_contents($dataFile, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        echo json_encode(['success' => true, 'message' => 'Mensagem publicada no mural! Obrigado pelo carinho.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Erro ao publicar mensagem. Tente novamente.']);
    }
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $existing = json_decode(file_get_contents($dataFile), true) ?: [];
    echo json_encode($existing);
    exit;
}
