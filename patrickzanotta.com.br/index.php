<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patrik</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/8454d027ac.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecarta.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="imagem/x-icon" href="fotos/foto1.jpg">
  </head>
  <body>
      <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand"><i class="fa-solid fa-guitar"></i>Patrick</a>
        <button id ="menubtn" class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-center" id="navbarNavAltMarkup">
          <div class="navbar-nav">

            <a class="nav-link" href="#hom"><i class="bi bi-house"></i>Home</a>
            <a class="nav-link" href="#bio"><i class="bi bi-person"></i>Biografia</a>
            <a class="nav-link" href="#tagenda"><i class="bi bi-journal-minus"></i>Agenda</a>
            <a class="nav-link" href='#cover'><i class="bi bi-music-note-beamed"></i>Covers</a>
            <a class="nav-link" href='#cont'><i class="bi bi-telephone"></i>Contatos</a>
          </div>
        </div>
      </div>
      </nav>
      <div class="fundo">
        <div class="degrade" id="hom">
          <h1>PATRICK ZANOTTA</h1>
        </div>
      </div>
      <div class="backgroundpaper">
          <h3 id="tagenda">#AGENDA</h3>
          <div class="agenda">
            <?php
              require 'includes/conexao.php';
              require 'includes/agendaver.php';
            ?>
          </div>
      </div>
      <div class="opac">
      <div class="bio" id="bio">

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="fotos/car1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="fotos/car2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="fotos/car3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
          <div class="biotex">
            <h3>#BIOGRAFIA</h3>
            <p>Patrick Martins Zanotta, nasceu em 12 de setembro de 1995, Porto Alegre, Rio Grande do Sul, no Brasil. É um músico e compositor.
            Deu início a sua carreira musical em 2012, ganhando seu primeiro violão de seus pais.
            Logo após aprender alguns acordes, começou a fazer participações em eventos de amigos, do ramo musical e com isso, começou a surgir a paixão pela música.</p>
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Ver Mais
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Biografia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  Em seguida, começou a buscar conhecimentos musicais, como: (Aulas de canto e violão).
                  E então, após alguns anos de preparação, começou a fazer seus primeiros eventos solo.
                  Hoje, segue fazendo eventos, como: Casamentos, tributos, shows acústicos (voz e violão) e com banda.

                  Vocalista com o timbre de voz bari-tenor e violonista rítmico. Seu estilo musical é Rock.
                  Patrick foi influenciado por seus familiares desde cedo a ouvir, Creed, Reação em Cadeia, Audioslave, Seether, Nickelback, Pearl Jam, Alice In Chains, Linkin Park, Three Days Grace, Rosa de Saron, Legião Urbana, Capital Inicial, entre outras bandas. 

                  Vida Pessoal.
                  Patrick, também participou de concursos de beleza, representando sua cidade em concursos como: Mister RS, O mais belo Gaúcho e Mister Mesoamérica.
                  Foi modelo da agência: Charms e Mega Model.
                  E, também, gosta de praticar atividades físicas, como: futebol, musculação, lutas, natação, corridas e calistenia. 
                  Inclusive, no ano de 2011, Patrick foi atleta profissional de futsal.
                  E, hoje, além de trabalhar no ramo musical, é proprietário de um estúdio de Funcional (Habitus Fit).
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>

      <div class="musica" id="cover">
          <div class="desfo">
          <h3>#COVERS</h3>
            <div id="carouselExampleIndicators" class="carousel slide">
            
            <div class="carousel-inner">
              <div class="carousel-item active">
                <iframe width="473" height="841" src="https://www.youtube.com/embed/zFr7Wy6sa4s" title="Musica 1" controls="0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="carousel-item">
                <iframe width="473" height="841" src="https://www.youtube.com/embed/W8TCJFwbi-Y" title="Musica 2" controls="0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="carousel-item">
                <iframe width="473" height="841" src="https://www.youtube.com/embed/EOrnE3d4nZY" title="Música 3" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
              <div class="carousel-item">
                <iframe width="473" height="841" src="https://www.youtube.com/embed/6fIVDgtzStE" title="Música 4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          </div>
      </div>
          <div class="contatos" id="cont">
            <p>PATRICK ZANOTTA</p>
            <div class="junto">
              <p>Siga-me nas minhas redes sociais</p>
              <a href="https://api.whatsapp.com/send?phone=5555519414176&text=Ol%C3%A1%20vi%20seu%20site%20e%20achei%20seu%20trabalho%20legal!" target="_blank"><i class="bi bi-whatsapp"></i></a>
              <a href="https://instagram.com/patrickzanotta?igshid=YmMyMTA2M2Y=" target="_blank"><i class="bi bi-instagram"></i></a>
            </div>
          </div>
          <footer>
            <p><i class="bi bi-c-circle"></i> 2022 Bilhares Sinuca – Todos os direitos reservados – Criado por <a href="https://www.instagram.com/papaimktdigital/">@papaimktdigital </a></p>
          </footer>
          <script src="scriptfechar.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>