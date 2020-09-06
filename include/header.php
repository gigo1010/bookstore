
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div style="padding-left:10%;">
        <img style="height:50px;" src="images2/logo_book.png" alt="">
      </div>
        <div style="padding-left:20px;">
            <form action = "/bookstore/include/logout.php">
            <button type="submit">Logout</button>
          </form>
        </div>
        <a href="members.php" class="navbar-brand">
            <h3 class="px-5">
                <i class="fas fa-shopping-basket"></i> Shopping Cart
            </h3>
        </a>
        </div>
        <button class="navbar-toggler"
            type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div style="float: right;color: #e75b1e;padding-right: 0%; padding-left: 20%; position:sticky;" >
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>

        </div>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart.php" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
            </div>
        </div>


    </nav>
</header>
