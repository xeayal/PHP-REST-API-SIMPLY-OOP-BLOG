<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTLAR</title>
    <link href="<?= PATH ?>app/view/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .page, .page:hover {
        padding: 5px 10px;
        color: #000 !important;
        text-decoration: none;
    }

    .activePage, .activePage:hover {
        background-color: var(--green);
        color: #fff !important;
        border-radius: 20%;
    }
    .post, .post:hover{
        color: #000 !important;
        text-decoration: none !important;
    }
</style>
<body>
    <div class="container">
        <div class="row shadow-lg p-5">
            <div class="col-lg-12 mb-5">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=PATH ?>posts/">POSTLAR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=PATH ?>admin">POST ƏLAVƏ ET</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-12">
                <h3 class="text-center mb-5 mt-5">POSTLAR</h3>
            </div>
<?php foreach($data['posts'] as $post) { ?>
                <a class="post col-lg-4 d-inline-block mb-5" href="<?=PATH ?>post/<?=$post['url'] ?>">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= PATH.$post['image'] ?>"
                            class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title "><?= $post['postTitle'] ?></h5>
                            <p class="card-text "><?=beautydate($post['postDate']) ?></p>
                        </div>
                    </div>
                </a>
<?php } ?>
        
        </div>
        <ul class="pagination pagination-sm justify-content-center mb-5">
<?php
//post controllerinden gelen maxPage`e gore loop edirik 
$i = 0;
while( ++$i <= $data['maxPage']) { ?>
            <li class="page-item
                <?php
                //post controllerinden gelen activePage deyerine gore `active` classi elave edirik
                if($i == $data['activePage']){
                    echo 'active';
                } ?>" aria-current="page">
                <a class="page-link" href="../posts/<?=$i ?>"><?=$i ?></a>
            </li>
<?php } ?>
        </ul>
    </div>
</body>
</html>