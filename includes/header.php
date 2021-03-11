<!-- navigation -->
<nav class="site-menu" id="top-nav">
    <div class="site-menu-wrapper container">
        <div class="logo">
            <a href="<?=$baseurl?>">SHOPFAST</a>
        </div>
        <ul class="site-menu-list" id="siteMenu">
            <div class="site-menu-top">
                <label for="" class="btn close-btn" id="siteMenuClose">
                    <i class="fas fa-times"></i>
                </label>
            </div>
            <li>
                <a href="<?=$baseurl?>index.php">Home</a>
            </li>
            <li>
                <a href="<?=$baseurl?>products.php">Products</a>
            </li>
            <li class="site-menu-has">
                <a href="http://" class="site-menu-toggle">Shop
                    <box-icon name='chevron-down'></box-icon>
                </a>
                <ul class="mega-menu">
                    <div class="mega-menu-content">
                        <div class="mega-menu-row">
                            <img src="<?=$baseurl?>assets/images/mega-menu.jpeg"/>
                        </div>
                        <div class="mega-menu-row">
                            <div class="mega-menu-header">Shop Layout</div>
                            <ul class="mega-menu-links">
                                <li><a href="http://">Shop With Background</a></li>
                                <li><a href="http://">Shop Mini Categories</a></li>
                                <li><a href="http://">Shop Only Categories</a></li>
                                <li><a href="http://">Shop Icon Categories</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-row">
                            <div class="mega-menu-header">Filter Layout</div>
                            <ul class="mega-menu-links">
                                <li><a href="http://">Sidebar</a></li>
                                <li><a href="http://">Filter Default</a></li>
                                <li><a href="http://">Filter Drawer</a></li>
                                <li><a href="http://">Filter Dropdown</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-row">
                            <div class="mega-menu-header">Product Layout</div>
                            <ul class="mega-menu-links">
                                <li><a href="<?=$baseurl?>product-details.php">Product Detail</a></li>
                                <li><a href="http://">Layout Sticky</a></li>
                                <li><a href="http://">Layout Sticky 2</a></li>
                                <li><a href="http://">Layout Scroll</a></li>
                            </ul>
                        </div>
                    </div>
                </ul>
            </li>
            <li>
                <a href="http://">Blog</a>
            </li>
            <li class="site-menu-has">
                <a href="http://" class="site-menu-toggle">
                    Vendors
                    <box-icon name='chevron-down'></box-icon>
                </a>
                <ul class="site-menu-dropdown">
                    <li><a href="http://">Vendor Store Listing</a></li>
                    <li><a href="http://">Store Details</a></li>
                </ul>
            </li>
            <li class="site-menu-has">
                <a href="http://" class="site-menu-toggle">Pages
                    <box-icon name='chevron-down'></box-icon>
                </a>
                <ul class="site-menu-dropdown">
                    <li><a href="http://">About</a></li>
                    <li><a href="http://">Contact</a></li>
                    <li><a href="http://">Faq</a></li>
                    <li><a href="http://">Page 404</a></li>
                </ul>
            </li>
            <li class="site-menu-icons">
                <a href="<?=$baseurl?>cart.php">
                    <box-icon name='shopping-bag'></box-icon>
                    <small class="count">0</small>
                </a>
                <a>
                    <box-icon name='search'></box-icon>
                </a>
            </li>
        </ul>
        <label class="site-menu-bars" id="siteMenuBars">
            <box-icon name='menu' ></box-icon>
        </label>
    </div>
</nav>