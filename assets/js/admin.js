document.getElementById('recurses').onclick = () => {
    document.querySelector('.tools-admin').toggleAttribute('hidden')
}

const forms = document.querySelectorAll('.forms')
const buttons = document.querySelectorAll('.btn-proccess')
const inputs = document.querySelectorAll('.files') 
const labels = document.querySelectorAll('label')
const categorias = document.querySelectorAll('.categorias')
const text = document.querySelectorAll('.text')

// Function of logout
$(document).ready(function (){

    inputs.forEach((input, i) => {
        input.addEventListener('change', (e) => {
            const files = e.target.files
            if(files) {
                
                buttons[i].removeAttribute('hidden')
                text[i].innerText = `${files.length} Imagens Selecionadas`

            }
            
        })
    })
   $('.btn-sair').on('click', () => {
       $.ajax({
           method: 'post',
           data: { logout: true },
           url: 'admin/logout'
       }).done(() => {
     
           setTimeout(() => {
            location.href = '/'
           }, 10)
       })
   })
});
