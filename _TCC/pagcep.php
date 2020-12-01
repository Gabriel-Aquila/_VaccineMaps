<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Mapa</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="estilo/index.css">
   <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <style>
    #map {
        height: 100%;
    }
    
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    /* Styling for Autocomplete search bar */
#pac-card {
  background-color: #fff;
  border-radius: 2px 0 0 2px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  box-sizing: border-box;
  font-family: Roboto;
  margin: 0px 0px 10px 10px;
  -moz-box-sizing: border-box;
  outline: none;
}

#pac-container {
  padding-top: 12px;
  padding-bottom: 12px;
  margin-right: 12px;
}

#pac-input {
  background-color: #fff;
  font-family: Roboto;
  font-size: 15px;
  font-weight: 300;
  margin-left: 12px;
  padding: 0 11px 0 13px;
  text-overflow: ellipsis;
  width: 400px;
}

#pac-input:focus {
  border-color: #4d90fe;
}

#title {
  color: #fff;
  background-color: #acbcc9;
  font-size: 18px;
  font-weight: 400;
  padding: 6px 12px;
}

.hidden {
  display: none;
}

/* Styling for an info pane that slides out from the left. 
 * Hidden by default. */
#panel {
  height: 100%;
  width: null;
  background-color: white;
  position: fixed;
  z-index: 1;
  overflow-x: hidden;
  transition: all .2s ease-out;
}

.open {
  width: 250px;
}

.place {
  font-family: 'open sans', arial, sans-serif;
  font-size: 1.2em;
  font-weight: 500;
  margin-block-end: 0px;
  padding-left: 18px;
  padding-right: 18px;
}

.distanceText {
  color: silver;
  font-family: 'open sans', arial, sans-serif;
  font-size: 1em;
  font-weight: 400;
  margin-block-start: 0.25em;
  padding-left: 18px;
  padding-right: 18px;
}
</style>
  
</head>
<body>
  <!-- Modal2 -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header" style="background: linear-gradient(0deg, rgba(144,228,245,96) 0%, rgba(219,242,247,97) 120%);">
                       
                        <h4 class="modal-title">Olá!</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col">
                        <p>Clique no posto que desejar e encontre as informações explorando a comunidade interativa.</p>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" style="padding: 0.1rem 1rem;" data-dismiss="modal">OK</button>
                    </div>    
                </div>
                </div>
            </div>
        </div>

	<nav class="navbar navbar-expand-lg navbar-light" style="padding: 1rem 2rem; background-color: #90E4F5;">
  <a class="navbar-brand" href="index.html"><img src="image/logo.png" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <!-- ICON -->
   <a style="cursor:pointer; margin-left: 96.2%" name=""><img src="image/usergray.png" data-toggle="modal" data-target="#modalExemplo" class="usericon" ></a>
 </div>
</nav>


<div id="map"></div>

<main>
  <div class="container">
    <h1>Explore os postos da sua vizinhança</h1>
    </div>

    

    <!-- Mapa -->
    <div class="container">
    

    </div>

  



</main>



    <!-- Site footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>Sobre a VaccineMaps</h6>
            <p class="text-footer">Nós da VaccineMaps, criamos este site colaborativo para ajudar os usuários a encontrar os postos de vacinação desejados. O projeto surgiu com a intenção de contribuir para o aumento da taxa de cobertura vacinal.</p>
          </div>
          <div class="col-xs-6 col-md-3">
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
        <form method="post" action=""> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu E-mail</label>
            <input id="nome_login" name="nome_login" required="required" type="email" placeholder="Ex. contato@gmail.com"/>
          </p>
           
          <p> 
            <label for="email_login">Sua Senha</label>
            <input id="email_login" name="email_login" required="required" type="password" placeholder="Ex. 1234" /> 
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
                  <label for="termos">Termos de privacidade e segurança</label>
                  <a href="termos.html" target="_blank">Li e concordo</a>
                  <input type="checkbox" required="required" name="termos" id="termos" value="" /> 
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
    </div>
  </div>
</div>

<script type="text/javascript">
    $('#myModal').modal('show')
</script>

<script src="app.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDzHUYzCDL3rIzrBX33QLvI2BDaFA1rcNs&libraries=places&callback=initMap">
</script>



  </body>
</html>