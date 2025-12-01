

 <style>
        /* Custom styles for better responsiveness */
        .section-p1 {
            padding: 40px 20px;
        }
        .section-m1 {
            margin: 40px 0;
        }
        
        /* Mobile menu styles */
        #navbar.active {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: white;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.06);
        }
        
        /* Product image consistency */
        .pro img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }
        
        /* Banner image consistency */
        .banner-box {
            min-height: 250px;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 8px;
        }
        
        /* Feature icons */
        .fe-box img {
            max-height: 60px;
            object-fit: contain;
        }
        
        /* Hero slider - FULL WIDTH */
        .slider-container {
            height: 70vh;
            min-height: 500px;
            width: 100%;
        }
        
        .slide {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .slide-content {
            text-align: center;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 40px;
            border-radius: 8px;
            max-width: 80%;
        }
        
        @media (max-width: 768px) {
            .slider-container {
                height: 60vh;
                min-height: 400px;
            }
            
            .pro img {
                height: 200px;
            }
            
            .slide-content {
                padding: 20px;
                max-width: 90%;
            }
        }
        
        @media (max-width: 480px) {
            .slider-container {
                height: 50vh;
                min-height: 300px;
            }
        }
    </style>