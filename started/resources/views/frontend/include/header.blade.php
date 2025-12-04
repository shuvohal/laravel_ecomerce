
 <!-- Header Section -->
    <section id="header" class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto flex items-center justify-between py-4 px-4 md:px-8">
            <a href="#" class="text-3xl font-bold text-gray-800">Shu</a>
            <div class="hidden md:block">
                <ul id="navbar" class="flex space-x-6">
                    <li><a class="active hover:text-blue-500" href="{{ url('/')}}">Home</a></li>
                   @foreach($categories as $category)
                    <li><a  href="#">{{ $category->name }}</a></li>
                     @endforeach
                    <li id="lg-bag"><a href="cart.html"><i class="fas fa-shopping-bag"></i></a></li>
                </ul>
            </div>
            <div id="mobile" class="md:hidden flex items-center space-x-4">
                <a href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                <i id="bar" class="fas fa-bars cursor-pointer"></i>
            </div>
            <div id="close" class="hidden md:hidden absolute top-4 right-4"><i class="fas fa-times"></i></div>
        </div>
    </section>