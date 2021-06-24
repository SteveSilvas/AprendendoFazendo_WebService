<?php
//index
if (isset($_POST["btnUm"])){
    header("location: oqesao.php") 
    or die ("deixe o header");
}
//o que são
if (isset($_POST["btnUm"])){
    header("location: oqesao.php") 
    or die ("deixe o header");
}
//exemplos
if (isset($_POST["btnDois"])){
    header("location: exemplos.php") 
    or die ("deixe o header");
}
//o que vamos aprender?
if (isset($_POST["btnTres"])){
    header("location: objetivos.php") 
    or die ("deixe o header");
}
//vamos la
if (isset($_POST["btnQuatro"])){
    header("location: comecando.php") 
    or die ("deixe o header");
}
//Mãos à obra //header
if (isset($_POST["btnCinco"])){
    header("location: criandoForm.php") 
    or die ("deixe o header");
}
//criando formulário// inserindo o arq header
if (isset($_POST["btnSeis"])){
    header("location: criandoForm2.php") 
    or die ("deixe o header");
}
//criando formulário// programando os imputs
if (isset($_POST["btnSete"])){
    header("location: criandoForm3.php") 
    or die ("deixe o header");
}
//criando formulário// programando os imputs2
if (isset($_POST["btnOito"])){
    header("location: criandoForm4.php") 
    or die ("deixe o header");
}
//criando formulário// programando os imputs3
if (isset($_POST["btnNove"])){
    header("location: criandoForm5.php") 
    or die ("deixe o header");
}

//criando formulário// programando os imputs3
if (isset($_POST["btnDez"])){
    header("location: criandoForm6.php") 
    or die ("deixe o header");
}
//Atenção à action
if (isset($_POST["btnOnze"])){
    header("location: atencaoAction.php") 
    or die ("deixe o header");
}

//Visualizando
if (isset($_POST["btnView"])){
    header("location: View.php") 
    or die ("deixe o header");
}
//chamando a tela de função que faz a requisiçao do webservice
if (isset($_POST["btnFWS"])){
    header("location: funcWS.php") 
    or die ("deixe o header");
}
//resultado dessa requisição segundo o site viacep
if (isset($_POST["btnXml"])){
    header("location: xml.php") 
    or die ("deixe o header");
}
//mostrando esse resultado Html
if (isset($_POST["btnMostrarHtml"])){
    header("location: xmlParaHtml.php") 
    or die ("deixe o header");
}
//mostrando esse resultado View
if (isset($_POST["btnMostrarHtmlSaida"])){
    header("location: xmlParaHtmlSaida.php") 
    or die ("deixe o header");
}

//melhorando a saída
if (isset($_POST["btnMelhorarSaida"])){
    header("location: saidaMelhor.php") 
    or die ("deixe o header");
}
//melhorando a saída2
if (isset($_POST["btnValue"])){
    header("location: saidaMelhor2.php") 
    or die ("deixe o header");
}
//melhorando a saída3
if (isset($_POST["btnValue2"])){
    header("location: saidaMelhor3.php") 
    or die ("deixe o header");
}
//melhorando a saída4
if (isset($_POST["btnValue3"])){
    header("location: saidaMelhor4.php") 
    or die ("deixe o header");
}
//Refazendo trageto
if (isset($_POST["btnValue4"])){
    header("location: index.php") 
    or die ("deixe o header");
}
?>