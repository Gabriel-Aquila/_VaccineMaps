<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>VaccineMaps</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="estilo/index.css">
</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="padding: 1rem 2rem; background-color: #90E4F5;">
  <a class="navbar-brand" href="#"><img src="image/Vaccinmaps.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-size: 1.10rem">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item">
        <a class="nav-link grow" href="#comofunciona">Como funciona? <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link grow" href="#noticias">Notícias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link grow" href="#ajuda">Ajuda</a>
      </li>
       <li class="nav-item">
        <a class="nav-link grow" href="#social">Social</a>
      </li>

    </ul>
    <!-- ICON -->
   <a style="cursor:pointer;" name=""><img src="image/usergray.png" data-toggle="modal" data-target="#modalExemplo" ></a>

 </div>


</nav>
<main>

<div class="jumbotron1 jumbotron-fluid">
  <div class="container">
        <div class="row">
      <div class="col-12 text-center">
    <h1 class="display-4">INFORME SEU CEP</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
      <form class="form-inline" style="justify-content: center;">
        <input class="form-control ml-4 mr-2" type="search" id="inputCEP" placeholder="Ex: 02880-010">
      </form>
      <br>
      <a href="pagcep.html">
        <button class="btn btn-dark" style="padding: 0.7rem 1.5rem; font-size: 1.1rem" type="submit">Pesquisar</button>
      </a>
  </div>
    </div>
  </div> 

</div>


<div class="container">
<section id="comofunciona" style="padding-top: 100px;" >
<h1 style="text-align: left; " >Como Funciona?</h1>
</div>
    <div class="icones-display container">
            <div class="blog">
                <img src="image/pesquisecep.png" style="filter:drop-shadow(8px 8px 10px gray);"/>
                <br>
                <br>
                <h3>Passo 1</h3>
                <center>Informe seu CEP no campo de busca.</center>
                </div>
            <div class="blog">
                <img src="image/mapa.png" style="filter:drop-shadow(8px 8px 10px gray);"/>
                <br>
                <br>
                <h3>Passo 2</h3>
                <center>Navegue pelo mapa e localize o posto desejado.</center>
            </div>
            <div class="blog">
                <img src="image/conversacao.png"  style="filter:drop-shadow(8px 8px 10px gray);"/>
                <br>
                <br>
                   <h3>Passo 3</h3>
                <center>Aproveite a nossa comunidade interativa.</center>
            </div>
        </div>
</section>


<div class="container">
<section id="noticias" style="padding-top: 100px;">
<h1 style="text-align: left;" >Notícias</h1>
 <div class="row">
        <div class="col grow">
             <div class="card bg-dark text-white" style="border: none;">
              <a href="exemplonoticia.html"><img src="image/n1.jpg"class="card-img " style="height: 425px; opacity: 90%; filter:contrast(90%);" alt="...">
              <div class="card-img-overlay" style="color: white;">
                <h5 class="card-title">Título da Matéria</h5>
                <p class="card-text" style="font-family: Roboto;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div></a>
            </div>
           
      </div>

           <div class="col">
            <div class="grow">
            <div class="card bg-dark text-white" style="border: none;">
             <a href="exemplonoticia.html"><img src="image/n2.jpg"class="card-img" style="height: 200px; opacity: 90%; filter:contrast(90%);" alt="...">              
              <div class="card-img-overlay" style="color: white;">
                <h5 class="card-title">Título da Matéria</h5>
                <p class="card-text" style="font-family: Roboto;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div></a>
            </div>
            </div>
            <br>
            <div class="grow">
             <div class="card bg-dark text-white" style="border: none;">
              <a href="exemplonoticia.html"><img src="image/n3.jpg" class="card-img"  style="height: 200px; opacity: 90%; filter:contrast(90%);" alt="...">
              <div class="card-img-overlay" style="color: white;">
                <h5 class="card-title">Título da Matéria</h5>
                <p class="card-text" style="font-family: Roboto;">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div></a>
            </div>
            </div>
            </div>

</div>
<br>
<a href="pagnoticia.html" style="margin-left: 85%; color: black; font-weight: bold;">Ver mais notícias ►</a>

</section>
</div>

<section id="ajuda" style="padding-top: 100px;">
<div class="jumbotron2 jumbotron-fluid">

<div class="container">
<h1 style="text-align: left;" >Tem dúvidas? Conta aqui pra gente!</h1>

    <div class="ajuda-display">
            <div class="form-group">
         <input type="text" class="form-control mb-2" style="height: 42px;width:160%; padding-left:  15px" id="inlineFormInput" placeholder="Nome completo">
           </div>

            <div class="form-group"> 
      <input type="email" class="form-control" style="height: 42px;width:160%; padding-left:  15px" id="exampleFormControlInput1" placeholder="E-mail">
            </div>
  
             <div class="form-group">
 
        <input type="text" class="form-control" style="height: 42px;width:160%; padding-left:  15px" id="formGroupExampleInput" placeholder="Telefone">
            </div>

        </div>

          <div class="form-group">
    <textarea class="form-control" style="font-size: 0.9999rem; padding-left:  15px;" id="exampleFormControlTextarea1" rows="3.5" placeholder="Mensagem"></textarea>
         </div>

  <button type="submit" class="btn btn-primary" style="padding: 0.3rem 2rem; font-size: 0.9999rem; background-color: black">Enviar</button>

  </div>


</div>
</section>

<section id="social" style="padding-top: 100px;">
<div class="container">

<h1 style="text-align: left;" >Social</h1>
</div>
<div class="social-display container">
   <div class="social1">
<blockquote class="twitter-tweet"><p lang="pt" dir="ltr">❤😷 Mostre que você se importa com os outros e com você mesmo, use máscara sempre que sair de casa! Faça a sua parte!<br><br>Saiba + em <a href="https://t.co/9IMmkGIELX">https://t.co/9IMmkGIELX</a><a href="https://twitter.com/hashtag/UseMascara?src=hash&amp;ref_src=twsrc%5Etfw">#UseMascara</a><a href="https://twitter.com/hashtag/TodosContraoCoronavirus?src=hash&amp;ref_src=twsrc%5Etfw">#TodosContraoCoronavirus</a> <a href="https://t.co/9yQWUZ9rP0">pic.twitter.com/9yQWUZ9rP0</a></p>&mdash; Secretaria da Saúde SP (@spsaude_) <a href="https://twitter.com/spsaude_/status/1290771344582496257?ref_src=twsrc%5Etfw">August 4, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

  <div class="social2">
<blockquote class="twitter-tweet"><p lang="und" dir="ltr"><a href="https://twitter.com/hashtag/vacinese?src=hash&amp;ref_src=twsrc%5Etfw">#vacinese</a> <a href="https://t.co/BOGk4e6s0F">https://t.co/BOGk4e6s0F</a></p>&mdash; Secretaria da Saúde SP (@spsaude_) <a href="https://twitter.com/spsaude_/status/1292154031247372288?ref_src=twsrc%5Etfw">August 8, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

<blockquote class="twitter-tweet"><p lang="pt" dir="ltr"><a href="https://twitter.com/hashtag/VacinaBrasil?src=hash&amp;ref_src=twsrc%5Etfw">#VacinaBrasil</a> Hoje também é o último dia da campanha de vacinação contra o <a href="https://twitter.com/hashtag/sarampo?src=hash&amp;ref_src=twsrc%5Etfw">#sarampo</a>. Se você tem entre 20 e 49 anos de idade, contamos com seu apoio. A vacina está disponível nos 43 mil postos de saúde em todo o país.<br><br>Saiba mais em <a href="https://t.co/rRh8TjSWb8">https://t.co/rRh8TjSWb8</a> <a href="https://t.co/sg4MbhZ9rN">pic.twitter.com/sg4MbhZ9rN</a></p>&mdash; Ministério da Saúde (@minsaude) <a href="https://twitter.com/minsaude/status/1322146460146704384?ref_src=twsrc%5Etfw">October 30, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>

<div class="social-display container">
  <div class="social1">
  <blockquote class="twitter-tweet"><p lang="pt" dir="ltr">❗️Fique atento ❗️<br>Campanha de <a href="https://twitter.com/hashtag/vacina%C3%A7%C3%A3o?src=hash&amp;ref_src=twsrc%5Etfw">#vacinação</a> contra <a href="https://twitter.com/hashtag/poliomielite?src=hash&amp;ref_src=twsrc%5Etfw">#poliomielite</a> e multivacinação é prorrogada até 13 de novembro.<br><br>A medida visa aumentar as coberturas vacinais contra cerca de 20 doenças. Vá até um posto de saúde. <br><br> Saiba mais: <a href="https://t.co/LSW4idzOPA">https://t.co/LSW4idzOPA</a> <a href="https://t.co/zl5ugjl7Rm">pic.twitter.com/zl5ugjl7Rm</a></p>&mdash; Secretaria da Saúde SP (@spsaude_) <a href="https://twitter.com/spsaude_/status/1321923625071554561?ref_src=twsrc%5Etfw">October 29, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class="social2">
  <blockquote class="twitter-tweet"><p lang="pt" dir="ltr">💉 Governo de SP cria mais seis centros de <a href="https://twitter.com/hashtag/pesquisa?src=hash&amp;ref_src=twsrc%5Etfw">#pesquisa</a> da <a href="https://twitter.com/hashtag/CoronaVac?src=hash&amp;ref_src=twsrc%5Etfw">#CoronaVac</a>.<br><br>🎯 Meta do <a href="https://twitter.com/butantanoficial?ref_src=twsrc%5Etfw">@butantanoficial</a> é acelerar fase final de testes clínicos que vão apontar eficácia da <a href="https://twitter.com/hashtag/vacina?src=hash&amp;ref_src=twsrc%5Etfw">#vacina</a> para registro na Anvisa.<br><br>➡️ Saiba + <a href="https://t.co/4DcaRKzUbw">https://t.co/4DcaRKzUbw</a> <a href="https://twitter.com/hashtag/saude?src=hash&amp;ref_src=twsrc%5Etfw">#saude</a><a href="https://twitter.com/hashtag/governosp?src=hash&amp;ref_src=twsrc%5Etfw">#governosp</a> <a href="https://t.co/EN9WO270HD">pic.twitter.com/EN9WO270HD</a></p>&mdash; Governo de S. Paulo (@governosp) <a href="https://twitter.com/governosp/status/1319717970277523457?ref_src=twsrc%5Etfw">October 23, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
<div class="social3">
  <blockquote class="twitter-tweet"><p lang="pt" dir="ltr"><a href="https://twitter.com/hashtag/VacinaBrasil?src=hash&amp;ref_src=twsrc%5Etfw">#VacinaBrasil</a> ÚLTIMO DIA! Contamos com você para fazer a diferença e prevenir nossas crianças contra doenças como a poliomielite. Leve seus filhos para se imunizarem, e avise os amigos e familiares!<br><br>Saiba mais em <a href="https://t.co/rRh8TjSWb8">https://t.co/rRh8TjSWb8</a> <a href="https://t.co/enZVnIBmLS">pic.twitter.com/enZVnIBmLS</a></p>&mdash; Ministério da Saúde (@minsaude) <a href="https://twitter.com/minsaude/status/1322131153013280768?ref_src=twsrc%5Etfw">October 30, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
</div>
</section>
<br>

<div id="voltarTopo">
  <a> <img id="subir" href="#" src="image/arrow.png"></a>
</div>

</main>
<br>
<br>


  
    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Sobre a VaccineMaps</h6>
            <p class="text-justify" style="width: 80%;">Nós da VaccineMaps, criamos este site colaborativo para ajudar os usuários a encontrar as vacinas desejadas. O projeto surgiu com a inteção de contribuir para o aumento da taxa de cobertura vacinal.</p>
          </div>

          <div class="col-xs-6 col-md-3">
            <h6>Menu</h6>
            <ul class="footer-links">
              <li><a href="#comofunciona">Como funciona?</a></li>
              <li><a href="#noticias">Notícias</a></li>
              <li><a href="#ajuda">Ajuda</a></li>
              <li><a href="#social">Social</a></li>
            </ul>
          </div>

          <div class="col-xs-6 col-md-3">
            <a href="#"><img src="image/Vaccinmaps.png"></a>
          </div>


        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright © 2020 All Rights Reserved by VaccineMaps.
            </p>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="social-icons">
                <a href="#" style="padding-right: 25px;"><img src="image/face.png"></a>
                <a href="#" style="padding-right: 25px;"><img src="image/instagram.png"></a>
                <a href="#" style="padding-right: 25px;"><img src="image/twitter.png"></a>
            </div>
          </div>
        </div>
      </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Seja Bem-Vindo!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        






        <div class="containercadlogin" >
    <a class="linkscadlogin" id="paracadastro"></a>
    <a class="linkscadlogin" id="paralogin"></a>
     
    <div class="cadlogingcontent">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="loginhome">
        <form method="post" action="login.php"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu E-mail</label>
            <input id="nome_login" name="usuario" required="required" type="email" placeholder="Ex. contato@gmail.com"/>
          </p>
           
          <p> 
            <label for="email_login">Sua Senha</label>
            <input id="email_login" name="senha" required="required" type="password" placeholder="Ex. 1234" /> 
          </p>
           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
           
          <p class="linklogincad">
            Ainda não possui uma conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>
 
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastrohome">
        <form method="post" action=""> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu Nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Ex. José da Silva" />
          </p>
           
          <p> 
            <label for="email_cad">Seu E-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="Ex. contato@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua Senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Ex. 1234"/>
          </p>
           
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
           
          <p class="linklogincad">  
            Já possui uma conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>




  </div>
</body>
</html>