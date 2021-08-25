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
    <div class="container mt-3 p-3">
            <div class="d-flex justify-conten-end p-3">
                <button class= "btn btn-info" onclick="window.history.back();">&#8592;Back</button>
            </div>
                <div class="alert alert-secondary" role="alert">
                    <h4 class="alert-heading">Travel alert</h4>
                    <p>COVID-19 alert: Travel requirements are changing rapidly, including need for pre-travel COVID-19 testing and quarantine on arrival Check restrictions for your trip.</p>
                </div>
                <p>Some major parts of the city are divided up by grand boulevards including Monivong and Norodom boulevards going north to south and Pochentong and Sihanouk boulevards going east to west.</p>
                <?php
                    require_once('streamfile/function.php');
                    $allRes = allRestaurants();
                    $date = date_default_timezone_set('Asia/Phnom_Penh');
                    $name = date('F j, Y ');
                    
                    foreach ($allRes as $res) :
                        $description = readMore($res['description'], 200);
                ?>
                <div class=" col-sm-8t d-flex justify-content-center  mb-2">
                    
                    <div class="card-body">
                        <h1 class= "card-title"><?= $res['res_ID'] ?>|. <?= $res['res_Name'] ?> (<?= $res['country'] ?>)</h1>
                        <img src="<?= $res['image'] ?>" class="d-block w-100" width= "450px" height= "300px">
                        <p ><?= $res['description'] ?> </p>
                        <div class="d-flex justify-content-end">
                            <span class= "text-info"> <?= $name; ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
    </div>
</body>
</html>
 

