<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Minha App')</title>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Configuração opcional de tema -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#9333ea',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 text-gray-800">

    <div class="container mx-auto p-4">
        @yield('content')
    </div>

</body>
</html>
