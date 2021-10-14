@extends('layouts.front')
  
@section('content')
    
<div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
                                    <li class=""><a href="shop8387.html?category=laptops">Laptops</a></li>
                                    <li class=""><a href="shop015b.html?category=desktops">Desktops</a></li>
                                    <li class=""><a href="shop2d05.html?category=mobile-phones">Mobile Phones</a></li>
                                    <li class=""><a href="shopdd66.html?category=tablets">Tablets</a></li>
                                    <li class=""><a href="shope10b.html?category=tvs">TVs</a></li>
                                    <li class=""><a href="shop8d34.html?category=digital-cameras">Digital Cameras</a></li>
                                    <li class=""><a href="shop9a8c.html?category=appliances">Appliances</a></li>
                            </ul>
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading">Featured</h1>
                <div>
                    <strong>Price: </strong>
                    <a href="shop6330.html?sort=low_high">Low to High</a> |
                    <a href="shop94e1.html?sort=high_low">High to Low</a>

                </div>
            </div>

            <div class="products text-center">
                                    <div class="product">
                        <a href="assets/shop/tablet-5.html"><img src="assets/storage/products/dummy/tablet-5.jpg" alt="product"></a>
                        <a href="assets/shop/tablet-5.html"><div class="product-name">Tablet 5</div></a>
                        <div class="product-price">$1099.64</div>
                    </div>
                                    <div class="product">
                        <a href="assets/shop/phone-2.html"><img src="assets/storage/products/dummy/phone-2.jpg" alt="product"></a>
                        <a href="assets/shop/phone-2.html"><div class="product-name">Phone 2</div></a>
                        <div class="product-price">$1095.85</div>
                    </div>
                                    <div class="product">
                        <a href="assets/shop/appliance-5.html"><img src="assets/storage/products/dummy/appliance-5.jpg" alt="product"></a>
                        <a href="assets/shop/appliance-5.html"><div class="product-name">Appliance 5</div></a>
                        <div class="product-price">$986.18</div>
                    </div>
                                    <div class="product">
                        <a href="assets/shop/phone-4.html"><img src="assets/storage/products/dummy/phone-4.jpg" alt="product"></a>
                        <a href="assets/shop/phone-4.html"><div class="product-name">Phone 4</div></a>
                        <div class="product-price">$962.82</div>
                    </div>
                            </div> <!-- end products -->

            <div class="spacer"></div>
            <nav>
        <ul class="pagination">
            
                            <li class="page-item">
                    <a class="page-link" href="shop99ab.html?sort=high_low&amp;page=1" rel="prev" aria-label="&laquo; Previous">&lsaquo;</a>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item"><a class="page-link" href="shop99ab.html?sort=high_low&amp;page=1">1</a></li>
                                                                                                <li class="page-item active" aria-current="page"><span class="page-link">2</span></li>
                                                                        
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="Next &raquo;">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
                    </ul>
    </nav>

        </div>
    </div>
@endsection
