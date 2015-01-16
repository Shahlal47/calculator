<?php session_start() ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculator Design</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<section class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success"><center><h2>Calculator</h2></center>
                <div class="panel-body">
                    <form method="post" action="function.php">


                        <center>
                            <p>Alert Messages !!!</p>
                            <?php if(isset($_SESSION['sum']))
                            {?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Warning!</strong> Better check yourself, you're not looking too good.
                                </div>
                            <?php echo $_SESSION['sum'];
                            }?>
                        </center>



                        <center><label>Enter First Number: </label><input type="number" name="number1"></center>
                        <br>
                        <center><label>Enter Second Number: </label><input type="number" name="number2"></center>
                        <br>
                        <center>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="operation" value="add" checked>Addition&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="operation" value="sub">Subtraction&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="operation" value="div">Division&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="operation" value="multi">Multiplication
                                </label>
                            </div>
                        </center>
                        <br>
                        <center><input type="submit" name="submit" value="Calculate"></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>



<?php session_unset() ?>