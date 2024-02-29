<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- library fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-XH643b050y3F1776q8r8473J38+87772561ew528268559a01948a892997f0879f77a3937c" crossorigin="anonymous" />

    <title>Home</title>
</head>
<body>
    <!-- Header Start -->
    <header class="w-full bg-transparent fixed top-0 left-0 h-28">
        <div class="container">
            <div class="bg-blue w-full absolute top-0 left-0 justify-between flex">
                <div class="flex">
                    <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti"
                    class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:mx-4"></a>
                    <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti"
                    class="w-8 my-2 mx-1 rounded-full sm:w-10 sm:ml-3"></a>
                </div>
                <div class="grow">
                <input type="text" class="mt-3 ml-4 w-44 p-1 text-xs focus:outline-none focus:ring focus:ring-indigo-100
                rounded-sm sm:w-8/12 sm:ml-10 sm:mt-2 md:max-w-[592px] sm:text-base" />
                </div>
                <div>
                <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti"
                    class="w-8 my-2 mx-2 rounded-lg  sm:w-10 sm:ml-10 sm:mr-4 md:ml-24"></a>
                </div>
            </div>
            <!-- navbar start -->
            <div class="bg-orange-50 w-full absolute mt-12 sm:mt-14 justify-between flex">
                <div class="flex items-center px-5">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute lg:hidden">
                        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left" ></span>
                        <span class="hamburger-line transition duration-500 ease-in-out"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-slate-100 shadow-md rounded-md max-w-[200px] w-full
                    top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-black py-2 mx-8 flex group-hover:text-blue
                                lg:mx-5">Home</a>
                            </li>
                            <li class="group">
                                <a href="#tentangkami" class="text-base text-black py-2 mx-8 flex group-hover:text-blue
                                lg:mx-5">Tentang Kami</a>
                            </li>
                            <li class="group">
                                <a href="#konsultasi" class="text-base text-black py-2 mx-8 flex group-hover:text-blue
                                lg:mx-5">Konsultasi</a>
                            </li>
                            <li class="group">
                                <a href="#riset" class="text-base text-black py-2 mx-8 flex group-hover:text-blue
                                lg:mx-5">Riset</a>
                            </li>
                            <li class="group">
                                <a href="#publikasi" class="text-base text-black py-2 mx-8 flex group-hover:text-blue
                                lg:mx-6">Publikasi</a>
                            </li>
                            <li class="group">
                                <a href="#akademi" class="text-base text-black py-2 mx-8 flex group-hover:text-blue
                                lg:mx-6">Akademi</a>
                            </li>
                            <li class="group">
                                <a href="#berita" class="text-base text-black py-2 mx-8 flex group-hover:text-blue
                                lg:mx-6">Berita</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="my-3 mx-2">
                    <p class="text-center text-xs sm:ml-10 sm:mr-4 md:ml-24">tax</p>
                    <p class="text-center text-xs sm:ml-10 sm:mr-4 md:ml-24">digital</p>
                </div>
                
            </div>
            <!-- navbar end -->
        </div>
    </header>
    <!-- Header End -->
    <!-- Start Content -->
    <!-- End Content -->

    <!-- javascript -->
    @vite('resources/js/app.js')
</body>
</html>