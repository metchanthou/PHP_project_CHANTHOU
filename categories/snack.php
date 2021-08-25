<div class="container">
<form action="" method="post">  
        <div class="input-group mt-4 ">
            <input type="text" class="form-control" placeholder="Search snack name..." name = "search">
            <div class="input-group-append">
                <button class="btn btn-dark" type="submit">search</button>
            </div>
        </div>
    </form>
    <div class="row">
        <?php
            require_once('streamfile/function.php');
            $listSnack = "";
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $listSnack = searchIGD($_POST);

            } else {
                $listSnack = allIGD();
                $date = date_default_timezone_set('Asia/Phnom_Penh');
                $name = date('F j, Y ');
            }
            foreach ($listSnack as $snack) :
        ?>
        <div class="col-sm-4">
            <div class="card mt-5">
                <img class="card-img-top" src="otherFile/snackes/<?= $snack['image']; ?>" alt="Card image cap">
            </div>
            <div class="card-body text-capitalize">
                <h5 class="card-title"><?= $snack['igd_Name']; ?></h5>
                <p class="card-text">$ <?= $snack['price']; ?>.00</p>
                <div class="icon d-flex d-flex justify-content-between">
                    <p><?= $name; ?></p>
                    <div class="action d-flex justify-content-end">
                        <a href="edit_igd.php?id=<?=$snack['igd_ID'] ?>" class="btn btn-info btn-sm mr-1">Edit</a>
                        <a href="remove_igd.php?id=<?=$snack['igd_ID'] ?>" class="btn btn-danger btn-sm">X</a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>