const presentes = [
{
id:1,
nome:"Aparelho de jantar e chá 20 peças",
preco:360,
img:"img/jantar.jpg",
comprado:false
},

{
id:2,
nome:"Conjunto de taças 6 peças",
preco:175,
img:"img/tacas.jpg",
comprado:false
},

{
id:3,
nome:"Faqueiro 76 peças inox",
preco:1335,
img:"img/faqueiro.jpg",
comprado:false
},

{
id:4,
nome:"Batedeira planetária",
preco:370,
img:"img/batedeira.jpg",
comprado:false
}
]

const container = document.getElementById("produtos")

function carregarProdutos(){

container.innerHTML=""

presentes.forEach(presente =>{

const div = document.createElement("div")
div.classList.add("produto")

if(presente.comprado){
div.classList.add("comprado")
}

div.innerHTML = `
<img src="${presente.img}">
<h3>${presente.nome}</h3>
<p class="preco">R$ ${presente.preco}</p>
<button onclick="comprar(${presente.id})">
${presente.comprado ? "COMPRADO" : "COMPRAR"}
</button>
`

container.appendChild(div)

})

}

function comprar(id){

const presente = presentes.find(p => p.id === id)

if(!presente.comprado){

alert("Obrigado por comprar este presente!")

presente.comprado = true

carregarProdutos()

}

}

carregarProdutos()-