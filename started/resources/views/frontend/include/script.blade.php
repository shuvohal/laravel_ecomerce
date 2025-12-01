

<script>
        // Mobile Menu Toggle
        const bar = document.getElementById('bar');
        const close = document.getElementById('close');
        const nav = document.getElementById('navbar');
        
        if (bar) {
            bar.addEventListener('click', () => {
                nav.classList.add('active');
            });
        }
        
        if (close) {
            close.addEventListener('click', () => {
                nav.classList.remove('active');
            });
        }

        // Image Slider
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.dot');
        const prev = document.querySelector('.prev');
        const next = document.querySelector('.next');
        const slidesContainer = document.querySelector('.slides');
        
        function showSlides(n) {
            if (n >= slides.length) slideIndex = 0;
            if (n < 0) slideIndex = slides.length - 1;
            
            // Move the slides container
            slidesContainer.style.transform = `translateX(-${slideIndex * 100}%)`;
            
            // Update dots
            dots.forEach((dot, index) => {
                if (index === slideIndex) {
                    dot.classList.remove('bg-gray-400');
                    dot.classList.add('bg-blue-600');
                } else {
                    dot.classList.remove('bg-blue-600');
                    dot.classList.add('bg-gray-400');
                }
            });
        }
        
        function nextSlide() {
            slideIndex++;
            showSlides(slideIndex);
        }
        
        function prevSlide() {
            slideIndex--;
            showSlides(slideIndex);
        }
        
        // Auto slide
        let slideInterval = setInterval(nextSlide, 5000);
        
        // Event listeners
        if (prev) prev.addEventListener('click', () => {
            prevSlide();
            resetInterval();
        });
        
        if (next) next.addEventListener('click', () => {
            nextSlide();
            resetInterval();
        });
        
        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                slideIndex = index;
                showSlides(slideIndex);
                resetInterval();
            });
        });
        
        // Reset interval when user interacts with slider
        function resetInterval() {
            clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 5000);
        }
        
        // Initialize slider
        showSlides(slideIndex);
    </script>