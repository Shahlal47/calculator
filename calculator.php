<?php session_start() ?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Calculator Design</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<br><br><br><br>
<section class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-success"><center><button type="button" class="btn btn-success btn-lg btn-block"><h2>Calculator</h2></button></center>

                <div class="panel-body">
                    <form method="post" action="function.php">


                        <center>
                            <!--<p>Alert Messages !!!</p>-->

                            <?php if(isset($_SESSION['msg']))
                            {?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Warring!!!</strong> <?php echo $_SESSION['msg']; ?>
                                </div>
                            <?php
                            }?>

                            <?php if(isset($_SESSION['msg1']))
                            {?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Warring!!!</strong> <?php echo $_SESSION['msg1']; ?>
                                </div>
                            <?php
                            }?>

                            <?php if(isset($_SESSION['msg2']))
                            {?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Warring!!!</strong> <?php echo $_SESSION['msg2']; ?>
                                </div>
                            <?php
                            }?>

                            <?php if(isset($_SESSION['msg3']))
                            {?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Warring!!!</strong> <?php echo $_SESSION['msg3']; ?>
                                </div>
                            <?php
                            }?>




                            <?php if(isset($_SESSION['sum']))
                            {?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Well Done!!</strong> Your Addition Operation Successfully Completed.
                                </div>
                            <?php echo "Your Result is: "?><input type="text" value="<?php echo $_SESSION['sum']; ?>"><br>
                            <?php
                            }?>


                            <?php if(isset($_SESSION['suberror']))
                            {?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Warring!!!</strong> <?php echo $_SESSION['suberror']; ?>
                                </div>
                            <?php
                            }?>

                            <?php if(isset($_SESSION['sub']))
                            {?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Well Done!!</strong> Your Subtraction Operation Successfully Completed.
                                </div>
                                <?php echo "Your Result is: "?><input type="text" value="<?php echo $_SESSION['sub']; ?>"><br>
                            <?php
                            }?>



                            <?php if(isset($_SESSION['diverror']))
                            {?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Warring!!!</strong> <?php echo $_SESSION['diverror']; ?>
                                </div>
                            <?php
                            }?>

                            <?php if(isset($_SESSION['div']))
                            {?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Well Done!!</strong> Your Division Operation Successfully Completed.
                                </div>
                                <?php echo "Your Result is: "?><input type="text" value="<?php echo $_SESSION['div']; ?>"><br>
                            <?php
                            }?>

                            <?php if(isset($_SESSION['multi']))
                            {?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <strong>Well Done!!</strong> Your Multiplication Operation Successfully Completed.
                                </div>
                                <?php echo "Your Result is: "?><input type="text" value="<?php echo $_SESSION['multi']; ?>"><br>
                            <?php
                            }?>

                        </center>



                        <center><label>Enter First Number: </label><input type="number" name="number1"></center>
                        <center><label>Enter Second Number: </label><input type="number" name="number2"></center>
                        <br>
                        <center>
                            <input type="radio" name="operation" value="add">Addition
                            <input type="radio" name="operation" value="sub">Subtraction
                            <input type="radio" name="operation" value="div">Division
                            <input type="radio" name="operation" value="multi">Multiplication
                        </center>
                        <br>
                        <center>
                            <input type="reset" value="Reset">
                            <input type="submit" name="submit" value="Calculate">
                        </center>
                        <hr>
                        <center><a href="calculator.php" class="btn btn-primary btn-lg active" role="button">Reload</a></center>
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