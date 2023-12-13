document.addEventListener('DOMContentLoaded', mostrarSenha);

function mostrarSenha(){
    const olhoSimbolo = document.querySelector(".mostrarSenha");
    const passwordInput = document.querySelector(olhoSimbolo.getAttribute("toggle"));
    olhoSimbolo.addEventListener("mousedown", ()=>{
        passwordInput.setAttribute("type", "text");
        this.querySelector('i').className = 'far fa-eye';
        
        

    })
    olhoSimbolo.addEventListener("mouseup", ()=>{
        passwordInput.setAttribute("type", "password");
        this.querySelector('i').className = 'far fa-eye-slash';
    })
}

function mensagem(){
    divMensagem = document.querySelector(".mensagem");
   
    divMensagem.style.opacity = "1";
    setTimeout(()=>{
        
        divMensagem.style.opacity = "0";
    }, 5000);
}


function sair(){
    botao = document.querySelector("#botao_sair");
    botao_sair = document.querySelector("#sair");
    botao.addEventListener("click", () =>{
        if (botao_sair.style.display == "block"){
            botao_sair.style.display = "none";
        }
        else{
            botao_sair.style.display = "block"; 
            botao_sair.addEventListener("click", ()=>{
                window.location.href = "index.php?logout=true";
            })  
        }
    })
}


const labels = document.querySelectorAll('.labelInput');
const inputs = document.querySelectorAll('.inputBox');

inputs.forEach((input, index) =>{
    input.addEventListener("focus", () =>{
        labels[index].classList.add("ativo");
        input.classList.add("ativo");
    })

    input.addEventListener("blur", ()=>{
        if(!input.value){
            labels[index].classList.remove("ativo");
            input.classList.remove("ativo");
        }
    })
})

