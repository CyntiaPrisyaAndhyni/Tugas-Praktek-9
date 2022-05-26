<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 12%;
            padding-left: 37%;
            background-color:salmon;
        }
    </style>
</head>

<body>
    <div class="card col-md-5">
        <div class="card-header text-center">
          <b> L O G I N </b>
        </div>
        <div class="card-body">

            <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<center>Login gagal! username dan password salah!</center>";
                    echo "<br>";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
            ?>

            <form method="post" action="login.php">
                <div class="form-group">
                    <label for="exampleInputEmail1"><b>Username</b></label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" 
                    placeholder="Enter Username">
                </div> <br>

                <div class="form-group">
                    <label for="exampleInputPassword1"><b>Password</b></label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" 
                    placeholder="Enter Password">
                </div><br>

                <button type="submit" name="masuk" class="btn btn-danger">Masuk</button>
            </form>
        </div>
    </div>
</body>

</html> 