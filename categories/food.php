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
            <input type="text" class="form-control" placeholder="Search food name..." name = "search">
            <div class="input-group-append">
              <button class="btn btn-dark" type="submit">search</button>
            </div>
        </div>
      </form>
    <div class="row d-flex justify-content-center">
        <?php
            require_once('streamfile/function.php');
            $listFood = "";
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $listFood =searchFood($_POST);

            } else {
              $listFood = allFood();
              $date = date_default_timezone_set('Asia/Phnom_Penh');
              $name = date('F j, Y ');
            }
            foreach ($listFood as $food) :
        ?>
        <div class="col-sm-12">
            <div class="card mt-5">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="card-image mr-4">
                            <img class="img-fluid" width="200" src="otherFile/food/<?= $food['image'];?>" alt="">
                        </div>
                        <div class="info">
                            <h1 class="display-4 text-capitalize"><?= $food['food_Name'];?></h1>
                            <h3 class="display-5">$ <?= $food['price'];?>.00</h3>
                        </div>
                    </div>
                    <div class="icon d-flex d-flex justify-content-between mt-2">
                        <p><?= $name;?></p>
                        <div class="action d-flex justify-content-end">
                            <a href="edit_food.php?id=<?=$food['food_ID']; ?>" class="btn btn-info btn-sm mr-1">Edit</a>
                            <a href="remove_food.php?id=<?=$food['food_ID']; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>