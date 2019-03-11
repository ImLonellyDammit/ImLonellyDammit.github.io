<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FFFFFF">
    <meta name="Description" content="Autor: Marco Ribeiro, Categoria: Exemplo, Template">
    <link rel="manifest" href="manifest.json">
    <link rel="icon" href="IMG/teamwork.png" sizes="256x256" />
    <link rel="stylesheet" href="CSS/Core/normalize.css"/>
    <link rel="stylesheet" href="CSS/Core/main.css"/>
    <link rel="stylesheet" href="CSS/BT/bootstrap.min.css">
    <script src="JS/Libraries/jquery-3.3.1.min.js"></script>
    <script src="JS/BT/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">Store</a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="navbar-item active"><a class="nav-link" href="#">Home</a></li>
                        <li class="navbar-item active"><a class="nav-link" href="#">Products</a></li>
                        <li class="navbar-item active"><a class="nav-link" href="#">Support</a></li>
                    </ul>
                    <ul class="navbar-nav navbar-right">
                        <li class="navbar-item active"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form>

            </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
            </div>
        </div>
  </div>
  


    <div id="demo" class="carousel slide">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="IMG/1.jpg" width="100%" height="600" alt="Sun">
            </div>
            <div class="carousel-item">
                <img src="IMG/2.jpg" width="100%" height="600" alt="Water">
            </div>
            <div class="carousel-item">
                <img src="IMG/3.jpg" width="100%" height="600" alt="Florest">
            </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Ola</h1>      
            <p>Este é o meu website</p>
        </div>
    </div>

    <script src="JS/Core/main.js"></script>
</body>
</html>