<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>


  <nav class="navbar navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RearAnimals</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>



  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="pexels-pixabay-86596.jpg" alt="...">
      </div>
      <div class="carousel-item">
        <img src="pexels-tyler-lastovich-572688.jpg" d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="pexels-scott-webb-1093126.jpg" d-block w-100" alt="...">
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

  <!-- my-5 ta marjin/gap r jonno -->

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center"> about us</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class=" col-lg-6 col-md-6 col-12">
          <img src="./pexels-pixabay-247431.jpg" class="img-fluid aboutimg">
        </div>

        <div class="col-lg-6 col-md-6 col-12">
          <h2 display-4>i am sabyasachi sen & this is my 1st php website</h2>
          <p py-3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus dolore perspiciatis maxime sunt quidem ratione consectetur consequuntur laboriosam saepe, cumque adipisci vero ipsum? Libero consequatur dolorem, placeat vel dolorum mollitia.</p>
          <a href="about.php" class="btn btn-success">check more</a>

        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center"> my fav animals</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class=" col-lg-6 col-md-4 col-12">
          <div class="card">
            <img src="pexels-jijo-varghese-7867206.jpg" alt="...">
            <div class="card-body">
              <h5 class="card-title">black panther</h5>
              <p class="card-text">Panthera is actually the name of a genus based on skull features that is comprised of contemporary species like jaguars, leopards, and even lions and tigers and b– oh, no bears.</p>
            </div>
          </div>
        </div>
        <div class=" col-lg-6 col-md-4 col-12">
          <div class="card">
            <img src="pexels-pixabay-35548.jpg" ...">
            <div class="card-body">
              <h5 class="card-title">GOLDEN EAGLE</h5>
              <p class="card-text">The Golden Eagle is one of the largest, fastest, nimblest raptors in North America. Lustrous gold feathers gleam on the back of its head and neck; a powerful beak and talons advertise its hunting prowess.
                .</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center"> my fav animals gallery</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-scott-webb-1093126.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-meszárcsek-gergely-5492938.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-pixabay-247431.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-shubhankar-6530439.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-carlos-spitzer-17811.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-pixabay-62289.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-pixabay-45911.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-pixabay-86596.jpg" class="img-fluid pb-4">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="./pexels-pixabay-50577.jpg" class="img-fluid pb-4">
        </div>
      </div>
    </div>
  </section>



  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center"> my fav animals gallery</h3>
    </div>
    <div class="w-50 m-auto" <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>
      <div class="form-group">
        <label>comments</label>
        <textarea class="form-control" name="comments">
        </textarea>
      </div>
      <button type="submit"class="btn btn-dark">submit
      </button>
    </div>
    </form>

    <footer>
      <p class="p-3 bg-dark text-white text-center">@sabyasachi’s1stphpwebsite</p>
    </footer>



  </section>















  <h1></h1>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>