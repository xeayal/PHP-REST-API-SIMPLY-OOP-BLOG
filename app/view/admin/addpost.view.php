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
                            <a class="nav-link" href="<?=PATH  ?>admin/posts">POSTLAR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?=PATH ?>admin/addpost">Yeni əlavə et</a>
                        </li>
                        <li class="nav-item float-right">
                            <a class="nav-link" href="<?=PATH ?>logout">Çıxış</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-10 mt-5">
                    <h3 class="text-center mb-5">YENİ POST ƏLAVƏ ET</h3>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="POST BAŞLIĞI..." required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="text" name="text" rows="5" placeholder="POST TEXTİ..." required></textarea>
                        </div>
                        <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" name="img" required>
                            <label class="custom-file-label" for="validatedCustomFile">Şəkil seçin...</label>
                        </div>
                        <button type="submit" name="addPost" class="btn btn-primary col-12">ƏLAVƏ ET</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
