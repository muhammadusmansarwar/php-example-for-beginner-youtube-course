<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
    <!-- Bootstrap core CSS -->
    <link href="http://localhost/php-gui/themes/third_party_libs/bootstrap-5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Bootstrap core js -->
    <script src="http://localhost/php-gui/themes/third_party_libs/bootstrap-5.0.0-beta2/dist/js/bootstrap.min.js"></script>
    <!-- jquery -->
    <script src="http://localhost/php-gui/themes/third_party_libs/jquery-3.5.1.min.js"></script>
    <script src="main.js"></script>
</head>

<body>
    <div class="container">
        <h1>Simple Calculator In PHP 8.0</h1>
        <form action="index.php" method="get">
            <label for="">First Value</label>
            <input name="first" type="number" class="form-control m-3">
            <label for="">Math Operator</label>
            <select name="math" id="">
                <option value="plus">PLUS</option>
                <option value="minus">MINUS</option>
                <option value="multiply">MULTIPLY</option>
                <option value="divide">DIVIDE</option>


            </select>
            <label for="">Second Value</label>
            <input name="second" type="number" class="form-control m-3">
            <input name="btn" type="submit" class="form-control m-3" value="Get Result">
        </form>
        <?php

        if (isset($_GET['btn'])) {
            
            $first = $_GET['first'];
            $opr = $_GET['math'];
            $scnd = $_GET['second'];

            if ($opr == 'plus') {

                echo $first + $scnd;

            } else if ($opr == 'minus') {

                echo $first - $scnd;

            } else if ($opr == 'multiply') {

                echo $first * $scnd;

            } else if ($opr == 'divide') {

                echo $first / $scnd;
            }
        }








        ?>





    </div>

</body>

</html>