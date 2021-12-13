
<?php

include_once 'header.php';
       
?>
<div class="w3-padding-128 w3-content w3-text-grey w3-center"id="" style="margin-top: 150px;">
    <h2 class="w3-text-white w3-center w3-blue">
        Criando Função para utilizar o webservice
    </h2>
    <h2>Vamos criar uma função denominada get_endereco com o parâmetro $cep como entrada. Após receber os dados a iremos filtrar para que a variável que os recebem tenha apenas números, em seguida montamos em uma variável a url ($url= "http://viacep.com.br/ws/$cep/xml/";) colocando dentro da mesma a variável $cep.
    </h2>
    <h3 class="w3-text-white ">
       <img src="Img/funcImg.png" alt="imagem do formulário no navegador">
       <br>
       Tendo feito isto basta utilizar o método simplexml_load_file() responsável por fazer a requisição ao WebService retornando um arquivo xml.
    </h3>
    <h2>O método criado recebe como parâmetro um número de CEP e usando do viacep retorna um xml com os dados do endereço informado</h2>
    
    <form action="direcionar.php" method="post"class="w3-row w3-text-blue w3-center"style="width: 100%;">
        
    
        <div class="w3-row w3-section">
            <div class="w3-center"style="">
                <button name="btnXml"class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large"style="width: 90%; margin-lef: 60px;">
                    Qual o formato do resultado dessa requisição?
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>