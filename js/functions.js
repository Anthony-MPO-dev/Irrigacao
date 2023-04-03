function onClick()
	{
		window.location.href='cadastrar.php';
	}
//Chama o input file por um botão
$("#button1").click(function(){
    $("input[name=imagem]").trigger('click');
});

// formata os caracteres do input telefone
function formatarTell(mascara, documento)
    {
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i);
  
        if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
        }
    }

//Mostra um preview da Imagem do Usuário

function imgPreview(){
	var imagem = document.querySelector('input[name=imagem]').files[0];
	var preview = document.querySelector('img[name=img]');

	var reader = new FileReader();

	reader.onloadend = function (){
		preview.src = reader.result;
	}

	if(imagem){

		reader.readAsDataURL(imagem);

	}else{

		preview.src = "";

	}
}


//Funções para chamar o cep no site do viacep e formatar o CEP do IBGE

function formatarCEP(mascara, documento)
    {
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)
      
        if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
        }
    }
//Procura do endereço  
  
function limpa_formulario_cep() 
    {
    //Limpa valores do formulário de cep.
    document.getElementById('inputRua').value=("");
    document.getElementById('inputBairro').value=("");
    document.getElementById('inputCidade').value=("");
    document.getElementById('inputEstado').value=("");
    }

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('inputRua').value=(conteudo.logradouro);
        document.getElementById('inputBairro').value=(conteudo.bairro);
        document.getElementById('inputCidade').value=(conteudo.localidade);
        document.getElementById('inputEstado').value=(conteudo.uf);
    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulario_cep();
        alert("CEP não encontrado.");
        document.getElementById('cep').value=("");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep !== "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if(validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('inputRua').value="...";
            document.getElementById('inputBairro').value="...";
            document.getElementById('inputCidade').value="...";
            document.getElementById('inputEstado').value="...";

            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = '//viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);
        } //end if.
        else {
            //cep é inválido.
            limpa_formulario_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulario_cep();
    }
}

$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});

// função para adicionar o dias de inicio e fim do cronograma

function diasvalor(valor){

   var dias = valor;

    if (dias == 2) {
        document.getElementById("divDias").innerHTML='<div class="form-row text-center"><div class="form-group col-sm-12 d-inline"><label>Realizar de<input type="date" name="de" id="inputDe"class="form-control ajustardate"></label><label>Até:<input type="date" name="ate" id="inputAte" class="form-control ajustardate"></label></div></div>';
    } else {
        document.getElementById("divDias").innerHTML='';
    }
}

// função para verificar quando deve pular de horas para minutos dos cronogramas

function verificar1(){

    if(document.getElementById('inputHorasI').value.length==1){

    document.getElementById('inputMinutosI').focus();

}}

function verificar2(){

    if(document.getElementById('inputHorasT').value.length==1){

    document.getElementById('inputMinutosIT').focus();

}}

// função não digiar barra espaço

function espaco(){

var tecla=window.event.keyCode;if (tecla==32) {

alert('Por favor, digite apenas o primeiro nome.'); event.keyCode=0; event.returnValue=false;

}

}

function sairAgora(){

    alert('Você Deslogou!');
    window.location.href='index.php';
    document.write("<?php session_destroy(); ?>");

}


//Efeito Ripples in water| Ondulações na água

window.$(".masthead").ripples({
                resolution: 200,
                perturbance: 0.04,
            });

window.$(".masthead2").ripples({
                resolution: 100,
                perturbance: 0.02,
            });


