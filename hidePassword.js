let input = document.getElementById('senha')
let btn = document.getElementById('mostrar')
let img = document.getElementById('eye')

btn.addEventListener('click', function mostrarSenha() {
    if(input.type === 'password')  {
        img.src = './assets/olhoClose.png'
        input.type = 'text'
    }          
    else {
        img.src = './assets/olhoOpen.png'
        input.type = 'password'
    }
        
})