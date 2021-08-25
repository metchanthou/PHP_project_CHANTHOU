<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="otherFile/pictures/v2.jpg"  width= "100%" height= "500px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="otherFile/pictures/v1.jpg" width= "100%" height= "500px" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
    <form action="" method="post">
        <div class="input-group mt-4 ">
            <input type="text" class="form-control" placeholder="Search pizza name..." name = "search">
            <div class="input-group-append">
              <button class="btn btn-dark" type="submit">search</button>
            </div>
        </div>
    </form>
    <div class="row">
        <?php
            require_once('streamfile/function.php');
            $listPizza = "";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              $listPizza = searchPizza($_POST);

            } else {
              $listPizza = allPizza();
              $date = date_default_timezone_set('Asia/Phnom_Penh');
              $name = date('F j, Y ');

            }

            foreach ($listPizza as $pizza) :
        ?>
        <div class="col-sm-4">
            <div class="card mt-5">
                <img class="card-img-top" src="otherFile/pizza/<?= $pizza['image']; ?>" alt="Card image cap">
                <div class="card-body text-center text-capitalize">
                    <h5 class="card-title"><?= $pizza['pizza_Name']; ?></h5>
                    <p class="card-text">$ <?= $pizza['price']; ?>.00</p>
                </div>
                <div class="icon d-flex d-flex justify-content-between">
                   <p><?= $name ?></p>
                    <div class="action d-flex justify-content-end">
                        <a href="edit_pizza.php?id=<?=$pizza['pizza_ID'] ?>" class="btn btn-info btn-sm mr-1">Edit</a>
                        <a href="remove_pizza.php?id=<?=$pizza['pizza_ID'] ?>" class="btn btn-danger btn-sm">X</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>