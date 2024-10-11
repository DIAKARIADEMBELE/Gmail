<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gmail</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        body {
            background-image: url('images/background.jpg'); /* Remplacez par le chemin de votre image */
            background-size: cover; /* Ajuste la taille de l'image pour remplir tout l'écran */
        }

        .btn-container {
                position: absolute;
                top: 1rem;
                right: 1rem;
                display: flex;
                align-items: center;
                gap: 1rem; /* Espace entre les boutons */
            }

            .btn-container a {
                font-size: 1.25rem;
                text-decoration: none;
            }

            .btn-container a:hover {
                color: #000; /* Changer la couleur au survol si nécessaire */
            }
            .logo {
            position: absolute;
            top: 0rem;
            left: 0rem;
            width: 60px; /* Ajustez la taille selon vos besoins */
            height: auto;
            }
            .log {
            position: absolute;
            top: 27rem;
            left: 30rem;
            width: 120px; /* Ajustez la taille selon vos besoins */
            height: 50;
            }
        </style>
    </head>
      <body class="antialiased">

      <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
            <h1 style="font-size: 3rem; font-weight: bold;">MALI KALANSO</h1>

        </div>
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10 btn-container">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Accueil</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Se connecter</a>

                        <!--@if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        -->
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
