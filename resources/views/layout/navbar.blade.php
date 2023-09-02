<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-2">
                <div class="header__logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('img/logo.svg') }}" alt="Logo"></a>
                </div>
            </div>
            <div class="col-xl-9 col-lg-10">
                <nav class="header__menu">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">Women’s</a></li>
                        <li><a href="#">Men’s</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="./product-details.html">Product Details</a></li>
                                <li><a href="./shop-cart.html">Shop Cart</a></li>
                                <li><a href="./checkout.html">Checkout</a></li>
                                <li><a href="./blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
