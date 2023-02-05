<?php session_start();
    
// session_destroy();



?>


        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.php"><img src="admin/assets/img/name.jpg" height="60px" width="80px" alt="logo"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.php">Home</a></li>
                            
                           
                            <!-- <li><a href="./category.php">Contact</a></li> -->
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="shoping-cart.php"><i class="fa fa-shopping-bag"></i><span><?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);} ?></span></a></li>
                        </ul>
                        <div class="header__top__right__auth">
                                        <?php
                                if(isset($_SESSION['name'])){
                                    
                                   // echo '<a href="/ogani-master/login.php"><i class="fa fa-user"></i>'.$_SESSION['name'].'</a>';
                                   echo '<nav class="header__menu">
                                            <ul>
                                            <li><a href="#">'.$_SESSION['name'].'</a>
                                            <ul class="header__menu__dropdown">
                                                <li><a href="./logout.php">Log out</a></li>
                                            </ul>
                                            
                                        </li>
                                        </ul>
                                        </nav>
                               
                               ';
                                } 
                                else{
                                    
                                    echo'<a href="login.php"><i class="fa fa-user"></i>Login</a>';

                                }

                                ?>
                            </div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="index.php" method="POST">
                                
                                <input type="text" placeholder="What do yo u need?" name="search">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    