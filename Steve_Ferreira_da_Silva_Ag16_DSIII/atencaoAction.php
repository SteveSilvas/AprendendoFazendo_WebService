
<?php

include_once 'header.php';
       
?>
<div class="w3-padding-128 w3-content w3-text-grey w3-center"id="" style="margin-top: 150px;">
    <h2 class="w3-text-white w3-center w3-blue">
        Criando Formulário para receber os dados de endereço
    </h2>
    <h2>Atenção: a Action está com o símbolo "#" pois vai direcionar a ação para a própria página index que estamos desenvolvendo, vamos então codificar a função que vai pegar o número do cep e enviar via http para o retornar o valor dos campos logradouro, bairro, cidade e estado.
    </h2>
    <h3 class="w3-text-white ">
       <img src="Img/atencao.png" alt="imagem da action">
       <h2>O método (method) do formulário é via post.
       </h2>
    </h3>
    
    <form action="direcionar.php" method="post"class="w3-row w3-text-blue w3-center"style="width: 100%;">
        
    
        <div class="w3-row w3-section">
            <div class="w3-center"style="">
                <button name="btnView"class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large"style="width: 90%; margin-lef: 60px;">
                    Visualizando
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>