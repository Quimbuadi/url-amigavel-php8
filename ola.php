
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- arquivo css-->
    <link rel="stylesheet" href="views/assets/css/style.css">

    <!--arquivo bootstrap-->
    <link rel="stylesheet" href="views/assets/bootstrap-5.3.2/css/bootstrap.min.css">

    <!--arquivo bootstrap-->
    <link rel="stylesheet" href="views/assets/bootstrap-5.3.2/js/bootstrap.min.js">

</head>
<body>
    <div class="form">
        <form method="post" action="controller/loginCotroller.php">
            <div class="email">
                <label for="email">email</label><br>
                <input type="email" name="email" class="input-camp" placeholder="email">
            </div>

            <div class="password">
                <label for="password">password</label><br>
                <input type="password" name="password" class="input-camp" id="" placeholder="password">
            </div>

            <div class="btn">
                <input type="submit" name="btn-enviar" value="enviar" class="input-camp" id="btn">
            </div>
            <div class="options">
                <a href="" class="link">não tenho uma conta</a><br>
                <a href="" class="link">esqueci minha senha</a>
            </div>

        </form>
    </div>
</body>
</html>


