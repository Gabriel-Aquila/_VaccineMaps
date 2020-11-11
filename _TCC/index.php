<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>VaccineMaps</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="estilo/index.css">
  <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>

	<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="padding: 1rem 2rem; background-color: #90E4F5;">
  <a class="navbar-brand" href="#"><img src="image/logo.png"></a>
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
    <p class="lead">Pesquise seu CEP para encontrar os postos mais próximos e localize a vacina que deseja.</p>
      <form class="form-inline" style="justify-content: center;">
        <input class="form-control ml-4 mr-2" type="Search" id="inputCEP" placeholder="Ex: 02880-010" style="width: 30%; height: 40px; text-align: center;">
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
    <div class="row" style="text-align: center;">
            <div class="col">
                <img src="image/pesquisecep.png" style="filter:drop-shadow(8px 8px 10px gray);"/>
                <br>
                <br>
                <h3>Passo 1</h3>
                <center>Informe seu CEP no campo de busca.</center>
                </div>
            <div class="col">
                <img src="image/mapa.png" style="filter:drop-shadow(8px 8px 10px gray);"/>
                <br>
                <br>
                <h3>Passo 2</h3>
                <center>Navegue pelo mapa e localize o posto desejado.</center>
            </div>
            <div class="col">
                <img src="image/conversacao.png"  style="filter:drop-shadow(8px 8px 10px gray);"/>
                <br>
                <br>
                   <h3>Passo 3</h3>
                <center>Aproveite a nossa comunidade interativa.</center>
            </div>
        </div>
</section>
        </div>



<!-- aparecer no desktop -->  
<div class="container">
    
<section id="noticias" style="padding-top: 100px;">
<div class="d-none d-md-none d-lg-block d-xl-block">
<h1 style="text-align: left;" >Notícias</h1>

 <div class="row">
        <div class="col grow">
             <div class="card bg-dark text-white" style="border: none;">
              <a href="noticia9.html"><img src="image/nvirusdesktop.png"class="card-img " style="height: 425px; opacity: 90%; filter:contrast(90%);" alt="...">
              <div class="card-img-overlay" style="color: white; margin-top: 55%;">
                <h5 class="card-title text-center">COVID-19: Todos com os mais vulneráveis</h5>
              </div></a>
            </div>
           
      </div>
           <div class="col">
            <div class="grow">
            <div class="card bg-dark text-white" style="border: none;">
             <a href="noticia7.html"><img src="image/n1new.jpg"class="card-img" style="height: 200px; opacity: 90%; filter:contrast(90%);" alt="...">              
              <div class="card-img-overlay" style="color: white; margin-top: 15%;">
                <h5 class="card-title text-center ">Comportamento do coronavírus no calor é chave para previsões sobre seu controle</h5>
              </div></a>
            </div>
            </div>
            <br>
            <div class="grow">
             <div class="card bg-dark text-white" style="border: none;">
              <a href="noticia8.html"><img src="image/sarampo.png" class="card-img"  style="height: 200px; opacity: 90%; filter:contrast(90%);" alt="...">
              <div class="card-img-overlay" style="color: white; margin-top: 15%;">
                <h5 class="card-title text-center">Doenças infectocontagiosas como a poliomielite e o sarampo voltam a assustar</h5>
              </div></a>
            </div>
            </div>
            </div>
 </div>
<br>
<a href="pagnoticia.html"><button class="btn btn-dark" style="padding: 0.7rem 1.5rem; font-size: 1.1rem; width: 50%; margin-left: 25%;" type="submit">Ver mais notícias</button></a>

 

</div>

 


     <!-- aparecer no mobile -->
    <div class="d-sm-block d-lg-none">
      <h1 style="text-align: left;" >Notícias</h1>
       <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="noticia9.html"><img src="image/nvirus.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>COVID-19: Todos com os mais vulneráveis</h5>
      </div>
    </div>
  </a>
    <div class="carousel-item">
      <a href="noticia7.html"><img src="image/n1new.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Comportamento do coronavírus no calor é chave para previsões sobre seu controle</h5>
      </div>
    </div>
  </a>
    <div class="carousel-item">
      <a href="noticia8.html"><img src="image/sarampo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5>Doenças infectocontagiosas como a poliomielite e o sarampo voltam a assustar</h5>
      </div>
    </div>
  </a>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<a href="pagnoticia.html"><button class="btn btn-dark" style="padding: 0.7rem 1.5rem; font-size: 1.1rem; width: 50%; margin-left: 25%;" type="submit">Ver mais notícias</button></a>
</div>

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
 
        <input type="Tel" class="form-control" style="height: 42px;width:160%; padding-left:  15px" id="formGroupExampleInput" placeholder="Telefone">
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
<div class="row social-display">
  <div class="col">
    <div class="social1">
      <blockquote class="twitter-tweet"><p lang="pt" dir="ltr">💧 Vacinação é proteção!<br><br>➡ Campanha de <a href="https://twitter.com/hashtag/vacina%C3%A7%C3%A3o?src=hash&amp;ref_src=twsrc%5Etfw">#vacinação</a> contra <a href="https://twitter.com/hashtag/poliomielite?src=hash&amp;ref_src=twsrc%5Etfw">#poliomielite</a> e <a href="https://twitter.com/hashtag/multivacina%C3%A7%C3%A3o?src=hash&amp;ref_src=twsrc%5Etfw">#multivacinação</a> protege contra cerca de 20 doenças.<br><br>➡ Dirija-se ao posto de saúde mais próximo até 13 de novembro.<br><br>Saiba+ <a href="https://t.co/LSW4idRpH8">https://t.co/LSW4idRpH8</a> <a href="https://t.co/CPxanuul2K">pic.twitter.com/CPxanuul2K</a></p>&mdash; Secretaria da Saúde SP (@spsaude_) <a href="https://twitter.com/spsaude_/status/1323685120318922753?ref_src=twsrc%5Etfw">November 3, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
  </div>
  <div class="col">
    <div class="social2">
    <blockquote class="twitter-tweet"><p lang="pt" dir="ltr"><a href="https://twitter.com/hashtag/VacinaBrasil?src=hash&amp;ref_src=twsrc%5Etfw">#VacinaBrasil</a> Hoje também é o último dia da campanha de vacinação contra o <a href="https://twitter.com/hashtag/sarampo?src=hash&amp;ref_src=twsrc%5Etfw">#sarampo</a>. Se você tem entre 20 e 49 anos de idade, contamos com seu apoio. A vacina está disponível nos 43 mil postos de saúde em todo o país.<br><br>Saiba mais em <a href="https://t.co/rRh8TjSWb8">https://t.co/rRh8TjSWb8</a> <a href="https://t.co/sg4MbhZ9rN">pic.twitter.com/sg4MbhZ9rN</a></p>&mdash; Ministério da Saúde (@minsaude) <a href="https://twitter.com/minsaude/status/1322146460146704384?ref_src=twsrc%5Etfw">October 30, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  </div>
</div>
<div class="row social-display">
  <div class="col">
  <div class="social3">
  <blockquote class="twitter-tweet"><p lang="pt" dir="ltr">A vacina do <a href="https://twitter.com/hashtag/Butantan?src=hash&amp;ref_src=twsrc%5Etfw">#Butantan</a> é segura? Ela foi mesmo produzida em menos de um ano? Nossos especialistas esclarecem essas dúvidas, em mais um episódio do <a href="https://twitter.com/hashtag/ButantannaPandemia?src=hash&amp;ref_src=twsrc%5Etfw">#ButantannaPandemia</a>.</p>&mdash; Instituto Butantan (@butantanoficial) <a href="https://twitter.com/butantanoficial/status/1324425589319700481?ref_src=twsrc%5Etfw">November 5, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  </div>
  <div class="col">
  <div class="social4">
 <blockquote class="twitter-tweet"><p lang="pt" dir="ltr">💉 “Nossa região 🌎 está trabalhando arduamente na preparação de uma vacina, mas também devemos manter um curso forte e constante para continuar lutando contra o vírus sem ela” - <a href="https://twitter.com/DirOPSPAHO?ref_src=twsrc%5Etfw">@DirOPSPAHO</a> <a href="https://twitter.com/hashtag/COVID19?src=hash&amp;ref_src=twsrc%5Etfw">#COVID19</a></p>&mdash; OPAS/OMS Brasil (@OPASOMSBrasil) <a href="https://twitter.com/OPASOMSBrasil/status/1318943965316587521?ref_src=twsrc%5Etfw">October 21, 2020</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
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
            <p class="text-footer">Nós da VaccineMaps, criamos este site colaborativo para ajudar os usuários a encontrar os postos de vacinação desejados. O projeto surgiu com a intenção de contribuir para o aumento da taxa de cobertura vacinal.</p>
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
            <a href="#"><img src="image/logo2footer.png"></a>
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
                <a href="https://www.facebook.com/VaccineMaps-102086405054253" style="padding-right: 25px;"><img class="grow-redes" src="image/face.png"></a>
                <a href="https://www.instagram.com/vaccinemaps/?hl=pt-br" style="padding-right: 25px;"><img class="grow-redes"  src="image/instagram.png"></a>
                <a href="https://twitter.com/MapsVaccine?s=09" style="padding-right: 25px;"><img class="grow-redes"src="image/twitter.png"></a>
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
        <form method="post" action="../_TCC/server/login.php"> 
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
        <form method="post" action="./_TCC/server/cadastrar.php"> 
          <h1>Cadastro</h1> 
           
          <p> 
            <label for="nome_cad">Seu Nome</label>
            <input id="nome_cad" name="nome" required="required" type="text" placeholder="Ex. José da Silva" />
          </p>
           
          <p> 
            <label for="email_cad">Seu E-mail</label>
            <input id="email_cad" name="usuario" required="required" type="email" placeholder="Ex. contato@gmail.com"/> 
          </p>
           
          <p> 
            <label for="senha_cad">Sua Senha</label>
            <input id="senha_cad" name="senha" required="required" type="password" placeholder="Ex. 1234"/>
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