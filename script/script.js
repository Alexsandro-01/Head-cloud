function ajax(url) {
   
    let conteudo = document.getElementById('conteudo')
    
    var resultado = document.getElementById('resultado')

    //Testa se a div de resultado já existe para requisições subsequentes
    if(typeof(resultado) == 'undefined' || resultado == null) {
        var resultado = document.createElement('div')
        resultado.className = 'tab-resultado'
        resultado.id = 'resultado'
    }
    else {
        resultado.innerHTML = ''
    }

    let ajax = new XMLHttpRequest();

    ajax.open('GET', url);

    ajax.onreadystatechange = () => {
        if(ajax.readyState == 4 && ajax.status == 200) {
            
            resultado.innerHTML = ajax.responseText

            conteudo.appendChild(resultado)
        }
        
    }

    ajax.send();
}



function apagar(matricula, curso, pagina) {
    location.href = "controller.php?acao=apagar&curso=" + curso + "&pag=" + pagina + "&matricula=" + matricula
}




//o param página é para receber a página que o gestor requereu, se foi alunos, A, B
//e assim podermos fazer o reload.

function inserir(matricula, curso, pagina) {
   
    //form de adição
    let form = document.createElement('form');
    form.action = 'controller.php?acao=inserir'
    form.method = 'post'
    form.className = 'form-nota'

    //input p entrada da nota
    let inputNota = document.createElement('input')
    inputNota.type = 'number'
    inputNota.step = '0.1'
    inputNota.name = 'nota'
    inputNota.setAttribute('placeholder', 'inserir')

    //input hidden para guardar o id do aluno
    let inpudMatricula = document.createElement('input')
    inpudMatricula.type = 'hidden'
    inpudMatricula.name = 'matricula'
    inpudMatricula.value = matricula

    //input hidden para guardar o curso
    let inputCurso = document.createElement('input')
    inputCurso.type = 'hidden'
    inputCurso.name = 'curso'
    inputCurso.value = curso

    //input hidden para guardar o pagina requerida
    let inputPag = document.createElement('input')
    inputPag.type = 'hidden'
    inputPag.name = 'pagina'
    inputPag.value = pagina

    //button para envio do submit
    let botao = document.createElement('button')
    botao.type = 'submit'
    botao.innerHTML = 'OK'
    
    form.appendChild(inputNota)

    form.appendChild(inpudMatricula)
    
    form.appendChild(inputCurso)

    form.appendChild(inputPag)
    
    form.appendChild(botao)
    
    //console.log(form)
    
    //seleciona o elemento da nota
    let nota = document.getElementById(`matricula_${matricula}_${curso}`)

    nota.innerHTML = ''
    
    nota.insertBefore(form, nota[0])
}