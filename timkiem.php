<!DOCTYPE html>
<html>

<head>
    <title>CÁ CHÉP BOOKSTORE</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap');

        .slider {
            margin: auto;
            margin-top: 15px;
            width: 950px;
            height: 500px;
            border-radius: 10px;
            overflow: hidden;
        }

        .slides {
            width: 500%;
            height: 500px;
            display: flex;
        }

        .slides input {
            display: none;
        }

        .slide {
            width: 20%;
            transition: 2s;
        }

        .slide img {
            width: 950px;
            height: 500px;
        }

        .navigation-manual {
            position: absolute;
            width: 950px;
            margin-top: -40px;
            display: flex;
            justify-content: center;
        }

        .manual-btn {
            border: 2px solid #40D3DC;
            padding: 5px;
            border-radius: 10px;
            cursor: pointer;
            transition: 1s;
        }

        .manual-btn:not(:last-child) {
            margin-right: 40px;
        }

        .manual-btn:hover {
            background: #40D3DC;
        }

        #radio1:checked~.first {
            margin-left: 0;
        }

        #radio2:checked~.first {
            margin-left: -20%;
        }

        #radio3:checked~.first {
            margin-left: -40%;
        }

        .navigation-auto {
            position: absolute;
            display: flex;
            width: 990px;
            justify-content: center;
            margin-top: 460px;
        }

        .navigation-auto div {
            border: 2px solid #40D3DC;
            padding: 5px;
            border-radius: 10px;
            transition: 1s;
        }

        .navigation-auto div:not(last-child) {
            margin-right: 40px;
        }

        #radio1:checked~.navigation-auto .auto-btn1 {
            background: #40D3DC;
        }

        #radio2:checked~.navigation-auto .auto-btn2 {
            background: #40D3DC;
        }

        #radio3:checked~.navigation-auto .auto-btn3 {
            background: #40D3DC;
        }

        /* Utility stylings */
        :root {
            --white-light: rgba(255, 255, 255, 0.5);
            --alice-blue: #f8f9fa;
            --carribean-green: #40c9a2;
            --gray: #ededed;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Quicksand', sans-serif;
        }

        .container {
            /* width: 88vw; */
            margin: 0 auto;
        }

        .lg-title,
        .md-title,
        .sm-title {
            font-family: 'Roboto', sans-serif;
            padding: 0.6rem 0;
            text-transform: capitalize;
        }

        .lg-title {
            font-size: 2.5rem;
            font-weight: 500;
            text-align: center;
            padding: 1.3rem 0;
            opacity: 0.9;
        }

        .md-title {
            font-size: 2rem;
            font-family: 'Roboto', sans-serif;
        }

        .sm-title {
            font-weight: 300;
            font-size: 1rem;
            text-transform: uppercase;
        }

        .text-light {
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.5;
            opacity: 0.5;
            margin: 0.4rem 0;
        }

        /* product section */

        .products {
            background: var(--alice-blue);
            padding: 3.2rem 0;

        }

        .products .text-light {
            text-align: center;
            width: 70%;
            margin: 0.9rem auto;
        }

        .product {
            margin: 0.5rem 0.5rem 0.5rem 0.5rem;
            position: relative;
            height: 100%;
        }

        .product-content {
            background: var(--gray);
            border-radius: 10px;
            padding: 3rem 0.5rem 2rem 0.5rem;
            cursor: pointer;
        }

        .ig {
            width: 100%;
            height: 100%;
            display: block;
        }

        .product-img {
            background: var(--white-light);
            box-shadow: 0 0 20px 10px var(--white-light);
            width: 200px;
            height: 290px;
            margin: 0 auto;
            border-radius: 50%;
            transition: background 0.5s ease;
        }

        .product-btns {
            display: flex;
            justify-content: center;
            margin-top: 1.4rem;
            opacity: 0;
            transition: opacity 0.6s ease;
        }

        .btn-cart,
        .btn-buy {
            background: transparent;
            border: 1px solid black;
            padding: 10px 0;
            width: 120px;
            font-family: inherit;
            text-transform: uppercase;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: all 0.6s ease;
        }

        .btn-cart {
            background: black;
            color: white;
        }

        .btn-cart:hover {
            background: var(--carribean-green);
        }

        .btn-buy {
            background: white;
            color: black;
        }

        .btn-buy:hover {
            background: var(--carribean-green);
            color: #fff;
        }

        .product-info {
            border-radius: 0 0 10px 10px;
            background: white;
            padding: auto;
            margin-top: -30px;
        }

        .product-info-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .rating span {
            color: var(--carribean-green);
        }

        .product-name {
            color: black;
            display: block;
            text-decoration: none;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: bold;
        }

        .product-price {
            padding-top: 0.6rem;
            padding-right: 0.6rem;
            display: inline-block;
        }

        .product-price:first-of-type {
            text-decoration: line-through;
            color: var(--carribean-green);
        }

        .product-img img {

            transition: transform 0.6s ease;
        }

        .product:hover .product-img img {
            transform: scale(1.1);
        }

        .product:hover .product-btns {
            opacity: 1;
        }

        .off-info .sm-title {
            background: var(--carribean-green);
            color: white;
            display: inline-block;
            padding: 0.5rem;
            position: absolute;
            top: 0;
            left: 0;
            writing-mode: vertical-lr;
            transform: rotate(180deg);
            z-index: 1;
            letter-spacing: 3px;
            cursor: pointer;
        }

        /* product collection */
        .product-collection {
            padding: 3.2rem 0;
        }

        .product-collection-wrapper {
            padding: 3.2rem 0;
        }

        .product-col-left {
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("img/KINHTE/kt7.jpg") center/cover no-repeat;
        }

        .product-col-r-top {
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3)), url("img/banner3.jpg") center/cover no-repeat;
        }

        .flex {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            height: 50vh;
            padding: 2rem 1.5rem 3.2rem;
            margin: 5px;
        }

        .product-col-r-bottom>div:first-child {
            background: #eaa001;
        }

        .product-col-r-bottom>div:last-child {
            background: #0090ff;
        }

        .product-col-content {
            text-align: center;
            color: white;
        }

        .product-collection .text-light {
            opacity: 1;
            font-size: 0.8;
            font-weight: 400;
            line-height: 1.7;
        }

        .btn-dark {
            background: black;
            color: white;
            outline: 0;
            border-radius: 25px;
            padding: 0.7rem 1rem;
            border: 0;
            margin-top: 1rem;
            cursor: pointer;
            transition: all 0.6s ease;
            font-size: 1rem;
            font-family: inherit;
        }

        .btn-dark:hover {
            background: var(--carribean-green);
        }

        @media screen and (min-width: 746px) {
            .product-items {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .product-col-r-bottom {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media screen and (min-width: 950px) {
            .product-items {
                grid-template-columns: repeat(3, 1fr);
            }

            .product-collection-wrapper {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .flex {
                height: 60vh
            }

            .product-col-left {

                height: 121.5vh;
            }
        }

        @media screen and (min-width: 1200px) {
            .product-items {
                grid-template-columns: repeat(4, 1fr);
            }

            .product-collection-wrapper {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                margin-right: 25px;
                margin-left: 25px;
            }

            .product {
                margin-right: 25px;
                margin-left: 25px;

            }

            .flex {
                height: 60vh
            }

            .product-col-left {

                height: 121.5vh;
            }
        }
    </style>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
    <?php
    require('sp\product/function.inc.php');
    ?>
</head>



<body>
    <?php
    $mysqli = new mysqli("localhost", "root", "", "db-sp");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    if (isset($_POST['Search'])) {
        $search = $_POST['Search'];
        // echo $search;
        $sql = "SELECT * FROM sp WHERE name LIKE '%$search%'";
        $KQ = $mysqli->query($sql);
        // var_dump($KQ);

        if ($KQ->num_rows > 0) {
            require("header.php");
            require("menu.php");
            // require("content.php");
    ?>
            <div class="products">
                <div class="container">
                    <h1 class="lg-title">Từ khóa: "<?php echo $search ?>"</h1>
                    <!-- <p class="text-light">Nền kinh tế trên toàn thế giới đang bị tác động
                        mạnh mẽ bởi cuộc cách mạng Công nghiệp 4.0 . Nhiều khái niệm, định luật,
                        lĩnh vực không còn phù hợp đã bị đào thải nhanh chóng để bắt kịp với sự vận
                        động liên tục của nhân loại.</p> -->

                    <div class="product-items">
                        <?php while ($item = $KQ->fetch_assoc()) { ?>
                            <!-- single product -->
                            <div class="product">
                                <div class="product-content">
                                    <div class="product-img">
                                        <a href="<?php printf('%s?ctsp&id=%s', 'index.php',  $item['id']); ?>"><img src="<?php echo $item['img'] ?? "./img/KINHTE/kt1.jpg"; ?>" alt="product image" class="ig"></a>
                                    </div>
                                    <div class="product-btns">
                                        <button type="button" class="btn-cart"> thêm vào giỏ
                                            <span><i class="fas fa-plus"></i></span>
                                        </button>
                                        <button type="button" class="btn-buy"> mua ngay
                                            <span><i class="fas fa-shopping-cart"></i></span>
                                        </button>
                                    </div>
                                </div>

                                <div class="product-info">
                                    <div class="product-info-top">
                                        <h2 class="sm-title">lifestyle</h2>
                                        <div class="rating">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                    </div>
                                    <a href="index.php?ctsp&vitri=t" class="product-name"><?php echo $item['name'] ?? "Unknown" ?></a>
                                    <p class="product-price">56.000 đ</p>
                                    <p class="product-price"><?php echo $item['price'] ?? 'O'  ?> đ</p>
                                </div>

                                <div class="off-info">
                                    <h2 class="sm-title">25% off</h2>
                                </div>
                            </div>
                            <!-- end of single product -->
                        <?php } ?>

                    </div>
                </div>
            </div>
        <?php
        } else {
            require("header.php");
            require("menu.php");
        ?>
            <h1 class="lg-title">Từ khóa: "<?php echo $search ?>"</h1>

            <p class="lg-title" style="font-size:2rem">Không tìm thấy sp</p>

            
    <?php
        }
    }
    require("footer.php");
    include("footer_bot.php");
    ?>
    <script src="js/bootstrap.min.js"></script>

    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            	var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            	};
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->
    <script src="js/minicart.min.js"></script>
    <script>
        // Mini Cart
        paypal.minicart.render({
            action: '#'
        });

        if (~window.location.search.indexOf('reset=true')) {
            paypal.minicart.reset();
        }
    </script>
    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
</body>

</html>