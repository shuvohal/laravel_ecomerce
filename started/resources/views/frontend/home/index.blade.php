
@extends('frontend.master')

@section('title')

Home - Shu's Ecommerce

@endsection

@section('content')
<!-- Hero Section - FULL WIDTH SLIDER -->
    <section id="hero" class="relative">
        <div class="slider-container relative w-full overflow-hidden">
            <div class="slides flex transition-transform duration-500 ease-in-out h-full">
                <!-- Slide 1 -->
                <div class="slide min-w-full" style="background-image: url('https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                    <div class="slide-content">
                        <h4 class="text-lg md:text-xl">Trade-in Offer</h4>
                        <h2 class="text-3xl md:text-4xl font-bold">Super Value Deals</h2>
                        <h1 class="text-4xl md:text-5xl font-extrabold">On All Products</h1>
                        <p class="mt-2 text-sm md:text-base">Save more with offers up to 70% off!</p>
                        <button class="mt-4 bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 transition-colors">Shop Now</button>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="slide min-w-full" style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                    <div class="slide-content">
                        <h4 class="text-lg md:text-xl">New Arrivals</h4>
                        <h2 class="text-3xl md:text-4xl font-bold">Latest Collections</h2>
                        <h1 class="text-4xl md:text-5xl font-extrabold">Trendy Designs</h1>
                        <p class="mt-2 text-sm md:text-base">Discover the newest styles today!</p>
                        <button class="mt-4 bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 transition-colors">Shop Now</button>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="slide min-w-full" style="background-image: url('https://images.unsplash.com/photo-1558769132-cb25c5d096b6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                    <div class="slide-content">
                        <h4 class="text-lg md:text-xl">Limited Time</h4>
                        <h2 class="text-3xl md:text-4xl font-bold">Winter Collection</h2>
                        <h1 class="text-4xl md:text-5xl font-extrabold">50% Off</h1>
                        <p class="mt-2 text-sm md:text-base">Get ready for winter with our exclusive collection!</p>
                        <button class="mt-4 bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 transition-colors">Shop Now</button>
                    </div>
                </div>
            </div>
            <!-- Navigation Buttons -->
            <button class="prev absolute top-1/2 left-2 md:left-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 md:p-3 rounded-full hover:bg-gray-600 transition-colors z-10">&#10094;</button>
            <button class="next absolute top-1/2 right-2 md:right-4 transform -translate-y-1/2 bg-gray-800 text-white p-2 md:p-3 rounded-full hover:bg-gray-600 transition-colors z-10">&#10095;</button>
            <!-- Dots Indicator -->
            <div class="dots absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
                <span class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
                <span class="dot w-3 h-3 bg-gray-400 rounded-full cursor-pointer"></span>
            </div>
        </div>
    </section>

    <!-- Features Section -->
   <section id="feature" class="section-p1 py-12 bg-white">
        <div class="container mx-auto grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <div class="fe-box text-center p-4 bg-gray-50 rounded shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/1170/1170678.png" alt="Free Shipping" class="mx-auto">
                <h6 class="mt-2 font-medium">Free Shipping</h6>
            </div>
            <div class="fe-box text-center p-4 bg-gray-50 rounded shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/709/709612.png" alt="Online Order" class="mx-auto">
                <h6 class="mt-2 font-medium">Online Order</h6>
            </div>
            <div class="fe-box text-center p-4 bg-gray-50 rounded shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135706.png" alt="Save Money" class="mx-auto">
                <h6 class="mt-2 font-medium">Save Money</h6>
            </div>
            <div class="fe-box text-center p-4 bg-gray-50 rounded shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/2721/2721612.png" alt="Promotions" class="mx-auto">
                <h6 class="mt-2 font-medium">Promotions</h6>
            </div>
            <div class="fe-box text-center p-4 bg-gray-50 rounded shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/2331/2331966.png" alt="Happy Sell" class="mx-auto">
                <h6 class="mt-2 font-medium">Happy Sell</h6>
            </div>
            <div class="fe-box text-center p-4 bg-gray-50 rounded shadow">
                <img src="https://cdn-icons-png.flaticon.com/512/3062/3062634.png" alt="24/7 Support" class="mx-auto">
                <h6 class="mt-2 font-medium">24/7 Support</h6>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section id="product1" class="section-p1 py-12 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">Featured Products</h2>
            <p class="mt-2 text-gray-600">Summer Collection New Modern Design</p>
            <div class="pro-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">
                <!-- Product 1 -->
                <div class="pro bg-gray-50 rounded shadow overflow-hidden transition-transform hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Product" class="w-full">
                    <div class="des p-4 text-center">
                        <span class="text-gray-500">Adidas</span>
                        <h5 class="font-semibold mt-1">Cartoon Astronaut T-shirts</h5>
                        <div class="star flex justify-center mt-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <h4 class="mt-2 font-bold">$78</h4>
                    </div>
                    <a href="#" class="block p-4 bg-blue-600 text-white hover:bg-blue-700 transition-colors"><i class="fas fa-shopping-cart cart mr-2"></i>Add to Cart</a>
                </div>
                
                <!-- Product 2 -->
                <div class="pro bg-gray-50 rounded shadow overflow-hidden transition-transform hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Product" class="w-full">
                    <div class="des p-4 text-center">
                        <span class="text-gray-500">Nike</span>
                        <h5 class="font-semibold mt-1">Sport Running Shoes</h5>
                        <div class="star flex justify-center mt-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <h4 class="mt-2 font-bold">$120</h4>
                    </div>
                    <a href="#" class="block p-4 bg-blue-600 text-white hover:bg-blue-700 transition-colors"><i class="fas fa-shopping-cart cart mr-2"></i>Add to Cart</a>
                </div>
                
                <!-- Product 3 -->
                <div class="pro bg-gray-50 rounded shadow overflow-hidden transition-transform hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1552374196-1ab2a1c593e8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Product" class="w-full">
                    <div class="des p-4 text-center">
                        <span class="text-gray-500">Levi's</span>
                        <h5 class="font-semibold mt-1">Classic Fit Jeans</h5>
                        <div class="star flex justify-center mt-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <h4 class="mt-2 font-bold">$65</h4>
                    </div>
                    <a href="#" class="block p-4 bg-blue-600 text-white hover:bg-blue-700 transition-colors"><i class="fas fa-shopping-cart cart mr-2"></i>Add to Cart</a>
                </div>
                
                <!-- Product 4 -->
                <div class="pro bg-gray-50 rounded shadow overflow-hidden transition-transform hover:scale-105">
                    <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" alt="Product" class="w-full">
                    <div class="des p-4 text-center">
                        <span class="text-gray-500">Zara</span>
                        <h5 class="font-semibold mt-1">Casual Summer Dress</h5>
                        <div class="star flex justify-center mt-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <h4 class="mt-2 font-bold">$45</h4>
                    </div>
                    <a href="#" class="block p-4 bg-blue-600 text-white hover:bg-blue-700 transition-colors"><i class="fas fa-shopping-cart cart mr-2"></i>Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Section -->
    <section id="banner" class="section-m1 py-12 bg-gray-800 text-center text-white">
        <div class="container mx-auto px-4">
            <h4 class="text-lg">Repair Service</h4>
            <h2 class="text-3xl font-bold">Up to <span class="text-red-400">70% Off</span> - All T-Shirts & Accessories</h2>
            <button class="mt-4 bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 transition-colors">Explore More</button>
        </div>
    </section>

    <!-- New Arrivals -->
    <section id="new-arrivals" class="section-p1 py-12 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold">New Arrivals</h2>
            <p class="mt-2 text-gray-600">Fresh styles just for you</p>
            <div class="pro-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6">

            @foreach($products as $product)


        
                <!-- Product 1 -->
                <div class="pro bg-gray-50 rounded shadow overflow-hidden transition-transform hover:scale-105">
                    <img src="{{asset('images/product/'.$product->image) }}" alt="Product" class="w-full">
                    <div class="des p-4 text-center">
                        <span class="text-gray-500">{{$product->color}}</span>
                        <h5 class="font-semibold mt-1">{{$product->name}}</h5>
                        <div class="star flex justify-center mt-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                            <i class="fas fa-star text-yellow-400"></i>
                        </div>
                        <h4 class="mt-2 font-bold">{{$product->price}}</h4>
                    </div>
                    <a href="#" class="block p-4 bg-blue-600 text-white hover:bg-blue-700 transition-colors"><i class="fas fa-shopping-cart cart mr-2"></i>Add to Cart</a>
                </div>
                @endforeach
                
                <!-- Product 2 -->
               
                
                <!-- Product 3 -->
               
                
                <!-- Product 4 -->
              
            </div>
        </div>
    </section>

    <!-- Small Banners -->
    <section id="sm-banner" class="section-p1 py-12 bg-white">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="banner-box bg-cover bg-center p-8 text-white" style="background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
                <h4 class="text-lg">Crazy Deals</h4>
                <h2 class="text-3xl font-bold">Buy 1 Get 1 Free</h2>
                <span>The best classic dress is on sale at Shu</span>
                <button class="mt-4 bg-white text-gray-800 py-2 px-6 rounded hover:bg-gray-200 transition-colors">Learn More</button>
            </div>
            <div class="banner-box bg-cover bg-center p-8 text-white" style="background-image: url('https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')">
                <h4 class="text-lg">Spring/Summer</h4>
                <h2 class="text-3xl font-bold">Upcoming Season</h2>
                <span>The best classic dress is on sale at Shu</span>
                <button class="mt-4 bg-white text-gray-800 py-2 px-6 rounded hover:bg-gray-200 transition-colors">Collection</button>
            </div>
        </div>
    </section>

    <!-- Banner 3 -->
    <section id="banner3" class="py-12 bg-white">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="banner-box bg-cover bg-center p-8 text-white" style="background-image: url('https://images.unsplash.com/photo-1558769132-cb25c5d096b6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                <h2 class="text-2xl font-bold">Seasonal Sale</h2>
                <h3>Winter Collection -50% Off</h3>
            </div>
            <div class="banner-box bg-cover bg-center p-8 text-white" style="background-image: url('https://images.unsplash.com/photo-1523381210434-271e8be1f52b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                <h2 class="text-2xl font-bold">T-Shirts</h2>
                <h3>T-Shirts 50% Off</h3>
            </div>
            <div class="banner-box bg-cover bg-center p-8 text-white" style="background-image: url('https://images.unsplash.com/photo-1556821840-3a63f95609a7?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80')">
                <h2 class="text-2xl font-bold">New Prints</h2>
                <h3>New Trendy Prints</h3>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section id="newsletter" class="section-p1 section-m1 py-12 bg-gray-800 text-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
            <div class="newstext text-center md:text-left mb-4 md:mb-0">
                <h4 class="text-xl font-bold">Sign Up for Newsletter</h4>
                <p class="mt-2">Get email updates about our <span class="text-blue-400">special discounts</span></p>
            </div>
            <div class="form flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 w-full sm:w-auto">
                <input type="text" placeholder="Your email address" class="p-2 rounded border text-gray-800 w-full sm:w-64">
                <button class="bg-blue-600 text-white py-2 px-6 rounded hover:bg-blue-700 transition-colors">Sign Up</button>
            </div>
        </div>
    </section>
    @endsection