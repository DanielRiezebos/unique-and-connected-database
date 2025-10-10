<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Unique and Connected')</title>
        <!-- Load Tailwind CSS CDN for styling -->
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            /* Set default font to Inter */
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-50 flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-6 sm:p-8 bg-white shadow-xl rounded-xl border border-gray-100">
            @yield('content')
        </div>
    </body>
</html>
