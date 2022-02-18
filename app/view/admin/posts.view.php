<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTLAR</title>
    <link rel="stylesheet" href="<?=PATH ?>app/view/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 ">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="<?=PATH ?>admin/posts">POSTLAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?=PATH ?>admin/addpost">Yeni əlavə et</a>
                        </li>
                        <li class="nav-item float-right">
                            <a class="nav-link" href="<?=PATH ?>logout">Çıxış</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Şəkil</th>
                                <th scope="col">Başlıq</th>
                                <th scope="col">Tarix</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
$i = 1;
foreach ($data as $post) { ?> 
                            <tr>
                                <th scope="row"><?=$i ?></th>
                                <td><img width="100" src="<?=PATH.$post['image'] ?>" alt=""></td>
                                <td><?=$post['postTitle'] ?></td>
                                <td><?=beautydate($post['postDate']) ?></td>
                            </tr>
<?php $i +=1; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>