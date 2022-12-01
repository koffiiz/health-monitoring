<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Health Tracker</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link rel="stylesheet" href="https://dl.dropbox.com/s/hkywjovmjeszfwf/app.css" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </div>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script>
        $(function() {
            $(".step-icon-eye").on('click', function() {
                $(this).find('i').toggleClass("fa-eye fa-eye-slash");
                var input = $('[name="password"] , [name="password_confirmation"]');
                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                } else {
                    input.attr("type", "password");
                }
            });
        })
    </script>
</body>

</html>