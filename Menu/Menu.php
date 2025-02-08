<?php
session_start();
$rname1 = $_POST['RName'];
require_once '../Config/Config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        input[type="number"] {
            -webkit-appearance: textfield;
            -moz-appearance: textfield;
            appearance: textfield;
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
        }

        .number-input {
            border: 2px solid #ddd;
            display: inline-flex;
        }

        .number-input,
        .number-input * {
            box-sizing: border-box;
        }

        .number-input button {
            outline: none;
            -webkit-appearance: none;
            appearance: none;
            background-color: transparent;
            border: none;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 35px;
            cursor: pointer;
            margin: 0;
            position: relative;
        }

        .number-input button:after {
            display: inline-block;
            position: absolute;
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: '\f077';
            transform: translate(-50%, -50%) rotate(180deg);
        }

        .number-input button.plus:after {
            transform: translate(-50%, -50%) rotate(0deg);
        }

        .number-input input[type=number] {
            font-family: sans-serif;
            max-width: 5rem;
            padding: .5rem;
            border: solid #ddd;
            border-width: 0 2px;
            font-size: 25px;
            height: 35px;
            text-align: center;
        }

        .number-input {
            width: 180px;

        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-10 mx-auto col-12 text-center mb-3">
                <h1 class="mt-0 text-primary">Our Menu</h1>
                <p class="lead"></p>
            </div>
            <div class="col-12 mt-4">
                <?php
                $rname = $_POST['RName'];
                $id = $_POST['Id'];
                $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%B01' ";
                $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                $product = mysqli_query($con, $query);
                $product1 = mysqli_query($con, $query1);
                if (!empty($product)) {
                    while ($row = mysqli_fetch_array($product)) {
                        while ($row1 = mysqli_fetch_array($product1)) {
                ?>
                            <h3 class="text-center">Beverages</h3>
                            <hr class="accent my-5">
            </div>
            <div class="card-columns">
                <div class="card card-body">
                    <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                    <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                    <p class="small"><?= $row1['Descrip_Food']; ?></p>
                    <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                    <br><br>
                    <div class="number-input">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                    <br>

                </div>

    <?php

                        }
                    }
                } else {
                    echo "no products available";
                }
    ?>
    <?php
    $rname = $_POST['RName'];
    $id = $_POST['Id'];
    $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%B02' ";
    $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
    $product = mysqli_query($con, $query);
    $product1 = mysqli_query($con, $query1);
    if (!empty($product)) {
        while ($row = mysqli_fetch_array($product)) {
            while ($row1 = mysqli_fetch_array($product1)) {
    ?>


                <div class="card card-body">
                    <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                    <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                    <p class="small"><?= $row1['Descrip_Food']; ?></p>
                    <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                    <br><br>
                    <div class="number-input">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                    <br>

                </div>
    <?php

            }
        }
    } else {
        echo "no products available";
    }
    ?>
    <?php
    $rname = $_POST['RName'];
    $id = $_POST['Id'];
    $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%B03' ";
    $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
    $product = mysqli_query($con, $query);
    $product1 = mysqli_query($con, $query1);
    if (!empty($product)) {
        while ($row = mysqli_fetch_array($product)) {
            while ($row1 = mysqli_fetch_array($product1)) {
    ?>


                <div class="card card-body">
                    <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                    <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                    <p class="small"><?= $row1['Descrip_Food']; ?></p>
                    <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                    <br><br>
                    <div class="number-input">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                    <br>

                </div>
    <?php

            }
        }
    } else {
        echo "no products available";
    }
    ?>
    <?php
    $rname = $_POST['RName'];
    $id = $_POST['Id'];
    $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%B04' ";
    $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
    $product = mysqli_query($con, $query);
    $product1 = mysqli_query($con, $query1);
    if (!empty($product)) {
        while ($row = mysqli_fetch_array($product)) {
            while ($row1 = mysqli_fetch_array($product1)) {
    ?>



                <div class="card card-body">
                    <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                    <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                    <p class="small"><?= $row1['Descrip_Food']; ?></p>
                    <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                    <br><br>
                    <div class="number-input">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                    <br>

                </div>
    <?php

            }
        }
    } else {
        echo "no products available";
    }
    ?>
    <?php
    $rname = $_POST['RName'];
    $id = $_POST['Id'];
    $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%B05' ";
    $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
    $product = mysqli_query($con, $query);
    $product1 = mysqli_query($con, $query1);
    if (!empty($product)) {
        while ($row = mysqli_fetch_array($product)) {
            while ($row1 = mysqli_fetch_array($product1)) {
    ?>

                <div class="card card-body">
                    <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                    <h6 class="shop-item-title"><?= $row['PName']; ?></h6>
                    <p class="small"><?= $row1['Descrip_Food']; ?></p>
                    <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                    <br><br>
                    <div class="number-input">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                    <br>

                </div>
    <?php

            }
        }
    } else {
        echo "no products available";
    }
    ?>
    <?php
    $rname = $_POST['RName'];
    $id = $_POST['Id'];
    $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%B06' ";
    $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
    $product = mysqli_query($con, $query);
    $product1 = mysqli_query($con, $query1);
    if (!empty($product)) {
        while ($row = mysqli_fetch_array($product)) {
            while ($row1 = mysqli_fetch_array($product1)) {
    ?>

                <div class="card card-body">
                    <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                    <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                    <p class="small"><?= $row1['Descrip_Food']; ?></p>
                    <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                    <br><br>
                    <div class="number-input">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                        <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                        <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                    </div>
                    <br>

                </div>
    <?php

            }
        }
    } else {
        echo "no products available";
    }
    ?>
            </div>


            <?php
            $rname = $_POST['RName'];
            $id = $_POST['Id'];
            $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%S01' ";
            $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
            $product = mysqli_query($con, $query);
            $product1 = mysqli_query($con, $query1);
            if (!empty($product)) {
                while ($row = mysqli_fetch_array($product)) {
                    while ($row1 = mysqli_fetch_array($product1)) {
            ?>
                        <div class="col-12 mt-4">

                            <h3 class="text-center">Starters</h3>
                            <hr class="accent my-5">
                        </div>
                        <div class="card-columns">
                            <div class="card card-body">
                                <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                                <p class="small"><?= $row1['Descrip_Food']; ?></p>
                                <span class="font-weight-bold small"></span>
                                <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                <br><br>
                                <div class="number-input">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                                <br>

                            </div>
                <?php

                    }
                }
            } else {
                echo "no products available";
            }
                ?>
                <?php
                $rname = $_POST['RName'];
                $id = $_POST['Id'];
                $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%S02' ";
                $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                $product = mysqli_query($con, $query);
                $product1 = mysqli_query($con, $query1);
                if (!empty($product)) {
                    while ($row = mysqli_fetch_array($product)) {
                        while ($row1 = mysqli_fetch_array($product1)) {
                ?>
                            <div class="card card-body">
                                <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                                <p class="small"><?= $row1['Descrip_Food']; ?></p>
                                <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                <br><br>
                                <div class="number-input">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                                <br>

                            </div>
                <?php

                        }
                    }
                } else {
                    echo "no products available";
                }
                ?>
                <?php
                $rname = $_POST['RName'];
                $id = $_POST['Id'];
                $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%S03' ";
                $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                $product = mysqli_query($con, $query);
                $product1 = mysqli_query($con, $query1);
                if (!empty($product)) {
                    while ($row = mysqli_fetch_array($product)) {
                        while ($row1 = mysqli_fetch_array($product1)) {
                ?>


                            <div class="card card-body">
                                <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                                <p class="small"><?= $row1['Descrip_Food']; ?></p>
                                <div class="font-weight-bold small"></div>
                                <div class="font-weight-bold small"></div>
                                <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                <br><br>
                                <div class="number-input">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                                <br>

                            </div>
                <?php

                        }
                    }
                } else {
                    echo "no products available";
                }
                ?>
                <?php
                $rname = $_POST['RName'];
                $id = $_POST['Id'];
                $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%S04' ";
                $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                $product = mysqli_query($con, $query);
                $product1 = mysqli_query($con, $query1);
                if (!empty($product)) {
                    while ($row = mysqli_fetch_array($product)) {
                        while ($row1 = mysqli_fetch_array($product1)) {
                ?>



                            <div class="card card-body">
                                <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                                <p class="small"><?= $row1['Descrip_Food']; ?></p>
                                <div class="font-weight-bold small"></div>
                                <div class="font-weight-bold small"></div>
                                <div class="font-weight-bold small"></div>
                                <div class="font-weight-bold small"></div>
                                <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                <br><br>
                                <div class="number-input">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                                <br>

                            </div>
                <?php

                        }
                    }
                } else {
                    echo "no products available";
                }
                ?>
                <?php
                $rname = $_POST['RName'];
                $id = $_POST['Id'];
                $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%S05' ";
                $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                $product = mysqli_query($con, $query);
                $product1 = mysqli_query($con, $query1);
                if (!empty($product)) {
                    while ($row = mysqli_fetch_array($product)) {
                        while ($row1 = mysqli_fetch_array($product1)) {
                ?>

                            <div class="card card-body">
                                <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                                <p class="small"><?= $row1['Descrip_Food']; ?></p>
                                <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                <br><br>
                                <div class="number-input">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                                <br>

                            </div>
                <?php

                        }
                    }
                } else {
                    echo "no products available";
                }
                ?>
                <?php
                $rname = $_POST['RName'];
                $id = $_POST['Id'];
                $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%S06' ";
                $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                $product = mysqli_query($con, $query);
                $product1 = mysqli_query($con, $query1);
                if (!empty($product)) {
                    while ($row = mysqli_fetch_array($product)) {
                        while ($row1 = mysqli_fetch_array($product1)) {
                ?>


                            <div class="card card-body">
                                <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                <h6 class="text-truncate shop-item-title"><?= $row['PName']; ?></h6>
                                <p class="small"><?= $row1['Descrip_Food']; ?></p>
                                <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                <br><br>
                                <div class="number-input">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                    <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                    <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                </div>
                                <br>

                            </div>
                <?php

                        }
                    }
                } else {
                    echo "no products available";
                }
                ?>
                        </div>

                        <?php
                        $rname = $_POST['RName'];
                        $id = $_POST['Id'];
                        $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%MP01' ";
                        $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                        $product = mysqli_query($con, $query);
                        $product1 = mysqli_query($con, $query1);
                        if (!empty($product)) {
                            while ($row = mysqli_fetch_array($product)) {
                                while ($row1 = mysqli_fetch_array($product1)) {
                        ?>

                                    <div class="col-12 mt-4">

                                        <h3 class="text-center">Main Plates</h3>
                                        <hr class="accent my-5">
                                    </div>
                                    <div class="card-columns">
                                        <div class="card card-body">
                                            <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                            <h6 class="text-underline shop-item-title"><?= $row['PName']; ?></h6>
                                            <p class="small"><?= $row1['Descrip_Food']; ?></p>
                                            <span class="font-weight-bold small"></span>
                                            <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                            <br><br>
                                            <div class="number-input">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                            <br>

                                        </div>
                            <?php

                                }
                            }
                        } else {
                            echo "no products available";
                        }
                            ?>
                            <?php
                            $rname = $_POST['RName'];
                            $id = $_POST['Id'];
                            $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%MP02' ";
                            $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                            $product = mysqli_query($con, $query);
                            $product1 = mysqli_query($con, $query1);
                            if (!empty($product)) {
                                while ($row = mysqli_fetch_array($product)) {
                                    while ($row1 = mysqli_fetch_array($product1)) {
                            ?>



                                        <div class="card card-body">
                                            <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                            <h6 class="shop-item-title"><?= $row['PName']; ?></h6>
                                            <p class="small"> <?= $row1['Descrip_Food']; ?></p>
                                            <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                            <br><br>
                                            <div class="number-input">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                            <br>

                                        </div>
                            <?php

                                    }
                                }
                            } else {
                                echo "no products available";
                            }
                            ?>
                            <?php
                            $rname = $_POST['RName'];
                            $id = $_POST['Id'];
                            $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%MP03' ";
                            $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                            $product = mysqli_query($con, $query);
                            $product1 = mysqli_query($con, $query1);
                            if (!empty($product)) {
                                while ($row = mysqli_fetch_array($product)) {
                                    while ($row1 = mysqli_fetch_array($product1)) {
                            ?>
                                        <div class="card card-body">
                                            <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                            <h6 class="shop-item-title"><?= $row['PName']; ?></h6>
                                            <p class="small"> <?= $row1['Descrip_Food']; ?></p>
                                            <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                            <br><br>
                                            <div class="number-input">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                            <br>

                                        </div>
                            <?php

                                    }
                                }
                            } else {
                                echo "no products available";
                            }
                            ?>
                            <?php
                            $rname = $_POST['RName'];
                            $id = $_POST['Id'];
                            $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%MP04' ";
                            $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                            $product = mysqli_query($con, $query);
                            $product1 = mysqli_query($con, $query1);
                            if (!empty($product)) {
                                while ($row = mysqli_fetch_array($product)) {
                                    while ($row1 = mysqli_fetch_array($product1)) {
                            ?>

                                        <div class="card card-body">
                                            <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                            <h6 class="shop-item-title"><?= $row['PName']; ?></h6>
                                            <p class="small"> <?= $row1['Descrip_Food']; ?></p>
                                            <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                            <br><br>
                                            <div class="number-input">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                            <br>

                                        </div>
                            <?php

                                    }
                                }
                            } else {
                                echo "no products available";
                            }
                            ?>
                            <?php
                            $rname = $_POST['RName'];
                            $id = $_POST['Id'];
                            $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%MP05' ";
                            $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                            $product = mysqli_query($con, $query);
                            $product1 = mysqli_query($con, $query1);
                            if (!empty($product)) {
                                while ($row = mysqli_fetch_array($product)) {
                                    while ($row1 = mysqli_fetch_array($product1)) {
                            ?>

                                        <div class="card card-body">
                                            <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                            <h6 class="shop-item-title"><?= $row['PName']; ?></h6>
                                            <p class="small"><?= $row1['Descrip_Food']; ?></p>
                                            <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                            <br><br>
                                            <div class="number-input">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                            <br>

                                        </div>
                            <?php

                                    }
                                }
                            } else {
                                echo "no products available";
                            }
                            ?>
                            <?php
                            $rname = $_POST['RName'];
                            $id = $_POST['Id'];
                            $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%MP06' ";
                            $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                            $product = mysqli_query($con, $query);
                            $product1 = mysqli_query($con, $query1);
                            if (!empty($product)) {
                                while ($row = mysqli_fetch_array($product)) {
                                    while ($row1 = mysqli_fetch_array($product1)) {
                            ?>

                                        <div class="card card-body">
                                            <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                            <h6 class="shop-item-title"><?= $row['PName']; ?></h6>
                                            <p class="small"> <?= $row1['Descrip_Food']; ?></p>
                                            <img src="../<?= $row['Image_Url']; ?>" width="254" height="160">
                                            <br><br>
                                            <div class="number-input">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                                <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                            </div>
                                            <br>

                                        </div>
                            <?php

                                    }
                                }
                            } else {
                                echo "no products available";
                            }
                            ?>
                                    </div>

                                    <?php
                                    $rname = $_POST['RName'];
                                    $id = $_POST['Id'];
                                    $query = "SELECT * FROM Food_Items where RName='$rname' and Code like '%SO01' ";
                                    $query1 = "SELECT * FROM Food_Desc where Id='$id' ";
                                    $product = mysqli_query($con, $query);
                                    $product1 = mysqli_query($con, $query1);
                                    if (!empty($product)) {
                                        while ($row = mysqli_fetch_array($product)) {
                                            while ($row1 = mysqli_fetch_array($product1)) {
                                    ?>

                                                <div class="col-12 mt-4">

                                                    <hr class="accent my-5">
                                                </div>
                                                <div class="col-6 mx-auto">
                                                    <div class="card card-body text-center">
                                                        <h5 class="text-uppercase">Sunday Only!</h5>
                                                        <h6 class="shop-item-title"><?= $row['PName']; ?></h6>
                                                        <p class="small"> <?= $row1['Descrip_Food']; ?></p>
                                                        <span class="float-right font-weight-bold shop-item-price">₹<?= number_format($row['Price'], 2); ?></span>
                                                        <img src="../<?= $row['Image_Url']; ?>" width="254" height="160" class="center">
                                                        <br><br>
                                                        <div class="number-input">
                                                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus"></button>
                                                            <input class="quantity cart-quantity-input" min="0" name="quantity" value="" type="number">
                                                            <button type="button" onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus"></button>
                                                        </div>
                                                        <br>

                                                    </div>
                                                </div>

                                    <?php

                                            }
                                        }
                                    } else {
                                        echo "no products available";
                                    }
                                    ?>

                                    <div class="col-12 mt-5 border border-right-0 border-left-0">
                                        <div class="row">
                                            <div class="col h5"></div>

                                            <div class="col h5 text-right"><a href="../Checkout/Checkout.php" class="btn btn-primary my-2">Checkout</a></div>

                                        </div>
                                    </div>
        </div>
    </div>

</body>

</html>