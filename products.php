<?php 
  session_start();
  error_reporting(0);
  include "includes/dbconnection.php";
  
?>
<!doctype html>
<html lang="en">

<head>
    <title>Sandal</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style-index.css">
    <link rel="shortcut icon" type="image/png" href="image-page/logo2.PNG">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php 
    include "includes/top-header.php";
    include 'includes/header.php';
    ?>
    <hr>
    <div class="container">
        <div class="name-page">
            <h6><a href="index.php">Trang chủ</a><span> / Sandal</span></h6>
        </div>
        <br>
        <?php 
            if ($_GET['name'] == 'giay-cao-got'){
                $name = 'Giày cao gót';
            }
            else if ($_GET['name'] == 'giay-the-thao')
            {
                $name ="Giày thể thao";
            }
            else if ($_GET['name'] == 'giay-bup-be'){
                $name='Giày búp bê';
            }
            else{
                $name='Sandal';
            }
            $select1='SELECT p.*, c.categoryName FROM products AS p, categories AS c WHERE p.category_id= c.id AND c.categoryName LIKE "'.$name.'" ';
            $result1=mysqli_query($con, $select1);
        ?>
        <div class="row">
            <?php  while($row1=mysqli_fetch_array($result1)){?>
            <div class="col-sm-3">
                <br>
                <div class="col-item">
                    <div class="photo">
                        <img src="image-product/<?php echo htmlentities($row1['category_id']);?>/<?php echo htmlentities($row1['image']);?> "
                            class="img-responsive" style="width:100%; height:250px" alt="a" />
                    </div>
                    <div class="info">
                        <div class="row">
                            <div class="price col-md-12">
                                <h5>
                                    <?php echo htmlentities($row1['name']);?>
                                </h5>
                                <h5 class="price-text-color">
                                    <?php echo htmlentities($row1['price']);?> đ
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="separator clear-left">
                            <p class="btn-add">
                                <i class="fa fa-shopping-cart"></i><a href="#" class="hidden-sm">Thêm vào giỏ
                                    hàng</a>
                            </p>
                            <p class="btn-details">
                                <i class="fa fa-list"></i><a href="detail.php?quanly=detail&id=<?php echo $row1['id']?>"
                                    class="hidden-sm">Chi
                                    tiết</a>
                            </p>
                        </div>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    bs3-card
    <?php include 'includes/footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>