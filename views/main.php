<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>CWeb</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-default bg-light">
    <a class="navbar-brand" href="<?php echo ROOT_URL; ?>">CWeb</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>addresses">Addresses <span class="sr-only">(current)</span></a>
            </li>

        </ul>


        <ul class="nav navbar-nav navbar-right">
                <?php if(isset($_SESSION['is_logged_in'])) : ?>
                    <li class="btn">Welcome <?php echo $_SESSION['user_data']['name']; ?></li>
                    <li class="btn border-dark"><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
                <?php else : ?>
                    <li class="btn btn-sm"><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
                    <li class="btn btn-sm"><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
                <?php endif; ?>
           </ul>
    </div>
</nav>


<main role="main" class="container">

<!--    --><?php //var_dump($_SESSION['user_data']) ?>

    <div class="">
        <?php require($view); ?>
    </div>


</main><!-- /.container -->

</body>
</html>