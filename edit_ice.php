<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUSEI FOOD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>   
    <div class="container mx-auto p-3">
        <a href="http://localhost/mylove/index.php?category=ice_cream"><button class= "btn btn-info btn-sm mr-1 ml-30">&#8592;Back</button></a>
        <div class="card col-sm-8 mt-3">
            <?php
                require_once('streamfile/function.php');
                $ice_id = $_GET['id'];
                $iceById = ice_creambyID($ice_id);
                foreach ($iceById as $ice) :
            ?>

            <h5 class="card-header">Create new ice-cream</h5>
            <div class="card-body">
                <form action="update_ice.php" enctype= "multipart/form-data" method="post">
                    <input type="hidden" value="<?=$ice['ice_ID']?>" name="ice_ID">
                    <input type="hidden" value="<?=$ice['user_ID']?>" name="user_ID">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ice_name" placeholder="Name Ice-Cream" value="<?=$ice['ice_Name']?>">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="price_ice" placeholder="Price of Ice-Cream" value="<?=$ice['price']?>">
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name= "image" id="inputGroupFile04" value="otherFile/ice_cream/<?=$ice['image']?>">
                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <button class="btn btn-danger mr-2" type="submit" name="update">Save</button>
                    </div>
                </form>
                
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>