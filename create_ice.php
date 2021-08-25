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
    <div class="container d-flex justify-content-center p-5">
        <div class="card mt-5 col-sm-8 ">
            <h5 class="card-header">Create new ice-cream</h5>
            <div class="card-body">
                <form action="new_ice.php" enctype= "multipart/form-data" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="ice_name" placeholder="Name Ice-Cream">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="price_ice" placeholder="Price of Ice-Cream">
                    </div>
                    <div class="custom-file">
                            <input type="file" class="custom-file-input" name= "image" id="inputGroupFile04">
                            <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-info" type="submit" name="add">Add New</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>