<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>

    <div class="carrosel-container"> 
      <div class="carrosel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="Imagens/coffee-gd7508b501_1920 (1).jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="Imagens/coffee-gd7508b501_1920 (1).jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="Imagens/coffee-gd7508b501_1920 (1).jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Testando</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
</div>
<header>
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a
            href="/sobrenos"
            class="list-group-item list-group-item-action py-2 ripple"
            aria-current="true"
          >
            <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Sobre Nós</span>
          </a>
          <a href="#" class="list-group-item list-group-item-action py-2 ripple"
            ><i class="fas fa-globe fa-fw me-3"></i><span>Contatos</span></a
          >
        </div>
      </div>
    </nav>
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
       Container wrapper 
      <div class="container-fluid">
        Toggle button 
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
  
       Brand 
        <a class="navbar-brand" href="#">
          <img
            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
            height="25"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
         Search form 
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input
            autocomplete="off"
            type="search"
            class="form-control rounded"
            placeholder='Search (ctrl + "/" to focus)'
            style="min-width: 225px;"
          />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>
  
         Right links 
        <ul class="navbar-nav ms-auto d-flex flex-row">
          Notification dropdown 
          <li class="nav-item dropdown">
            <a
              class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
  
          Icon 
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          Icon 
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github"></i>
            </a>
          </li>
  
          Icon dropdown -
          <li class="nav-item dropdown">
            <a
              class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="united kingdom flag m-0"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#"
                  ><i class="united kingdom flag"></i>English
                  <i class="fa fa-check text-success ms-2"></i
                ></a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#"><i class="poland flag"></i>Polski</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="china flag"></i>中文</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="japan flag"></i>日本語</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="germany flag"></i>Deutsch</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="france flag"></i>Français</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="spain flag"></i>Español</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="russia flag"></i>Русский</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="portugal flag"></i>Português</a>
              </li>
            </ul>
          </li>
  
          Avatar 
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                class="rounded-circle"
                height="22"
                alt="Avatar"
                loading="lazy"
              />
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="#">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main style="margin-top: 58px;">
    <div class="container pt-4"></div>
  </main>
<div class="carousel-inner py-4">
   Single item -
  <div class="carousel-item active">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp"
              class="card-img-top"
              alt="Waterfall"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp"
              class="card-img-top"
              alt="Sunset Over the Sea"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp"
              class="card-img-top"
              alt="Sunset over the Sea"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   Single item 
  <div class="carousel-item">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/184.webp"
              class="card-img-top"
              alt="Fissure in Sandstone"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp"
              class="card-img-top"
              alt="Storm Clouds"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/186.webp"
              class="card-img-top"
              alt="Hot Air Balloons"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
   Single item 
  <div class="carousel-item">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/187.webp"
              class="card-img-top"
              alt="Peaks Against the Starry Sky"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/188.webp"
              class="card-img-top"
              alt="Bridge Over Water"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0 d-none d-lg-block">
          <div class="card">
            <img
              src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp"
              class="card-img-top"
              alt="Purbeck Heritage Coast"
            />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up the bulk
                of the card's content.
              </p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 Inner 
</div>
 Carousel wrapper 
 Carousel wrapper 
<div
  id="carouselVideoExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
   Indicators 
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselVideoExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>
   Inner 
  <div class="carousel-inner">
    Single item -
    <div class="carousel-item active">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>
          Nulla vitae elit libero, a pharetra augue mollis interdum.
        </p>
      </div>
    </div>
    Single item 
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source src="https://mdbcdn.b-cdn.net/img/video/forest.mp4" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
      </div>
    </div>
     Single item 
    <div class="carousel-item">
      <video class="img-fluid" autoplay loop muted>
        <source
          src="https://mdbcdn.b-cdn.net/img/video/Agua-natural.mp4"
          type="video/mp4"
        />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>
          Praesent commodo cursus magna, vel scelerisque nisl consectetur.
        </p>
      </div>
    </div>
  </div>
  Inner
  <Controls 
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselVideoExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
 Carousel wrapper 
-->
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>