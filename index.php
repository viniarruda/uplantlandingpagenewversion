<?php
    $hostname_config = "mysql552.umbler.com";
    $database_config = "uplant";
    $username_config = "uplant_adm";
    $password_config = "uplant#17";
    $conexao = mysqli_connect("$hostname_config","$username_config","$password_config","$database_config")
                or die (mysqli_error());
?>
<?php if(isset($_POST['newsletter']) && $_POST['newsletter'] == 'pronto') {
    $emailNews = $_POST['emailNews'];
    $verificar_newsletter = "SELECT emailNews FROM newsletter WHERE emailNews = '$emailNews' ";
    $query = mysqli_query($conexao, $verificar_newsletter)
             or die (mysqli_error());
    if( @mysqli_num_rows($query) >= '1' ) {
      echo "<script language='javascript' type='text/javascript'>alert('E-mail já cadastrado');</script>";
    } else {
      $cadastra_newsletter = "INSERT INTO newsletter (emailNews) VALUES ('$emailNews')";
      $query_insert = mysqli_query($conexao, $cadastra_newsletter);
      if($query_insert) {
        echo "<script language='javascript' type='text/javascript'>alert('E-mail cadastrado com sucesso');</script>";
      } else {
       echo "<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar e-mail');</script>";
      }
    }
} ?>

<!DOCTYPE html>
<html>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107221754-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-107221754-1');
  </script>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Uplant</title>
  <link rel="stylesheet" type="text/css" href="dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="dist/components/transition.css">
  <link rel="stylesheet" type="text/css" href="dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="dist/components/sidebar.css">
  <link rel="stylesheet" type="text/css" href="dist/custom.css">
  <link rel="stylesheet" type="text/css" href="dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="dist/components/label.css">

  <link href='https://fonts.googleapis.com/css?family=Numans' rel='stylesheet'>

  <script src="assets/library/jquery.min.js"></script>
  <script src="dist/components/visibility.js"></script>
  <script src="dist/components/sidebar.js"></script>
  <script src="dist/components/transition.js"></script>
  <script src="dist/custom.js"></script>
</head>

<body>



  <!-- Fluid Menu  -->
  <div class="ui large top fixed hidden menu">
    <div class="ui container">
      <a href="#" class="header item">
        <img class="logo" src="assets/images/custom/up-logo-header.png">
      </a>
      <div class="right menu">
        <a class="item" name="home">Home</a>
        <a class="item" name="informe">Informe-se</a>
      </div>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <div class="ui vertical inverted sidebar menu">
    <a href="#" class="header item">
      <img class="logo" src="assets/images/custom/up-logo-header.png">
    </a>
    <a class="active item" name="home">Home</a>
    <a class="item" name="informe">Informe-se</a>
  </div>


  <div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">

      <!-- Menu -->
      <div class="ui container">
        <div class="ui large secondary inverted pointing menu">
          <a href="#" class="toc item header item">
            <img class="logo " src="assets/images/custom/up-logo-header.png">
          </a>
          <div class="right item">
            <a class="active item" name="home">Home</a>
            <a class="item" name="informe">Informe-se</a>
          </div>
        </div>
      </div>

      <section id="home">
        <div class="ui text container">
          <h2 class="ui inverted header">Conectando agricultores e investidores</h2>
          <h2>Detectamos regiões com grande potencial produtivo e destinamos o investimento que ela merece</h2>
        </div>
      </section>
    </div>

    <section id="informe">
      <div class="ui vertical stripe segment">
        <div class="ui middle aligned stackable grid container">
          <div class="row">
            <div class="nine wide column">
              <h3 class="ui header">Fazemos Seu Dinheiro Nascer Em Árvore</h3>
              <p>Com o pib de x% ao ano, o agronegócio torna-se um investimento precioso para aqueles que desejam um ótimo retorno. E a Uplant te auxília a encontrar um ótimo investimento.</p>
              <h3 class="ui header">Fique Informado!</h3>
              <p>Informe-nos seu e-mail para que possamos conversar com você e sempre proporcionar o melhor investimento!</p>
              <div class="ui action left icon input">
                <form action="#" name="newsletter" method="post" enctype="multipart/form-data">
                    <div class="form form-email">
                        <label class="lbl" for="txt-email">
                            <input id="txt-email" type="text" name="emailNews" class="txt fill-width" placeholder="Digite seu e-mail"/>
                        </label>
                        <input type="hidden" name="newsletter" value="pronto"/>
                        <input type="submit" name="enviar" value="Enviar" class="btn btn-green"/>
                    </div>
                </form>
              </div>
            </div>
            <div class="six wide right floated column">
              <img src="assets/images/custom/money-growing.svg" class="ui large bordered rounded image">
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="ui inverted vertical footer segment">
      <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
        </div>
      </div>
    </div>
  </div>

  <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '60BwCht1zn';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

</body>

</html>