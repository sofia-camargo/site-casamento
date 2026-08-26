gifts = [
    ("Cafeteira 110v", "180,00"),
    ("Liquidificador 1,25L", "200,00"),
    ("Jogo de Panelas Antiaderente", "800,00"),
    ("Jogo de Lençol, 600 fios King Size", "195,00"),
    ("Jogo de toalhas 100% Algodão Egípcio", "325,00"),
    ("Geladeira Frost Free Enverse 447L", "4.300,00"),
    ("Cooktop 5 bocas a gás", "925,00"),
    ("Sofá retrátil em linho", "6.300,00"),
    ("Micro-ondas 1200W 110V", "620,00"),
    ("Conjunto de facas profissional", "210,00"),
    ("Botijão de gás com casco", "250,00"),
    ("Smart TV 58 polegadas UHD LED", "2.850,00"),
    ("Caixa de som bluetooth", "435,00"),
    ("Kit churrasco 17 peças", "1.410,00"),
    ("Fritadeira Elétrica sem óleo", "265,00"),
    ("Purificador de água com painel digital", "780,00")
]

html = '<div class="presentes-grid">\n'
for i, (name, price) in enumerate(gifts, 1):
    html += f'''      <!-- Gift Item {i} -->
      <div class="presente-card reveal">
        <div class="presente-img-wrapper">
          <img src="assets/images/presente{i}.jpg" alt="{name}">
        </div>
        <h3 class="presente-name">{name}</h3>
        <div class="presente-price">R$ {price}</div>
        <button class="btn-comprar" onclick="copyPixKey('juh.marrafon@gmail.com', '{name}')">COMPRAR</button>
      </div>\n'''
html += '    </div>'

with open('gifts.html', 'w', encoding='utf-8') as f:
    f.write(html)
