<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Manifest will be injected via script for non-localhost environments -->


    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Dishstack">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('user-uploads/logo/logo.png') }}">
    <title>Dishstack</title>

    <link rel="preload" as="style" href="{{ asset('build/assets/app-cATFq14i.css') }}" />
    <link rel="stylesheet" href="{{ asset('build/assets/app-cATFq14i.css') }}" data-navigate-track="reload" />
    <style>
        [wire\:loading][wire\:loading],
        [wire\:loading\.delay][wire\:loading\.delay],
        [wire\:loading\.inline-block][wire\:loading\.inline-block],
        [wire\:loading\.inline][wire\:loading\.inline],
        [wire\:loading\.block][wire\:loading\.block],
        [wire\:loading\.flex][wire\:loading\.flex],
        [wire\:loading\.table][wire\:loading\.table],
        [wire\:loading\.grid][wire\:loading\.grid],
        [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.none][wire\:loading\.delay\.none],
        [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short][wire\:loading\.delay\.short],
        [wire\:loading\.delay\.default][wire\:loading\.delay\.default],
        [wire\:loading\.delay\.long][wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline][wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        :root {
            --livewire-progress-bar-color: #000000;
        }

        [x-cloak] {
            display: none !important;
        }

        [wire\:cloak] {
            display: none !important;
        }
    </style>

    <style>
        :root {
            --color-base: 234, 88, 12;
            --livewire-progress-bar-color: #EA580C;
        }
    </style>

    <!-- Theme override: when HTML has .light class we override common dark background classes to inherit a white background -->


    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Montserrat", "Roboto", sans-serif;
        }

        .video-bg {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: -1;
            filter: brightness(0.5);
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 16px;
            width: 100%;
            max-width: 420px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            max-height: 90vh;
            overflow-y: auto;
            padding-right: 12px;
            position: relative;
            z-index: 1;
            animation: slideIn 0.6s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-container::-webkit-scrollbar {
            width: 6px;
        }

        .form-container::-webkit-scrollbar-track {
            background: transparent;
        }

        .form-container::-webkit-scrollbar-thumb {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            border-radius: 10px;
            opacity: 0.6;
        }

        .form-container::-webkit-scrollbar-thumb:hover {
            opacity: 1;
        }

        .form-container h1 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 10px;
            color: #222;
        }

        .form-container p {
            font-size: 1rem;
            margin-bottom: 25px;
            color: #555;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            font-family: "Roboto", sans-serif;
        }

        .form-container label {
            font-size: 0.9rem;
            color: #333;
            font-weight: 600;
            display: block;
            text-align: left;
            margin-bottom: 8px;
        }

        .form-container .radio-group {
            text-align: left;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fafafa;
        }

        .form-container .radio-option {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            cursor: pointer;
            font-weight: 500;
            color: #444;
        }

        .form-container .radio-option input[type="radio"] {
            appearance: none;
            -webkit-appearance: none;
            width: 18px;
            height: 18px;
            border: 2px solid #ff7e5f;
            border-radius: 50%;
            margin-right: 10px;
            position: relative;
            cursor: pointer;
            transition: 0.2s ease-in-out;
        }

        .form-container .radio-option input[type="radio"]:checked::before {
            content: "";
            position: absolute;
            top: 4px;
            left: 4px;
            width: 8px;
            height: 8px;
            background: #ff7e5f;
            border-radius: 50%;
        }

        #other-feature-input,
        #other-country-input {
            margin-top: 8px;
        }

        .form-container button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            cursor: pointer;
            transition: 0.3s ease;
        }

        .form-container button:hover {
            opacity: 0.9;
            transform: scale(1.02);
        }

        /* Custom SweetAlert styling for a branded look */
        .swal2-popup {
            font-family: 'Montserrat', sans-serif;
            border-radius: 12px;
        }

        .swal2-title {
            font-weight: 800;
            color: #222;
        }

        .swal2-content {
            font-family: 'Roboto', sans-serif;
            color: #555;
        }

        .swal2-progress-bar {
            background-color: #ff7e5f !important;
        }

        .swal2-confirm {
            background-color: #ff7e5f !important;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .swal2-confirm:hover {
            background-color: #feb47b !important;
        }
    </style>

</head>

<body class="font-sans antialiased bg-white dark:bg-gray-900">

    <div id="top" aria-hidden="true"></div>

    <script>
        // Load app assets (manifest + module script)
        (function() {
            const manifest = document.createElement('link');
            manifest.rel = 'manifest';
            manifest.href = "{{ asset('manifest.json') }}";
            manifest.crossOrigin = 'use-credentials';
            document.head.appendChild(manifest);

            const mod = document.createElement('script');
            mod.type = 'module';
            mod.src = "{{ asset('build/assets/app-Cc8I8P8i.js') }}";
            mod.dataset.navigateTrack = 'reload';
            document.head.appendChild(mod);
        })();
    </script>

    <div class="mx-auto max-w-lg lg:max-w-screen-xl min-h-svh shadow-md lg:shadow-none">
        <header class="lg:hidden">
            <nav class="bg-white border-gray-200 px-4 py-2.5 dark:bg-gray-900 dark:text-gray">
                <div class="flex flex-wrap justify-between items-center mx-auto">
                    <a href="/" class="flex items-center gap-1">
                        <img src="{{ asset('user-uploads/logo/logo.png') }}" class="ltr:mr-3 rtl:ml-3 h-6 sm:h-9"
                            alt="App Logo" />
                    </a>
                    <div class="flex items-center">
                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="hidden justify-between items-center w-full bg-gray-50 dark:bg-gray-700 mt-4 rounded-md"
                        id="mobile-menu-2">
                        <ul class="flex flex-col font-medium ">
                            <li>
                                <a href="#top"
                                    class="block py-2 pr-4 pl-3 text-gray-900 rounded dark:text-white">Home</a>
                            </li>

                            <li>
                                <a href="#icon-features"
                                    class="block py-2 pr-4 pl-3 text-gray-900 rounded dark:text-white">Features</a>
                            </li>

                            <li>
                                <a href="#simple-pricing"
                                    class="block py-2 pr-4 pl-3 text-gray-900 rounded dark:text-white">Pricing</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <header class="hidden lg:block z-50 sticky top-0 inset-x-0">
            <nav class="bg-white dark:bg-gray-900 px-4 lg:px-6 py-2.5">
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                    <a href="/" class="flex items-center gap-1">
                        <img src="{{ asset('user-uploads/logo/logo.png') }}" class="ltr:mr-3 rtl:ml-3 h-6 sm:h-9"
                            alt="App Logo" />
                    </a>
                    <div class="flex items-center lg:order-2">

                        <button id="theme-toggle" data-tooltip-target="tooltip-toggle" type="button"
                            class=" text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-4">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div id="tooltip-toggle" role="tooltip"
                            class="hidden absolute z-10 invisible px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                            Toggle dark mode
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>

                        <button data-collapse-toggle="mobile-menu-2" type="button"
                            class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            aria-controls="mobile-menu-2" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <!-- Renamed this desktop nav container to avoid duplicate id conflicts with the mobile menu -->
                    <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
                        id="nav-menu">
                        <ul
                            class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0 rtl:space-x-reverse">
                            <li>
                                <a href="#top" class="transition-all duration-300 block py-2 pr-4 pl-3 rounded lg:bg-transparent lg:p-0 text-gray-900 dark:text-white hover:text-skin-base"
                                    aria-current="page">Home</a>
                            </li>


                            <li>
                                <a href="#icon-features" class="transition-all duration-300 block py-2 pr-4 pl-3 rounded lg:bg-transparent lg:p-0 text-gray-900 dark:text-white hover:text-skin-base"
                                    aria-current="page">Features</a>
                            </li>

                            <li>
                                <a href="#simple-pricing" class="transition-all duration-300 block py-2 pr-4 pl-3 rounded lg:bg-transparent lg:p-0 text-gray-900 dark:text-white hover:text-skin-base"
                                    aria-current="page">Pricing</a>
                            </li>

                            <li>
                                <a href="#user-faqs" class="transition-all duration-300 block py-2 pr-4 pl-3 rounded lg:bg-transparent lg:p-0 text-gray-900 dark:text-white hover:text-skin-base"
                                    aria-current="page">FAQs</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <style>
            .nav-active {
                color: rgb(var(--color-base));
                font-weight: 700;
            }

            .dark .nav-active {
                color: rgb(var(--color-base));
            }

            .scroll-target {
                scroll-margin-top: 120px;
            }
        </style>

        <div class="flex overflow-hidden bg-white dark:bg-gray-900">
            <div id="main-content" class="w-full h-full overflow-y-auto bg-white dark:bg-gray-900">
                <main>


                    <section class="bg-white dark:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">

                            <h1
                                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                                Restaurant POS software made simple!</h1>
                            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                                Easily manage orders, menus, and tables in one place. Save time, reduce errors, and grow your business faster </p>
                            <div class="flex flex-col mb-8 lg:mb-16 space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
                                <a href="/restaurant-signup"
                                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-skin-base hover:bg-skin-base/[0.7] focus:ring-4 focus:ring-skin-base dark:focus:ring-skin-base">
                                    Start 30 Days Trial <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>

                            </div>

                            <div class="relative  max-w-screen-lg flex justify-center mx-auto">
                                <img src="{{ asset('landing/dashboard.png') }}" class="shadow-lg border rounded-lg" alt="">
                                <div class="hidden md:block absolute top-0 end-0 -translate-y-12 translate-x-20">
                                    <svg class="w-16 h-auto text-skin-base" width="121" height="135" viewBox="0 0 121 135" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                            stroke-width="10" stroke-linecap="round" />
                                        <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor"
                                            stroke-width="10" stroke-linecap="round" />
                                        <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor"
                                            stroke-width="10" stroke-linecap="round" />
                                    </svg>
                                </div>
                                <div class="hidden md:block absolute bottom-0 start-0 translate-y-10 -translate-x-32">
                                    <svg class="w-40 h-auto text-gray-500" width="347" height="188" viewBox="0 0 347 188" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M4 82.4591C54.7956 92.8751 30.9771 162.782 68.2065 181.385C112.642 203.59 127.943 78.57 122.161 25.5053C120.504 2.2376 93.4028 -8.11128 89.7468 25.5053C85.8633 61.2125 130.186 199.678 180.982 146.248L214.898 107.02C224.322 95.4118 242.9 79.2851 258.6 107.02C274.299 134.754 299.315 125.589 309.861 117.539L343 93.4426"
                                            stroke="currentColor" stroke-width="7" stroke-linecap="round" />
                                    </svg>
                                </div>
                            </div>

                        </div>
                    </section>

                    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto space-y-8">

                        <div class="mx-auto mb-8 lg:mb-14 text-center">
                            <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-white">
                                Take Control of Your Restaurant </h2>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
                            <div>
                                <img class="rounded-xl border border-gray-100 shadow" src="{{ asset('landing/order-management.png') }}"
                                    alt="order management">
                            </div>
                            <div class="mt-5 sm:mt-10 lg:mt-0">
                                <div class="space-y-6 sm:space-y-8">
                                    <div class="space-y-2 md:space-y-4">
                                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-white">
                                            Streamline Order Management </h2>
                                        <p class="text-gray-500 dark:text-neutral-500">
                                            Never lose track of an order again. All your customer orders—from dine-in to takeout—are organized and easily accessible in one place. Speed up service and keep your kitchen running smoothly. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">

                            <div class="mt-5 sm:mt-10 lg:mt-0">
                                <div class="space-y-6 sm:space-y-8">
                                    <div class="space-y-2 md:space-y-4">
                                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-white">
                                            Optimize Table Reservations </h2>
                                        <p class="text-gray-500 dark:text-neutral-500">
                                            Maximize seating efficiency with real-time table tracking and reservations. Reduce wait times and ensure no table sits empty during peak hours, improving customer experience and turnover. </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="rounded-xl border border-gray-100 shadow" src="{{ asset('landing/table-reservation.png') }}"
                                    alt="order management">
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
                            <div>
                                <img class="rounded-xl border border-gray-100 shadow" src="{{ asset('landing/menu-management.png') }}"
                                    alt="order management">
                            </div>
                            <div class="mt-5 sm:mt-10 lg:mt-0">
                                <div class="space-y-6 sm:space-y-8">
                                    <div class="space-y-2 md:space-y-4">
                                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-white">
                                            Effortless Menu Management </h2>
                                        <p class="text-gray-500 dark:text-neutral-500">
                                            Easily add, edit, or remove items from your menu on the go. Highlight specials, update prices, and keep everything in sync across all platforms, so your staff and customers always see the latest offerings. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">


                            <div class="mt-5 sm:mt-10 lg:mt-0">
                                <div class="space-y-6 sm:space-y-8">
                                    <div class="space-y-2 md:space-y-4">
                                        <h2 class="font-bold text-3xl lg:text-4xl text-gray-800 dark:text-white">
                                            Real-Time Inventory Control
                                        </h2>
                                        <p class="text-gray-500 dark:text-neutral-500">
                                            Track stock levels across all categories at a glance. Get instant low-stock alerts,
                                            monitor fast-moving items, and prevent shortages before they happen. Keep your
                                            kitchen running smoothly with clear, real-time insights—anywhere, anytime.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <img class="rounded-xl border border-gray-100 shadow"
                                    src="{{ asset('landing/inventory-dashboard.png') }}"
                                    alt="inventory management">
                            </div>
                        </div>

                    </div>

            </div>
        </div>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto scroll-target" id="icon-features">
            <div class="mx-auto mb-8 lg:mb-14 text-center">
                <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-white">
                    Powerful Features Built to Elevate Your Restaurant Operations
                </h2>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- QR Code Menu -->
                <div>
                    <div class="relative flex justify-center items-center size-16 bg-white rounded-2xl shadow-lg before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-gray-300 before:via-transparent before:to-gray-300 before:rounded-2xl dark:bg-neutral-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-qr-code-scan text-skin-base dark:text-skin-base" viewBox="0 0 16 16">
                            <path d="M0 .5A.5.5 0 0 1 .5 0h3a.5.5 0 0 1 0 1H1v2.5a.5.5 0 0 1-1 0zm12 0a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0V1h-2.5a.5.5 0 0 1-.5-.5M.5 12a.5.5 0 0 1 .5.5V15h2.5a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H15v-2.5a.5.5 0 0 1 .5-.5M4 4h1v1H4z" />
                            <path d="M7 2H2v5h5zM3 3h3v3H3zm2 8H4v1h1z" />
                            <path d="M7 9H2v5h5zm-4 1h3v3H3zm8-6h1v1h-1z" />
                            <path d="M9 2h5v5H9zm1 1v3h3V3zM8 8v2h1v1H8v1h2v-2h1v2h1v-1h2v-1h-3V8zm2 2H9V9h1zm4 2h-1v1h-2v1h3zm-4 2v-1H8v1z" />
                            <path d="M12 9h2V8h-2z" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">QR Code Menu</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Contactless Ordering Made Easy</p>
                    </div>
                </div>

                <!-- Payment Gateway Integration -->
                <div>
                    <div class="relative flex justify-center items-center size-16 bg-white rounded-2xl shadow-lg before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-gray-300 before:via-transparent before:to-gray-300 before:rounded-2xl dark:bg-neutral-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-skin-base dark:text-skin-base" viewBox="0 0 16 16">
                            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.226 5.385c-.584 0-.937.164-.937.593 0 .468.607.674 1.36.93 1.228.415 2.844.963 2.851 2.993C11.5 11.868 9.924 13 7.63 13a7.7 7.7 0 0 1-3.009-.626V9.758c.926.506 2.095.88 3.01.88.617 0 1.058-.165 1.058-.671 0-.518-.658-.755-1.453-1.041C6.026 8.49 4.5 7.94 4.5 6.11 4.5 4.165 5.988 3 8.226 3a7.3 7.3 0 0 1 2.734.505v2.583c-.838-.45-1.896-.703-2.734-.703" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Payment Gateway Integration</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Fast, Secure, and Flexible Payments using Stripe and Razorpay</p>
                    </div>
                </div>

                <!-- Staff Management -->
                <div>
                    <div class="relative flex justify-center items-center size-16 bg-white rounded-2xl shadow-lg before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-gray-300 before:via-transparent before:to-gray-300 before:rounded-2xl dark:bg-neutral-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-skin-base dark:text-skin-base" viewBox="0 0 16 16">
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Staff Management</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Separate login for every staff role with different permissions.</p>
                    </div>
                </div>

                <!-- POS (Point of Sale) -->
                <div>
                    <div class="relative flex justify-center items-center size-16 bg-white rounded-2xl shadow-lg before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-gray-300 before:via-transparent before:to-gray-300 before:rounded-2xl dark:bg-neutral-900">
                        <svg class="text-skin-base dark:text-skin-base" fill="currentColor" viewBox="0 -0.5 25 25" xmlns="http://www.w3.org/2000/svg" width="32" height="32">
                            <path fill-rule="evenodd" d="M16,6 L20,6 C21.1045695,6 22,6.8954305 22,8 L22,16 C22,17.1045695 21.1045695,18 20,18 L16,18 L16,19.9411765 C16,21.0658573 15.1177541,22 14,22 L4,22 C2.88224586,22 2,21.0658573 2,19.9411765 L2,4.05882353 C2,2.93414267 2.88224586,2 4,2 L14,2 C15.1177541,2 16,2.93414267 16,4.05882353 L16,6 Z M20,11 L16,11 L16,16 L20,16 L20,11 Z M14,19.9411765 L14,4.05882353 C14,4.01396021 13.9868154,4 14,4 L4,4 C4.01318464,4 4,4.01396021 4,4.05882353 L4,19.9411765 C4,19.9860398 4.01318464,20 4,20 L14,20 C13.9868154,20 14,19.9860398 14,19.9411765 Z M5,19 L5,17 L7,17 L7,19 L5,19 Z M8,19 L8,17 L10,17 L10,19 L8,19 Z M11,19 L11,17 L13,17 L13,19 L11,19 Z M5,16 L5,14 L7,14 L7,16 L5,16 Z M8,16 L8,14 L10,14 L10,16 L8,16 Z M11,16 L11,14 L13,14 L13,16 L11,16 Z M13,5 L13,13 L5,13 L5,5 L13,5 Z M7,7 L7,11 L11,11 L11,7 L7,7 Z M20,9 L20,8 L16,8 L16,9 L20,9 Z"></path>
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">POS (Point of Sale)</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Complete POS Integration</p>
                    </div>
                </div>

                <!-- Custom Floor Plans -->
                <div>
                    <div class="relative flex justify-center items-center size-16 bg-white rounded-2xl shadow-lg before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-gray-300 before:via-transparent before:to-gray-300 before:rounded-2xl dark:bg-neutral-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-skin-base dark:text-skin-base" viewBox="0 0 16 16">
                            <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0zM8 9.433 1.562 6 8 2.567 14.438 6z" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Custom Floor Plans</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Design Your Restaurant's Layout</p>
                    </div>
                </div>

                <!-- Kitchen Order Tickets (KOT) -->
                <div>
                    <div class="relative flex justify-center items-center size-16 bg-white rounded-2xl shadow-lg before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-gray-300 before:via-transparent before:to-gray-300 before:rounded-2xl dark:bg-neutral-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-skin-base dark:text-skin-base" viewBox="0 0 16 16">
                            <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5M11.5 4a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                            <path d="M2.354.646a.5.5 0 0 0-.801.13l-.5 1A.5.5 0 0 0 1 2v13H.5a.5.5 0 0 0 0 1h15a.5.5 0 0 0 0-1H15V2a.5.5 0 0 0-.053-.224l-.5-1a.5.5 0 0 0-.8-.13L13 1.293l-.646-.647a.5.5 0 0 0-.708 0L11 1.293l-.646-.647a.5.5 0 0 0-.708 0L9 1.293 8.354.646a.5.5 0 0 0-.708 0L7 1.293 6.354.646a.5.5 0 0 0-.708 0L5 1.293 4.354.646a.5.5 0 0 0-.708 0L3 1.293zm-.217 1.198.51.51a.5.5 0 0 0 .707 0L4 1.707l.646.647a.5.5 0 0 0 .708 0L6 1.707l.646.647a.5.5 0 0 0 .708 0L8 1.707l.646.647a.5.5 0 0 0 .708 0L10 1.707l.646.647a.5.5 0 0 0 .708 0L12 1.707l.646.647a.5.5 0 0 0 .708 0l.509-.51.137.274V15H2V2.118z" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Kitchen Order Tickets (KOT)</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Efficient Kitchen Workflow</p>
                    </div>
                </div>

                <!-- Bill Printing -->
                <div>
                    <div class="relative flex justify-center items-center size-16 bg-white rounded-2xl shadow-lg before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-gray-300 before:via-transparent before:to-gray-300 before:rounded-2xl dark:bg-neutral-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-skin-base dark:text-skin-base" viewBox="0 0 16 16">
                            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1" />
                            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Bill Printing</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Quick and Accurate Billing</p>
                    </div>
                </div>

                <!-- Reports -->
                <div>
                    <div class="relative flex justify-center items-center size-16 bg-white rounded-2xl shadow-lg before:absolute before:-inset-px before:-z-[1] before:bg-gradient-to-br before:from-gray-300 before:via-transparent before:to-gray-300 before:rounded-2xl dark:bg-neutral-900">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="text-skin-base dark:text-skin-base" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5" />
                        </svg>
                    </div>
                    <div class="mt-5">
                        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Reports</h3>
                        <p class="mt-1 text-gray-600 dark:text-neutral-400">Data-Driven Decisions</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto" id="customer-stories">
            <div class="mx-auto mb-8 lg:mb-14 text-center">
                <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-white">What Our Customers Say</h2>
                <p class="text-gray-500 dark:text-neutral-500">Real feedback from real restaurant owners and managers.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div
                    class="flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700">
                    <div class="flex-auto p-4 md:p-6">
                        <p class="text-base text-gray-800 md:text-xl dark:text-white"><em>
                                "Dishstack has completely transformed how we handle orders. The real-time tracking means fewer errors and happier customers."
                            </em></p>
                    </div>
                    <div class="p-4 rounded-b-xl md:px-6">
                        <h3 class="text-sm font-semibold text-gray-800 sm:text-base dark:text-white">
                            John Martin
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Owner of Riverbend Bistro
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700">
                    <div class="flex-auto p-4 md:p-6">
                        <p class="text-base text-gray-800 md:text-xl dark:text-white"><em>
                                " The QR Code menu and payment integration have made a huge difference for us, especially after the pandemic. Customers love the ease, and we’ve seen faster table turnover. "
                            </em></p>
                    </div>
                    <div class="p-4 rounded-b-xl md:px-6">
                        <h3 class="text-sm font-semibold text-gray-800 sm:text-base dark:text-white">
                            Emily Thompson
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Manager at Lakeside Grill
                        </p>
                    </div>
                </div>
                <div
                    class="flex flex-col bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700">
                    <div class="flex-auto p-4 md:p-6">
                        <p class="text-base text-gray-800 md:text-xl dark:text-white"><em>
                                " We're able to track every order in real time, keep our menu updated, and quickly manage payments. It's like having an extra set of hands in the restaurant. "
                            </em></p>
                    </div>
                    <div class="p-4 rounded-b-xl md:px-6">
                        <h3 class="text-sm font-semibold text-gray-800 sm:text-base dark:text-white">
                            Michael Scott
                        </h3>
                        <p class="text-sm text-gray-500 dark:text-neutral-500">
                            Owner of Downtown Eats
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto scroll-target" id="simple-pricing">
            <div class="mx-auto mb-4 lg:mb-8 text-center">
                <h2 class="text-3xl lg:text-4xl text-gray-800 font-bold dark:text-white">
                    Simple, Transparent Pricing </h2>
                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                    Get all the features you need to run your restaurant, without the hidden costs. </p>
            </div>
            <div class="relative max-w-6xl mx-auto">
                <style>
                    .billing-label-active {
                        color: rgb(var(--color-base));
                        font-weight: 600;
                    }

                    .pricing-hidden {
                        display: none !important;
                    }

                    .pricing-gap {
                        gap: 2rem;
                    }

                    .pricing-gap-package {
                        gap: 1rem;
                    }

                    .pricing-row li {
                        padding-top: 0.25rem;
                        padding-bottom: 0.25rem;
                    }

                    .pricing-row {
                        margin-left: 65px;
                    }

                    .pricing-row:first-of-type {
                        margin-top: 0;
                    }

                    .pricing-card {
                        border: 1px solid #e5e7eb;
                        transition: border-color 0.25s ease, box-shadow 0.25s ease;
                        background: #ffffff;
                    }

                    .dark .pricing-card {
                        border-color: #1f2937;
                        background: #0f172a;
                    }

                    .pricing-card-active {
                        border-color: rgb(var(--color-base));
                        box-shadow: 0 10px 30px rgba(234, 88, 12, 0.2);
                        background: #fffdf9;
                    }

                    .dark .pricing-card-active {
                        border-color: rgb(var(--color-base));
                        outline: 2px solid rgba(234, 88, 12, 0.8);
                        box-shadow: 0 0 0 3px rgba(234, 88, 12, 0.15), 0 15px 40px rgba(234, 88, 12, 0.3);
                        background: rgba(234, 88, 12, 0.08);
                    }
                </style>
                <div class="hidden lg:block overflow-x-auto">
                    <div class="flex justify-center items-center gap-3 mb-4">
                        <span id="billing-monthly-label" class="text-sm font-medium text-gray-800 dark:text-white billing-label-active">
                            Pay Monthly
                        </span>
                        <button type="button" id="billing-toggle"
                            class="relative inline-flex h-6 w-11 items-center rounded-full bg-skin-base/20">
                            <span
                                class="inline-block h-4 w-4 transform rounded-full bg-white transition translate-x-1"
                                id="billing-toggle-knob">
                            </span>
                        </button>
                        <span id="billing-annual-label" class="text-sm font-medium text-gray-800 dark:text-white">
                            Pay Annually
                        </span>
                    </div>
                    <div class="flex pricing-gap-package">
                        <div class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <div class="h-full"></div>
                        </div>
                        <div class="min-w-48">
                            <div
                                class="pricing-card h-full p-6 flex flex-col justify-between bg-white rounded-xl dark:bg-neutral-900 transition-all hover:shadow-lg">
                                <div class="flex flex-col gap-3">
                                    <span class="font-bold text-xl text-gray-800 dark:text-white">
                                        Subscription Package
                                    </span>
                                    <div class="gap-2">
                                        <p class="text-sm text-gray-500 dark:text-neutral-500 monthly-price">
                                            <span class="font-bold text-skin-base text-2xl">
                                                $10.00
                                            </span>
                                            <span class="text-sm font-medium">/ month</span>
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-neutral-500 annual-price pricing-hidden">
                                            <span class="font-bold text-skin-base text-2xl">
                                                $100.00
                                            </span>
                                            <span class="text-sm font-medium">/ year</span>
                                        </p>
                                    </div>
                                </div>

                                <a href="https://dishstack.davethan.tech/dashboard"
                                    class="text-white justify-center mt-4 bg-skin-base hover:bg-skin-base/[0.7] sm:w-auto dark:bg-skin-base dark:hover:bg-skin-base/[0.7] font-semibold rounded-lg text-sm px-5 py-2.5 text-center">Get Started</a>

                            </div>
                        </div>
                        <div class="min-w-48">
                            <div
                                class="pricing-card pricing-card-active h-full p-6 flex flex-col justify-between bg-white rounded-xl dark:bg-neutral-900 shadow-xl">
                                <div class="flex flex-col gap-3">
                                    <span class="font-bold text-xl text-gray-800 dark:text-white">
                                        Premium Package
                                    </span>
                                    <div class="gap-2">
                                        <p class="text-sm text-gray-500 dark:text-neutral-500 monthly-price">
                                            <span class="font-bold text-skin-base text-2xl">
                                                $25.00
                                            </span>
                                            <span class="text-sm font-medium">/ month</span>
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-neutral-500 annual-price pricing-hidden">
                                            <span class="font-bold text-skin-base text-2xl">
                                                $260.00
                                            </span>
                                            <span class="text-sm font-medium">/ year</span>
                                        </p>
                                    </div>
                                </div>

                                <a href="https://dishstack.davethan.tech/dashboard"
                                    class="text-white justify-center mt-4 bg-skin-base hover:bg-skin-base/[0.7] sm:w-auto dark:bg-skin-base dark:hover:bg-skin-base/[0.7] font-semibold rounded-lg text-sm px-5 py-2.5 text-center">Get Started</a>
                            </div>
                        </div>
                        <div class="min-w-48">
                            <div
                                class="pricing-card h-full p-6 flex flex-col justify-between bg-white rounded-xl dark:bg-neutral-900 transition-all hover:shadow-lg">
                                <div class="flex flex-col gap-3">
                                    <span class="font-bold text-xl text-gray-800 dark:text-white">
                                        Enterprise Package
                                    </span>
                                    <div class="gap-2">
                                        <p class="text-sm text-gray-500 dark:text-neutral-500 monthly-price">
                                            <span class="font-bold text-skin-base text-2xl">
                                                $45.00
                                            </span>
                                            <span class="text-sm font-medium">/ month</span>
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-neutral-500 annual-price pricing-hidden">
                                            <span class="font-bold text-skin-base text-2xl">
                                                $480.00
                                            </span>
                                            <span class="text-sm font-medium">/ year</span>
                                        </p>
                                    </div>
                                </div>
                                <a href="https://dishstack.davethan.tech/dashboard"
                                    class="text-white justify-center mt-4 bg-skin-base hover:bg-skin-base/[0.7] sm:w-auto dark:bg-skin-base dark:hover:bg-skin-base/[0.7] font-semibold rounded-lg text-sm px-5 py-2.5 text-center">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <ul class="flex pricing-gap relative mt-4 border-t border-gray-200 dark:border-neutral-800 pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Dashboard </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" x2="6" y1="6" y2="18" />
                                    <line x1="6" x2="18" y1="6" y2="18" />
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Menu </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Menu Item </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Item Category </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Area </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Reservation </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> KOT </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Order </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Customer </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Staff </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Settings </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Delivery Executive </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" x2="6" y1="6" y2="18" />
                                    <line x1="6" x2="18" y1="6" y2="18" />
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Waiter Request </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                    <ul class="flex pricing-gap relative pricing-row">
                        <li class="lg:pb-1.5 lg:py-3 min-w-48 sticky left-0 bg-white dark:bg-gray-900 z-10">
                            <span class="text-sm text-gray-800 dark:text-white"> Inventory </span>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-gray-400 dark:text-neutral-600"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" x2="6" y1="6" y2="18" />
                                    <line x1="6" x2="18" y1="6" y2="18" />
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                        <li
                            class="py-1.5 lg:py-3 px-4 lg:px-0 lg:text-center  min-w-48">
                            <div class="grid grid-cols-6 lg:block">
                                <svg class="shrink-0 lg:mx-auto size-5 text-skin-base"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="max-w-[85rem] px-4 py-14 sm:px-6 lg:px-8 lg:py-20 mx-auto scroll-target" id="user-faqs">
            <style>
                .faq-card {
                    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
                    border: 1px solid #e5e7eb;
                    border-radius: 18px;
                    padding: 16px 18px;
                    box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
                    transition: transform 0.15s ease, box-shadow 0.15s ease;
                }

                .faq-card:hover {
                    transform: translateY(-4px);
                    box-shadow: 0 16px 36px rgba(15, 23, 42, 0.12);
                }

                .faq-toggle {
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    gap: 12px;
                    width: 100%;
                }

                .faq-icon {
                    width: 36px;
                    height: 36px;
                    border-radius: 10px;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    background: linear-gradient(135deg, #fff5ed 0%, #ffe9d6 100%);
                    color: rgb(var(--color-base));
                }

                .faq-answer {
                    display: none;
                    color: #4b5563;
                    padding-top: 10px;
                }

                .faq-open .faq-answer {
                    display: block;
                }

                .faq-open .faq-chevron {
                    transform: rotate(180deg);
                }

                .faq-question {
                    color: #1f2937;
                }

                .faq-chevron {
                    color: #6b7280;
                }

                .dark .faq-card {
                    background: linear-gradient(135deg, #0f172a 0%, #111827 100%);
                    border-color: #1f2937;
                    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.55);
                }

                .dark .faq-question {
                    color: #f9fafb;
                }

                .dark .faq-answer {
                    color: #d1d5db;
                }

                .dark .faq-icon {
                    background: linear-gradient(135deg, rgba(234, 88, 12, 0.25) 0%, rgba(234, 88, 12, 0.35) 100%);
                    color: rgb(var(--color-base));
                }

                .dark .faq-chevron {
                    color: #e5e7eb;
                }

                .contact-block {
                    background: linear-gradient(135deg, #0f172a 0%, #111827 45%, #0f172a 100%);
                    color: #fff;
                    border-radius: 20px;
                    padding: 22px;
                    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.28);
                }

                .contact-pill {
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    padding: 10px 12px;
                    border-radius: 12px;
                    background: rgba(255, 255, 255, 0.08);
                    color: #e5e7eb;
                    border: 1px solid rgba(255, 255, 255, 0.12);
                }

                .contact-btn {
                    background: linear-gradient(135deg, #ff7e5f, #feb47b);
                    color: #fff;
                    font-weight: 700;
                    padding: 12px 16px;
                    border-radius: 12px;
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.22);
                }
            </style>
            <div class="max-w-3xl mx-auto text-center mb-10 lg:mb-14">
                <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">Your questions, answered</h2>
                <p class="mt-2 text-gray-600 dark:text-neutral-400">Answers to the most frequently asked questions.</p>
            </div>
            <div class="max-w-5xl mx-auto space-y-4">
                <div class="faq-card faq-open">
                    <button class="faq-toggle" type="button">
                        <div class="flex items-center gap-3 text-left">
                            <span class="faq-icon" aria-hidden="true">?</span>
                            <span class="text-lg font-semibold text-gray-800 dark:text-white">How can I contact customer support?</span>
                        </div>
                        <svg class="faq-chevron size-5 text-gray-500 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        Our dedicated support team is available via email to assist you with any questions or technical issues.
                    </div>
                </div>
                <div class="faq-card">
                    <button class="faq-toggle" type="button">
                        <div class="flex items-center gap-3 text-left">
                            <span class="faq-icon" aria-hidden="true">💳</span>
                            <span class="text-lg font-semibold text-gray-800 dark:text-white">What payment methods do you accept?</span>
                        </div>
                        <svg class="faq-chevron size-5 text-gray-500 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        We accept major credit cards (Visa, MasterCard, Amex) via Stripe and Razorpay for secure and flexible transactions.
                    </div>
                </div>
                <div class="faq-card">
                    <button class="faq-toggle" type="button">
                        <div class="flex items-center gap-3 text-left">
                            <span class="faq-icon" aria-hidden="true">⏳</span>
                            <span class="text-lg font-semibold text-gray-800 dark:text-white">Is there a free trial?</span>
                        </div>
                        <svg class="faq-chevron size-5 text-gray-500 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        Yes, we offer a 30-day free trial so you can explore every feature before committing to a paid plan.
                    </div>
                </div>
                <div class="faq-card">
                    <button class="faq-toggle" type="button">
                        <div class="flex items-center gap-3 text-left">
                            <span class="faq-icon" aria-hidden="true">🔄</span>
                            <span class="text-lg font-semibold text-gray-800 dark:text-white">Can I upgrade or downgrade my plan?</span>
                        </div>
                        <svg class="faq-chevron size-5 text-gray-500 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                        </svg>
                    </button>
                    <div class="faq-answer">
                        Absolutely. You can change plans anytime from your restaurant dashboard—no downtime, no hassles.
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <style>
                .contact-list {
                    gap: 18px;
                }

                .contact-item {
                    display: flex;
                    gap: 14px;
                    align-items: flex-start;
                }

                .contact-icon {
                    width: 38px;
                    height: 38px;
                    border-radius: 12px;
                    border: 1px solid #d1d5db;
                    color: #6b7280;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    background: linear-gradient(180deg, #fff 0%, #f7f8fb 100%);
                }

                .contact-title {
                    font-size: 1rem;
                    font-weight: 600;
                    color: #111827;
                }

                .contact-sub {
                    color: #6b7280;
                    font-size: 0.95rem;
                }

                .contact-link {
                    color: #111827;
                    font-weight: 700;
                    text-decoration: underline;
                    text-decoration-color: #ea580c;
                    text-decoration-thickness: 2px;
                    text-underline-offset: 2px;
                }

                .dark .contact-icon {
                    border-color: #1f2937;
                    background: linear-gradient(180deg, #0f172a 0%, #111827 100%);
                    color: #9ca3af;
                }

                .dark .contact-title {
                    color: #f9fafb;
                }

                .dark .contact-sub {
                    color: #9ca3af;
                }

                .dark .contact-link {
                    color: #f9fafb;
                }
            </style>
            <div class="max-w-3xl mx-auto">
                <div class="grid lg:grid-cols-2 lg:gap-12 gap-8">
                    <div class="text-left">
                        <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">
                            Need Help? <br>
                            Get in Touch
                        </h2>
                        <p class="mt-3 text-gray-600 dark:text-neutral-400">
                            We're here to answer any questions about our platform and how it can benefit your business.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="contact-list flex flex-col">
                            <div class="contact-item">
                                <span class="contact-icon" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21s6-4.35 6-10a6 6 0 1 0-12 0c0 5.65 6 10 6 10z" />
                                        <circle cx="12" cy="11" r="2.5" />
                                    </svg>
                                </span>
                                <div>
                                    <p class="contact-sub">Davethan Technologies</p>
                                    <p class="contact-title">245 Park Avenue, New York, NY</p>
                                </div>
                            </div>
                            <div class="contact-item">
                                <span class="contact-icon" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16v12H4z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 8l8 5 8-5" />
                                    </svg>
                                </span>
                                <div>
                                    <p class="contact-sub">Our Email</p>
                                    <a class="contact-link" href="mailto:info@davethan.tech">info@davethan.tech</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Book a Demo Modal and Floating Button -->
        <style>
            #demo-modal-bg {
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(0, 0, 0, 0.45);
                z-index: 9999;
                display: flex;
                align-items: center;
                justify-content: center;
                transition: opacity 0.3s;
                opacity: 1;
            }

            #demo-modal-bg.hide {
                opacity: 0;
                pointer-events: none;
            }

            #demo-modal-content {
                position: relative;
                width: 100%;
                max-width: 480px;
            }

            #demo-modal-close {
                position: absolute;
                top: -10px;
                right: -200px;
                background: none;
                border: none;
                font-size: 3rem;
                color: #EA580C;
                cursor: pointer;
                line-height: 1;
                z-index: 10000;
                display: block;
            }


            #demo-float-btn {
                position: fixed;
                right: 24px;
                bottom: 24px;
                z-index: 9998;
                background: linear-gradient(135deg, #ff7e5f, #feb47b);
                color: #fff;
                border: none;
                border-radius: 50px;
                padding: 16px 32px;
                font-size: 1.1rem;
                font-weight: bold;
                box-shadow: 0 4px 16px rgba(0, 0, 0, 0.18);
                cursor: pointer;
                transition: 0.2s;
            }

            #demo-float-btn:hover {
                opacity: 0.9;
                transform: scale(1.04);
            }

            @media (max-width: 600px) {
                #demo-float-btn {
                    padding: 12px 18px;
                    font-size: 1rem;
                }
            }
        </style>
        <div id="demo-modal-bg" style="display:none;">
            <div class="form-container" id="demo-modal-content">
                <button id="demo-modal-close" title="Close" aria-label="Close modal">×</button>
                <h1>Dishstack</h1>
                <p>Streamline your restaurant operations – reservations, billing, and kitchen management all in one system.</p>
                <form id="dishstack-form">
                    @csrf
                    <input type="text" placeholder="Full Name" name="full_name" required />
                    <input type="email" placeholder="Email Address" name="email_address" required />
                    <input type="tel" placeholder="Phone Number" name="phone_number" required />
                    <input type="text" placeholder="Restaurant Name" name="restaurant_name" required />
                    <label for="country">Country</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="country" value="UK" required /> UK</label>
                        <label class="radio-option"><input type="radio" name="country" value="Nigeria" /> Nigeria</label>
                        <label class="radio-option"><input type="radio" name="country" value="Other" id="other-country-option" /> Other</label>
                        <input type="text" name="other_countries" id="other-country-input" placeholder="Please specify your country" style="display:none;" />
                    </div>
                    <label for="feature">What feature are you most interested in?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="feature" value="Reservation" required /> Reservation</label>
                        <label class="radio-option"><input type="radio" name="feature" value="Billing" /> Billing</label>
                        <label class="radio-option"><input type="radio" name="feature" value="Kitchen Management" /> Kitchen Management</label>
                        <label class="radio-option"><input type="radio" name="feature" value="Other" id="other-feature-option" /> Other</label>
                        <input type="text" name="other_feature" id="other-feature-input" placeholder="Please specify" style="display:none;" />
                    </div>
                    <label for="demo_date">Preferred Demo Date</label>
                    <input type="date" id="demo-date" name="demo_date" />
                    <button type="submit">Book a Demo</button>
                </form>
            </div>
        </div>
        <button id="demo-float-btn" style="display:block;">Book a Demo</button>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Modal open/close logic
                var modalBg = document.getElementById('demo-modal-bg');
                var floatBtn = document.getElementById('demo-float-btn');
                var closeBtn = document.getElementById('demo-modal-close');

                function openModal() {
                    modalBg.style.display = 'flex';
                    floatBtn.style.display = 'none';
                }

                function closeModal() {
                    modalBg.style.display = 'none';
                    floatBtn.style.display = 'block';
                }
                floatBtn.onclick = openModal;
                closeBtn.onclick = closeModal;
                // Open modal on page load
                openModal();
                // Hide modal if user clicks outside modal content
                modalBg.addEventListener('click', function(e) {
                    if (e.target === modalBg) {
                        closeModal();
                    }
                });

                // Show/hide 'Other' feature input
                var otherFeatureOption = document.getElementById('other-feature-option');
                var otherFeatureInput = document.getElementById('other-feature-input');
                var featureRadios = document.querySelectorAll('input[name="feature"]');

                function updateOtherFeatureVisibility() {
                    if (otherFeatureOption && otherFeatureOption.checked) {
                        otherFeatureInput.style.display = "block";
                        otherFeatureInput.required = true;
                    } else {
                        otherFeatureInput.style.display = "none";
                        otherFeatureInput.required = false;
                        otherFeatureInput.value = "";
                    }
                }
                featureRadios.forEach(function(radio) {
                    radio.addEventListener("change", updateOtherFeatureVisibility);
                });

                // Show/hide 'Other' country input
                var otherCountryOption = document.getElementById('other-country-option');
                var otherCountryInput = document.getElementById('other-country-input');
                var countryRadios = document.querySelectorAll('input[name="country"]');

                function updateOtherCountryVisibility() {
                    if (otherCountryOption && otherCountryOption.checked) {
                        otherCountryInput.style.display = "block";
                        otherCountryInput.required = true;
                    } else {
                        otherCountryInput.style.display = "none";
                        otherCountryInput.required = false;
                        otherCountryInput.value = "";
                    }
                }
                countryRadios.forEach(function(radio) {
                    radio.addEventListener("change", updateOtherCountryVisibility);
                });

                // Phone validation
                var form = document.getElementById("dishstack-form");
                var phoneInput = form.querySelector('input[name="phone_number"]');
                phoneInput.addEventListener('input', function() {
                    var value = this.value;
                    var correctedValue = value;
                    var hasPlus = value.startsWith('+');
                    correctedValue = correctedValue.replace(/[^\d+]/g, '');
                    if (hasPlus) {
                        correctedValue = '+' + correctedValue.replace(/\+/g, '');
                    } else {
                        correctedValue = correctedValue.replace(/\+/g, '');
                    }
                    this.value = correctedValue;
                });

                // Form submit
                form.addEventListener("submit", function(event) {
                    event.preventDefault();
                    var regex = /^\+?[0-9]+$/;
                    if (phoneInput.value.length < 1 || !regex.test(phoneInput.value)) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Invalid Phone Number',
                            text: 'Please enter a valid phone number. Only numbers and a leading "+" sign are allowed.'
                        });
                        return;
                    }
                    Swal.fire({
                        title: 'Submitting...',
                        text: 'Please wait while we process your request.',
                        allowOutsideClick: false,
                        didOpen: function() {
                            Swal.showLoading();
                        }
                    });
                    var formData = new FormData(form);
                    var data = {};
                    formData.forEach(function(value, key) {
                        data[key] = value;
                    });
                    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
                    fetch("{{ route('leads.store') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                                "X-CSRF-TOKEN": csrfToken
                            },
                            credentials: 'same-origin',
                            body: JSON.stringify(data),
                        })
                        .then(function(response) {
                            return response.json().then(function(result) {
                                if (!response.ok) {
                                    throw result;
                                }
                                return result;
                            });
                        })
                        .then(function(result) {
                            if (result.status === "success") {
                                var timerInterval;
                                Swal.fire({
                                    icon: "success",
                                    title: "Success!",
                                    html: 'Thank You! Your submission was received successfully.<br>Our team will get back to you shortly.<br>Redirecting in <b></b> seconds...',
                                    timer: 5000,
                                    timerProgressBar: true,
                                    didOpen: function() {
                                        var b = Swal.getHtmlContainer().querySelector('b');
                                        timerInterval = setInterval(function() {
                                            b.textContent = Math.round(Swal.getTimerLeft() / 1000);
                                        }, 100);
                                    },
                                    willClose: function() {
                                        clearInterval(timerInterval);
                                        window.location.href = "/";
                                    },
                                    footer: '<button id="backToWebsiteBtn" class="swal2-confirm swal2-styled">Back to Website</button>'
                                });
                                setTimeout(function() {
                                    var btn = document.getElementById('backToWebsiteBtn');
                                    if (btn) {
                                        btn.addEventListener('click', function() {
                                            window.location.href = '/';
                                        });
                                    }
                                }, 100);
                            } else {
                                Swal.fire({
                                    icon: "error",
                                    title: "Submission Failed",
                                    text: result.message || "Something went wrong. Please try again."
                                });
                            }
                        })
                        .catch(function(error) {
                            console.error("Error:", error);
                            var message = "There was an issue connecting to the server. Please try again later.";
                            if (error && error.message) {
                                message = error.message;
                            } else if (error && error.errors) {
                                var first = Object.values(error.errors).flat()[0];
                                if (first) {
                                    message = first;
                                }
                            }
                            Swal.fire({
                                icon: "error",
                                title: "Submission Failed",
                                text: message
                            });
                        });
                });
                // Initial check for 'Other' input visibility
                updateOtherFeatureVisibility();
                updateOtherCountryVisibility();
            });
        </script>

        <footer class="p-4 bg-white sm:p-6 dark:bg-gray-800 border-t ">
            <div class="mx-auto max-w-screen-xl">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a
                            href="" class="hover:underline">Dishstack</a>. All Rights Reserved. </span>
                    <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0 rtl:space-x-reverse">

                        <a href="https://www.facebook.com/"
                            class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="https://www.instagram.com/"
                            class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.597 0-2.917-.01-3.96-.058-.976-.045-1.505-.207-1.858-.344-.466-.182-.8-.398-1.15-.748-.35-.35-.566-.683-.748-1.15-.137-.353-.3-.882-.344-1.857-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>

                        <a href="https://www.twitter.com/"
                            class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 50 50 " aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100"
                                viewBox="0 0 50 50">
                                <path
                                    d="M 6.9199219 6 L 21.136719 26.726562 L 6.2285156 44 L 9.40625 44 L 22.544922 28.777344 L 32.986328 44 L 43 44 L 28.123047 22.3125 L 42.203125 6 L 39.027344 6 L 26.716797 20.261719 L 16.933594 6 L 6.9199219 6 z">
                                </path>
                            </svg>
                        </a>


                    </div>
                </div>
            </div>
        </footer>

        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', () => {
                    if (location.hostname !== 'localhost') {
                        navigator.serviceWorker.register("{{ asset('service-worker.js') }}");
                    }
                });
            }
        </script>

        <!-- JavaScript: theme toggle and responsive hamburger/collapse handlers -->
        <script>
            (function() {
                const html = document.documentElement;
                const themeToggle = document.getElementById('theme-toggle');
                const darkIcon = document.getElementById('theme-toggle-dark-icon');
                const lightIcon = document.getElementById('theme-toggle-light-icon');

                // Initialize theme: check localStorage or system preference
                // We use 'color-theme' to match standard practices
                const saved = localStorage.getItem('color-theme');
                const systemDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

                // Determine if we should be dark
                let isDark = false;
                if (saved === 'dark') {
                    isDark = true;
                } else if (!saved && systemDark) {
                    isDark = true;
                }

                // Apply initial state
                if (isDark) {
                    html.classList.add('dark');
                    darkIcon.classList.add('hidden');
                    lightIcon.classList.remove('hidden');
                } else {
                    html.classList.remove('dark');
                    darkIcon.classList.remove('hidden');
                    lightIcon.classList.add('hidden');
                }

                // Toggle handler
                if (themeToggle) {
                    themeToggle.addEventListener('click', function() {
                        // Toggle the class
                        const isNowDark = html.classList.toggle('dark');

                        // Update localStorage
                        localStorage.setItem('color-theme', isNowDark ? 'dark' : 'light');

                        // Update icons
                        if (isNowDark) {
                            darkIcon.classList.add('hidden');
                            lightIcon.classList.remove('hidden');
                        } else {
                            darkIcon.classList.remove('hidden');
                            lightIcon.classList.add('hidden');
                        }
                    });
                }

                // Collapse toggle handler (handles any element with data-collapse-toggle)
                document.querySelectorAll('[data-collapse-toggle]').forEach(btn => {
                    btn.addEventListener('click', function() {
                        const targetId = btn.getAttribute('data-collapse-toggle');
                        if (!targetId) return;
                        const target = document.getElementById(targetId);
                        if (!target) return;
                        const isHidden = target.classList.contains('hidden');
                        if (isHidden) target.classList.remove('hidden');
                        else target.classList.add('hidden');
                        const expanded = btn.getAttribute('aria-expanded') === 'true';
                        btn.setAttribute('aria-expanded', (!expanded).toString());
                    });
                });

                // Responsive fix: on resize ensure desktop nav and mobile menu classes are appropriate
                function syncNavOnResize() {
                    const navMenu = document.getElementById('nav-menu');
                    const mobileMenu = document.getElementById('mobile-menu-2');
                    const isLarge = window.innerWidth >= 1024; // Tailwind lg breakpoint
                    if (navMenu) {
                        if (isLarge) {
                            navMenu.classList.remove('hidden');
                        } else {
                            navMenu.classList.add('hidden');
                        }
                    }
                    if (mobileMenu) {
                        if (isLarge) {
                            mobileMenu.classList.add('hidden');
                        }
                    }
                }
                window.addEventListener('resize', syncNavOnResize);
                // initial sync
                syncNavOnResize();
            })();
        </script>

        <script>
            // Pricing toggle (monthly vs annual)
            (function() {
                const toggle = document.getElementById('billing-toggle');
                const knob = document.getElementById('billing-toggle-knob');
                const monthlyLabel = document.getElementById('billing-monthly-label');
                const annualLabel = document.getElementById('billing-annual-label');
                const monthlyPrices = document.querySelectorAll('.monthly-price');
                const annualPrices = document.querySelectorAll('.annual-price');
                if (!toggle || !knob || !monthlyLabel || !annualLabel) return;

                let isAnnual = false;

                function apply() {
                    monthlyPrices.forEach(el => el.classList.toggle('pricing-hidden', isAnnual));
                    annualPrices.forEach(el => el.classList.toggle('pricing-hidden', !isAnnual));
                    monthlyLabel.classList.toggle('billing-label-active', !isAnnual);
                    annualLabel.classList.toggle('billing-label-active', isAnnual);
                    knob.classList.toggle('translate-x-6', isAnnual);
                    knob.classList.toggle('translate-x-1', !isAnnual);
                }

                toggle.addEventListener('click', () => {
                    isAnnual = !isAnnual;
                    apply();
                });

                apply();
            })();

            // Simple scrollspy to highlight nav links for Home, Features, Pricing, FAQs
            (function() {
                const targetIds = ['#top', '#icon-features', '#simple-pricing', '#user-faqs'];
                const links = Array.from(document.querySelectorAll('a[href^="#"]')).filter(link => targetIds.includes(link.getAttribute('href')));
                const sections = links
                    .map(link => {
                        const id = link.getAttribute('href');
                        const el = document.querySelector(id);
                        return el ? {
                            id,
                            el
                        } : null;
                    })
                    .filter(Boolean);

                function setActive(id) {
                    links.forEach(link => {
                        if (link.getAttribute('href') === id) {
                            link.classList.add('nav-active');
                        } else {
                            link.classList.remove('nav-active');
                        }
                    });
                }

                function onScroll() {
                    const scrollPos = window.scrollY + 120; // offset for header
                    let currentId = '#top';
                    sections.forEach(({
                        id,
                        el
                    }) => {
                        if (el.offsetTop <= scrollPos) {
                            currentId = id;
                        }
                    });
                    setActive(currentId);
                }

                // Smooth scroll on nav clicks using document scroll
                links.forEach(link => {
                    link.addEventListener('click', (e) => {
                        const targetId = link.getAttribute('href');
                        const targetEl = document.querySelector(targetId);
                        if (!targetEl) return;
                        e.preventDefault();
                        const rect = targetEl.getBoundingClientRect();
                        const targetTop = rect.top + window.pageYOffset - 100;
                        window.scrollTo({
                            top: targetTop,
                            behavior: 'smooth'
                        });
                        setActive(targetId);
                    });
                });

                window.addEventListener('scroll', onScroll, {
                    passive: true
                });
                onScroll();
            })();

            // Pricing card selection highlight
            (function() {
                const cards = Array.from(document.querySelectorAll('.pricing-card'));
                if (!cards.length) return;

                function setActive(target) {
                    cards.forEach(card => card.classList.toggle('pricing-card-active', card === target));
                }

                cards.forEach(card => {
                    card.addEventListener('click', () => setActive(card));
                });

                // Ensure one card is active by default (use second if present)
                setActive(cards[1] ?? cards[0]);
            })();

            // FAQ accordion
            (function() {
                const cards = document.querySelectorAll('.faq-card');
                cards.forEach(card => {
                    const btn = card.querySelector('.faq-toggle');
                    btn?.addEventListener('click', () => {
                        card.classList.toggle('faq-open');
                    });
                });
            })();
        </script>
</body>

</html>
