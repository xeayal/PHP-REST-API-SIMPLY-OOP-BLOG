<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['postTitle'] ?></title>
    <link href="<?= PATH ?>app/view/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row shadow-lg p-5">
            <div class="col-lg-12 mb-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= PATH ?>posts/">POSTLAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= PATH ?>admin">POST ƏLAVƏ ET</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12 justify-content-center ">
                <h1 class="pb-2"><?=$data['postTitle'] ?></h1>
                <img class="w-100 rounded" src="<?=PATH.$data['image'] ?>" alt="">
                <div class="p-3 mb-2 bg-dark text-light"><?=beautydate($data['postDate']) ?></div>
                <div class="text">
                    <?=$data['postText'] ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>