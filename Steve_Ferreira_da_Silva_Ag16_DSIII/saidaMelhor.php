
<?php

include_once 'header.php';
       
?>
<div class="w3-padding-128 w3-content w3-text-grey w3-center"id="" style="margin-top: 150px;">
    <h2 class="w3-text-white w3-center w3-blue">
        Utilizando dados recebidos pelo WebServices no formulário
    </h2>
    <h2>Podemos setar os valores recebidos pela função nos demais campos do formulário
    <br>
    Para Abrimos a Session e inicializamos nome, CEP, logradouro, número, bairro, cidade e estado.
    </h2>
    <img src="Img/session.png" alt="">
   
    <h3>
    Em seguida atribuímos a ela o resultado do método get_endereco.
    </h3>
    <form action="direcionar.php" method="post"class="w3-row w3-text-blue w3-center"style="width: 100%;">
        
    
        <div class="w3-row w3-section">
            <div class="w3-center"style="">
                <button name="btnValue"class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large"style="width: 90%; margin-lef: 60px;">
                Finalizando
                </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>