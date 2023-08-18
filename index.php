<?php

include 'config.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}

?>
<html>

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <script src="https://cdn.tailwindcss.com/"></script>

    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
    <!-- Navbar -->
    <div class="back-ground" id="fix">
        <div class="navbar">
            <div class="navbar-container">
                <h1><a href="index.php" class="Heading">EchoSwap.</a></h1>
                <h3><a href="index.php" class="Heading">EchoSwap.</a></h3>

                <div class="nav-click">
                    <nav class="nav-links">
                        <a href="#front-page" class="mr-6 links clicked">Home</a>
                        <a href="#features" class="mr-6 links clicked">Features</a>
                        <a href="#Categories" class="mr-6 links clicked">Categories</a>
                        <a href="#faq" class="mr-6 links clicked">Faq</a>
                        <a href="#about-us" class="mr-6 links clicked">About Us</a>
                        <a href="#Resources" class="mr-6 links clicked">Resources</a>
                        <a href="#cont-us" class="mr-6 links clicked">Contact us</a>
                    </nav>
                    <?php if ($user_id != '') { ?>
                        <div class="dropdown account">
                            <button class="btn btn btn-outline-darkbtn-secondary dropdown-toggle" type="button"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Account
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="profile.php">Profile</a>
                                <a href="update.php" class="dropdown-item">Update profile</a>
                                <a href="listings.php" class="dropdown-item">My Listings</a>
                                <a href="logout.php" class="dropdown-item" onclick="confirm('Confirm Logout')">Logout</a>
                            <?php } else { ?>
                                <div class="nav-buttons">
                                    <a href="login.php" type="button" class="button-nav btn btn-outline-dark">
                                        Sign in
                                    </a>
                                    <a href="register.php" type="button" class="button-nav btn btn-outline-dark">
                                        Sign up
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="mobile">
                    <div class="slide-menu">
                        <nav>
                            <a href="#front-page" class="links clicked">Home</a>
                            <a href="#features" class="links clicked">Features</a>
                            <a href="#Categories" class="links clicked">Categories</a>
                            <a href="#faq" class="links clicked">Faq</a>
                            <a href="#about-us" class="links clicked">About Us</a>
                            <a href="#Resources" class="links clicked">Resources</a>
                            <a href="#cont-us" class="links clicked">Contact us</a>
                            <?php if ($user_id != '') { ?>
                                <div class="dropdown account">
                                    <a class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Account
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="profile.php"  >Profile</a>
                                        <a href="update.php" class="dropdown-item" >Update profile</a>
                                        <a href="listings.php" class="dropdown-item" >My Listings</a>
                                        <a href="logout.php" class="dropdown-item"
                                            onclick="confirm('Confirm Logout')">Logout</a>
                                    <?php } else { ?>
                                        <div class="nav-buttons">
                                            <a href="login.php" type="button" class="button-nav btn btn-outline-dark" >
                                                Sign in
                                            </a>
                                            <a href="register.php" type="button" class="button-nav btn btn-outline-dark" >
                                                Sign up
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- <a href="login.php" class="links clicked">Sign in</a>
                            <a href="register.php" class="links clicked">Sign up</a> -->
                        </nav>
                    </div>
                    <div class="hamburger-menu">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- front page -->
    <div class="back-ground front-page section" id="front-page">
        <div class="front-main">
            <div class="front-wrap">
                <div class="front-sub">
                    <div class="front-section">
                        <h1 class="front-headline" data-content="website-headlines">
                            "Embrace sustainability, one swap at a time with EcoSwap:
                            Connecting eco-conscious individuals for a greener future."
                        </h1>
                        <p class="front-subhead" data-content="website-subheadlines">
                            Reduce, Reuse, EcoSwap: Transforming goods, preserving the
                            planet.
                        </p>
                        <div class="front-button">
                            <a href="shop_main.php" class="button-des">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="front-image">
                    <div class="front-image-container" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                        <img src="Images/Main image.jpg" class="front-image-edit" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- features -->
    <div class="back-ground">
        <div class="features-main section" id="features">
            <div class="features-headings">
                <div class="features-section">
                    <h2 class="features-headline" data-content="website-headlines">
                        Swap Your Stuff and Discover New Treasures - With EchoSwap
                    </h2>
                </div>
                <div class="features-section">
                    <p class="features-desc" data-content="product-descriptions">
                        Join EchoSwap and start swapping your stuff with ease! Our
                        user-friendly platform makes trading smarter, not harder. Say
                        goodbye to the hassle of traditional buying and selling - discover
                        treasures as you swap your items for something new. Whether you're
                        a seller looking for a quick sale or a buyer searching for unique
                        finds, we've got you covered. Don't settle for less - trade
                        confidently on EchoSwap today!
                    </p>
                </div>
            </div>
            <div class="features-cards">
                <div class="f-card" data-content="features">
                    <div class="f-content">
                        <svg class="f-svg" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon class="f-polygon" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                    <h6 class="features-subtitle" data-subcontent="feature-title">
                        User-friendly
                    </h6>
                    <p class="features-content" data-subcontent="feature-content">
                        EchoSwap is designed to be user-friendly, so you can easily find
                        what you're looking for and make trades with confidence.
                    </p>
                    <a href="/" class="features-learn-more">Learn more</a>
                </div>
                <div class="f-card" data-content="features">
                    <div class="f-content">
                        <svg class="f-svg" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                    <h6 class="features-subtitle" data-subcontent="feature-title">
                        User-friendly
                    </h6>
                    <p class="features-content" data-subcontent="feature-content">
                        EchoSwap is designed to be user-friendly, so you can easily find
                        the items you're looking for and trade them for something you
                        want.
                    </p>
                    <a href="/" class="features-learn-more">Learn more</a>
                </div>
                <div class="f-card" data-content="features">
                    <div class="f-content">
                        <svg class="f-svg" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                                stroke-linejoin-thickness="" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23">
                            </polygon>
                        </svg>
                    </div>
                    <h6 class="features-subtitle" data-subcontent="feature-title">
                        User-friendly interface
                    </h6>
                    <p class="features-content" data-subcontent="feature-content">
                        The EchoSwap platform is designed with the user in mind. With a
                        sleek and intuitive interface, it's easy to find what you're
                        looking for and make swaps with ease.
                    </p>
                    <a href="/" class="">Learn more</a>
                </div>
                <div class="f-card" data-content="features">
                    <div class="f-content">
                        <svg class="f-svg" stroke="currentColor" viewBox="0 0 52 52">
                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                        </svg>
                    </div>
                    <h6 class="features-subtitle" data-subcontent="feature-title">
                        User-friendly
                    </h6>
                    <p class="features-content" data-subcontent="feature-content">
                        With our easy-to-use platform, you can trade goods with anyone,
                        anywhere, without any hassle.
                    </p>
                    <a href="/" class="features-learn-more">Learn more</a>
                </div>
            </div>
        </div>
        <br /><br />
    </div>

    <!-- categories -->
    <div class="cat-main">
        <center>
            <h1 id="Categories" class="cat-header section" data-content="website-headlines">
                Categories
            </h1>
        </center>
        <table class="Table1">
            <tr>
                <td>
                    <div class="div1">
                        <img src="Images/taco.png" style="width: 20%" />
                        <p>
                            A special category dedicated to products that promote sustainable living, such as reusable
                            containers, eco-friendly household items, organic and fair-trade products, and other
                            sustainable goods
                        </p>
                        <a class="btn btn-dark" href="shop_main.php?category=sustainableresources">Sustainable Living
                            Resources</a>
                        <br /><br />
                    </div>
                </td>
                <td>
                    <div class="div1">
                        <img src="Images/responsive.png" style="width: 30%" />
                        <p>
                            Energy-efficient electronics, eco-friendly gadgets,
                            solar-powered devices, rechargeable batteries, and other
                            sustainable technology products.
                        </p>
                        <a class="btn btn-dark" href="shop_main.php?category=electronics">Electronics</a>
                        <br /><br />
                        <div class="vl"></div>
                    </div>
                </td>
                <td>
                    <div class="div1">
                        <img src="Images/fashion.png" style="width: 20%" />
                        <p>
                            Sustainable and ethical fashion items, such as organic cotton clothing, recycled/upcycled
                            apparel, fair-trade accessories, eco-friendly shoes, and sustainable swimwear. </p>
                        <a class="btn btn-dark" href="shop_main.php?category=clothing">Clothing</a>
                        <br /><br />
                        <div class="vl"></div>
                    </div>
                </td>
                <td>
                    <div class="div1">
                        <img src="Images/furniture.png" style="width: 20%" />
                        <p>
                            Eco-friendly and sustainable home products, including
                            energy-efficient appliances, recycled/upcycled furniture,
                            organic bedding, non-toxic cleaning supplies, reusable
                            kitchenware, and sustainable home decor.
                        </p>
                        <a class="btn btn-dark" href="shop_main.php?category=furniture">Furniture</a>
                        <br /><br />
                        <div class="vl"></div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="div1">
                        <img src="Images/taco.png" style="width: 20%" />
                        <p>Eco-friendly and sustainable home products, including energy-efficient appliances,
                            recycled/upcycled furniture, organic bedding, non-toxic cleaning supplies, reusable
                            kitchenware, and sustainable home decor..</p>
                        <a class="btn btn-dark" href="shop_main.php?category=homeDecor">Home Decor</a>
                        <br /><br />
                    </div>
                </td>
                <td>
                    <div class="div1">
                        <img src="Images/responsive.png" style="width: 30%" />
                        <p style="width: 80%">
                            Natural and organic skincare products, cruelty-free cosmetics, sustainable packaging,
                            zero-waste bathroom essentials, bamboo toothbrushes, and refillable beauty products.
                        </p>
                        <a class="btn btn-dark" href="shop_main.php?category=beautyproducts">Beauty and Personal
                            care</a>
                        <br /><br />
                    </div>
                </td>
                <td>
                    <div class="div1">
                        <img src="Images/fashion.png" style="width: 20%" />
                        <p>Organic and eco-friendly clothing for children, sustainable toys made from recycled
                            materials, non-toxic baby care products, reusable diapers, and eco-friendly nursery items.
                        </p>
                        <a class="btn btn-dark" href="shop_main.php?category=babyproducts">Kids and Baby</a>
                        <br /><br />
                    </div>
                </td>
                <td>
                    <div class="div1">
                        <img src="Images/furniture.png" style="width: 20%" />
                        <p>Eco-friendly outdoor gear, sustainable camping equipment, recycled backpacks, solar-powered
                            outdoor lighting, sustainable sports equipment, and eco-friendly travel accessories.</p>
                        <a class="btn btn-dark" href="shop_main.php?category=outdoor%20products">Outdoor and
                            Recreation</a>
                        <br /><br />
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">&nbsp;</td>
            </tr>
        </table>
    <table class="Table2">
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/taco.png" style="width: 20%" />
                    <p>
                        A special category dedicated to products that promote sustainable living, such as reusable
                        containers, eco-friendly household items, organic and fair-trade products, and other
                        sustainable goods
                    </p>
                    <a class="btn btn-dark" href="shop_main.php?category=sustainableresources">Sustainable Living
                        Resources</a>
                    <br /><br />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/responsive.png" style="width: 30%" />
                    <p>
                        Energy-efficient electronics, eco-friendly gadgets,
                        solar-powered devices, rechargeable batteries, and other
                        sustainable technology products.
                    </p>
                    <a class="btn btn-dark" href="shop_main.php?category=electronics">Electronics</a>
                    <br /><br />
                    <div class="vl"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/fashion.png" style="width: 20%" />
                    <p>
                        Sustainable and ethical fashion items, such as organic cotton clothing, recycled/upcycled
                        apparel, fair-trade accessories, eco-friendly shoes, and sustainable swimwear. </p>
                    <a class="btn btn-dark" href="shop_main.php?category=clothing">Clothing</a>
                    <br /><br />
                    <div class="vl"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/furniture.png" style="width: 20%" />
                    <p>
                        Eco-friendly and sustainable home products, including
                        energy-efficient appliances, recycled/upcycled furniture,
                        organic bedding, non-toxic cleaning supplies, reusable
                        kitchenware, and sustainable home decor.
                    </p>
                    <a class="btn btn-dark" href="shop_main.php?category=furniture">Furniture</a>
                    <br /><br />
                    <div class="vl"></div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/taco.png" style="width: 20%" />
                    <p>Eco-friendly and sustainable home products, including energy-efficient appliances,
                        recycled/upcycled furniture, organic bedding, non-toxic cleaning supplies, reusable
                        kitchenware, and sustainable home decor..</p>
                    <a class="btn btn-dark" href="shop_main.php?category=homeDecor">Home Decor</a>
                    <br /><br />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/responsive.png" style="width: 30%" />
                    <p style="width: 80%">
                        Natural and organic skincare products, cruelty-free cosmetics, sustainable packaging,
                        zero-waste bathroom essentials, bamboo toothbrushes, and refillable beauty products.
                    </p>
                    <a class="btn btn-dark" href="shop_main.php?category=beautyproducts">Beauty and Personal
                        care</a>
                    <br /><br />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/fashion.png" style="width: 20%" />
                    <p>Organic and eco-friendly clothing for children, sustainable toys made from recycled
                        materials, non-toxic baby care products, reusable diapers, and eco-friendly nursery items.
                    </p>
                    <a class="btn btn-dark" href="shop_main.php?category=babyproducts">Kids and Baby</a>
                    <br /><br />
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="Images/furniture.png" style="width: 20%" />
                    <p>Eco-friendly outdoor gear, sustainable camping equipment, recycled backpacks, solar-powered
                        outdoor lighting, sustainable sports equipment, and eco-friendly travel accessories.</p>
                    <a class="btn btn-dark" href="shop_main.php?category=outdoor%20products">Outdoor and
                        Recreation</a>
                    <br /><br />
                </div>
            </td>
        </tr>
    </table>
    </div>

    <!-- Frequently asked questions -->
    <div class="faq background section" id="faq">
        <div class="faq-main">
            <h2 class="faq-header">Frequently Asked Questions</h2>

            <ul id="accordion">
                <li>
                    <input type="checkbox" name="faq" id="faq-con-first" />
                    <label for="faq-con-first">
                        Looking to get rid of some items cluttering up your home? Have you
                        tried EchoSwap for a hassle-free swapping experience?
                        <span class="toggle-icon">+</span></label>
                    <div class="faq-con-tent">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                            aspernatur non nesciunt neque necessitatibus optio, dolorum,
                            voluptas rem praesentium corporis impedit adipisci repellendus
                            consectetur repudiandae eum ad, sit perferendis minus.
                        </p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="faq" id="faq-con-second" />
                    <label for="faq-con-second">
                        Want to find unique treasures while also decluttering your own
                        space? Why not join our online goods exchange platform today?<span
                            class="toggle-icon">+</span></label>
                    <div class="faq-con-tent">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                            aspernatur non nesciunt neque necessitatibus optio, dolorum,
                            voluptas rem praesentium corporis impedit adipisci repellendus
                            consectetur repudiandae eum ad, sit perferendis minus.
                        </p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="faq" id="faq-con-third" />
                    <label for="faq-con-third">Tired of dealing with complicated trade negotiations and shipping
                        logistics? Let us simplify the process for you at EchoSwap.
                        <span class="toggle-icon">+</span></label>
                    <div class="faq-con-tent">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                            aspernatur non nesciunt neque necessitatibus optio, dolorum,
                            voluptas rem praesentium corporis impedit adipisci repellendus
                            consectetur repudiandae eum ad, sit perferendis minus.
                        </p>
                    </div>
                </li>
                <li>
                    <input type="checkbox" name="faq" id="faq-con-fourth" />
                    <label for="faq-con-fourth">
                        Are you ready to start trading smarter, not harder? Sign up now on
                        our user-friendly goods exchange platform and discover a world of
                        new possibilities!<span class="toggle-icon">+</span></label>
                    <div class="faq-con-tent">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse
                            aspernatur non nesciunt neque necessitatibus optio, dolorum,
                            voluptas rem praesentium corporis impedit adipisci repellendus
                            consectetur repudiandae eum ad, sit perferendis minus.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- about us -->
    <div class="back-ground">
        <div class="about-us section" id="about-us">
            <div class="container">
                <div class="about-main">
                    <div class="about-section">
                        <div class="about-subsection">
                            <div class="about-us-fin">
                                <div class="about-img-left">
                                    <div class="relative">
                                        <img src="https://images.unsplash.com/photo-1499750310107-5fef28a66643" alt
                                            class="about-img" />
                                        <p class="about-img-p">
                                            Photo by
                                            <a href="https://unsplash.com/andrewtneel?utm_source=copymatic&utm_medium=referral"
                                                target="_blank" class="unsplash-link">Andrew Neel</a>
                                            on
                                            <a href="https://unsplash.com/?utm_source=copymatic&utm_medium=referral"
                                                target="_blank" class="unsplash-link">Unsplash</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="about-img-left">
                                    <div class="relative">
                                        <img src="https://images.unsplash.com/photo-1488751045188-3c55bbf9a3fa" alt
                                            class="about-img" />
                                        <p class="about-img-p">
                                            Photo by
                                            <a href="https://unsplash.com/andrewtneel?utm_source=copymatic&utm_medium=referral"
                                                target="_blank" class="unsplash-link">Andrew Neel</a>
                                            on
                                            <a href="https://unsplash.com/?utm_source=copymatic&utm_medium=referral"
                                                target="_blank" class="unsplash-link">Unsplash</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="about-img-right">
                                <div class="my-4 z-10">
                                    <div class="relative">
                                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f" alt
                                            class="about-img" />
                                        <p class="about-img-p">
                                            Photo by
                                            <a href="https://unsplash.com/brookecagle?utm_source=copymatic&utm_medium=referral"
                                                target="_blank" class="unsplash-link">Brooke Cagle</a>
                                            on
                                            <a href="https://unsplash.com/?utm_source=copymatic&utm_medium=referral"
                                                target="_blank" class="unsplash-link">Unsplash</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aboutus-content">
                        <div class="mt-10 lg:mt-0">
                            <span class="about-main-heading">About Us</span>
                            <h2 class="about-heading" data-content="website-headlines">
                                Get the Best Deals on Your Swaps with EchoSwap
                            </h2>
                            <p class="about-content" data-content="about-us">
                                EchoSwap is the ultimate online goods exchange platform. We
                                offer a user-friendly interface that makes it easy to trade
                                your stuff. With our platform, you can discover treasures and
                                swap your stuff with ease.<br /><br />We believe that everyone
                                deserves to have access to quality goods. That's why we offer
                                a variety of goods from different sellers. Whether you're
                                looking for clothes, furniture, or electronics, we have what
                                you need. EchoSwap is the perfect place to find what you're
                                looking for at a fraction of the cost.<br /><br />So what are
                                you waiting for? Join the EchoSwap community today and start
                                trading smarter, not harder!
                            </p>
                            <a href="#" class="about-link">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Resources -->
        <div class="res-main">
            <h1 class="res-heading section" id="Resources"><b>Resources</b></h1>
            <br />
            <div id="carouselExampleFade" class="carousel slide carousel-fade resource" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Images/1.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="Images/2.jpg" class="d-block w-100" alt="..." />
                    </div>
                    <div class="carousel-item">
                        <img src="Images/3.jpg" class="d-block w-100" alt="..." />
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <br />
        </div>
    </div>

    <!-- footer -->
    <div class="back-ground" id="Footer">
        <div class="footer-main section" id="cont-us">
            <div class="footer-grid">
                <div class="footer-set">
                    <div class="mb-10">
                        <a href="#_" class="footer-echo-link">
                            <span class="footer-echo">EchoSwap<span class="text-black">.</span></span>
                        </a>
                    </div>
                    <p class="footer-subheadline" data-content="website-subheadlines">
                        Trade your unused stuff for new ones with other people. We make
                        "swapping" easier than ever!
                    </p>
                </div>
                <div class="footer-subsections">
                    <h6 class="footer-subheadings">Products</h6>
                    <ul class="text-sm">
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 1</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 2</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 3</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 4</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 5</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-subsections">
                    <h6 class="footer-subheadings">Resources</h6>
                    <ul class="text-sm">
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 1</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 2</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 3</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 4</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Link 5</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-subsections">
                    <h6 class="footer-subheadings">Company</h6>
                    <ul class="text-sm">
                        <li class="mb-2">
                            <a class="footer-links" href="/">Home</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">About us</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Company values</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Pricing</a>
                        </li>
                        <li class="mb-2">
                            <a class="footer-links" href="/">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="subscribe-sec">
                    <h6 class="footer-subheadings">Contact Us</h6>
                    <p class="footer-subscribe">Send us any queries or suggestions</p>
                    <form method="POST" name="Suggestion">
                        <div class="footer-email">
                            <div class="w-full">
                                <label class="email-label" for="newsletter">Suggestions</label>
                                <div>
                                    <input type="text" name="Description" id="description"
                                        placeholder="Suggestion or Queries" />
                                </div>
                                <div class="email-container">
                                    <input type="Email" name="Email" placeholder="Email " id="Email" /><br />&nbsp;
                                    <button name="submit">
                                        <i class="fa fa-send-o" style="font-size: 20px; color: white"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer-media">
                <ul class="footer-media-list">
                    <li>
                        <a class="media-label" aria-label="Twitter" href="/"><svg class="media-svg" viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24 11.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H8c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z">
                                </path>
                            </svg></a>
                    </li>
                    <li class="ml-4">
                        <a class="media-label" aria-label="Github" href="/"><svg class="media-svg" viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 8.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V22c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z">
                                </path>
                            </svg></a>
                    </li>
                    <li class="ml-4">
                        <a class="media-label" aria-label="Facebook" href="/"><svg class="media-svg" viewBox="0 0 32 32"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.023 24L14 17h-3v-3h3v-2c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V14H21l-1 3h-2.72v7h-3.257z">
                                </path>
                            </svg></a>
                    </li>
                </ul>
                <div class="copyright">© 2023 EchoSwap. All rights reserved.</div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="scripts/suggestion.js"></script>
    <!-- <script src="scripts/nav_click.js"></script> -->
    <script src="scripts/faq.js"></script>
    <script>
        const hamburgerMenu = document.querySelector('.hamburger-menu');
        const slideMenu = document.querySelector('.slide-menu');

        hamburgerMenu.addEventListener('click', () => {
            slideMenu.style.right = '0';
        });

        slideMenu.addEventListener('click', () => {
            slideMenu.style.right = '-300px';
        });

    </script>
</body>

</html>