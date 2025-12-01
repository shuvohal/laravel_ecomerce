


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
   
    @include('frontend.include.style')
</head>
<body class="font-sans bg-gray-100">
    @include('frontend.include.header')

    @yield('content')

     

    @include('frontend.include.footer')

    @include('frontend.include.script')
</body>
</html>