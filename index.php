<?php
include __DIR__.'./database.php';
// var_dump($dischi);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>php-ajax-dischi</title>
</head>
<body class="color">
    
    <div class="container pt-5 mt-5">
        <div class="row">
            <?php foreach($dischi as $disco){ ?>
            <div class="col-3">
            <div class="card bg debug my-3" style="width: 18rem;">
                <img src="<?php echo $disco['poster']?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $disco['title']?></h5>
                        <p class="card-text"><?php echo $disco['author']?></p>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
    </div>
    
</body>
</html>