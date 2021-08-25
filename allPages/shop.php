<div class="card bg-dark text-white">
  <img class="card-img" src="otherFile/pictures/w2.webp"  height= "500px">
  <div class="card-img-overlay d-flex justify-content-center align-content-center flex-wrap">
    <h5 class=" card-title text-info font-weight-bold display-4">Your're Welcome To The Restaurants</h5>   
  </div>
</div>

<div class="container">
        <div class="text-center p-4">
            <h1 class= "display-3">The Country Of Restaurants Blog</h1>
            <p >We want to be in the pocket of every decision-maker in every restaurant and store on the globe, giving actionable insights to the right person, at the right time, and on the right device.</p>
        </div>
    <div class="card-columns p-4">
        <?php
            require_once('streamfile/function.php');
            $allRes = allRestaurants();
            foreach ($allRes as $res) :
        ?>
        <div class="card" >
            <img class="card-img-top" src="<?= $res['image'] ?>" alt="Card image">
            <div class="card-img-overlay">
                <h4 class="card-title text-uppercase text-white"><?= $res['res_Name'] ?></h4>
                <p class="card-text"></p>
                <a href="view_More.php?id=<?=$res['res_ID']; ?>" class="btn btn-outline-warning">View detail</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>