<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include 'app\views\includes\userHeader.php'; ?>
        <!-- <div id="slider" name="mx-4"></div> -->
      
        <div id="carouselExampleDark" class="carousel carousel-dark slide px-3 py-3" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="8000">
              <img style='width:100%; aspect-ratio:3/1.25;' src="../images/MtlDowntown.png" class="d-block " alt="../images/MtlDowntown.png">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p> -->
              </div>
            </div>

            <div class="carousel-item" data-bs-interval="7000">
              <img style='width:100%; aspect-ratio:3/1.25;' src="../images/Paris.png" class="d-block " alt="../images/Paris.png">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p> -->
              </div>
            </div>

            <div class="carousel-item" data-bs-interval="7000">
              <img style='width:100%; aspect-ratio:5/2;' src="../images/Rome.png" class="d-block w-100" alt="../images/Rome.png">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p> -->
              </div>
            </div>

            <div class="carousel-item" data-bs-interval="7000">
              <img style='width:100%; aspect-ratio:3/1.25;' src="../images/vietnam.png" class="d-block w-100" alt="../images/vietnam.png">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p> -->
              </div>
            </div>

            <div class="carousel-item">
              <img style='width:100%; aspect-ratio:3.5/1.5;' src="../images/morocco.png" class="d-block w-100" alt="../images/morocco.png">
              <div class="carousel-caption d-none d-md-block">
                <!-- <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p> -->
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        <?php include 'app\views\includes\userFooter.php'; ?>
  </body>
</html>
