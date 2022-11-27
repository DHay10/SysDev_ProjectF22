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
        <h1>Home Page</h1>
        <center>
        <div id="slider">
        </div>
        </center>
</body>
<style type="text/css">
  #slider{
    width: 100%;
    height: 330px;
    background-image: url("../images/MtlDowntown.png");
    background-size: 100%;
    background-repeat: no-repeat;
    animation-name: change;
    animation-duration: 10s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-delay: 2s;
  }
  @keyframes change{
    0%{
      background-image: url("../images/MtlDowntown.png");
    }
    25%{
      background-image: url("../images/Paris.png");
    }
    50%{
      background-image: url("../images/morocco.png");
    }
    75%{
background-image: url("../images/Rome.png");
    }
    100%{
background-image: url("../images/vietnam.png");
    }
  }
}
}
</style>
</html>
