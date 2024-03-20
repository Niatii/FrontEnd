<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    @vite('resources/css/app.css')

    <!-- font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- library fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-latar text-black">
    <!-- Header Start -->
    <header class="w-full bg-transparent fixed top-0 left-0 h-28 z-50">
        <div class="container">
            <div class="bg-nav w-full absolute top-0 left-0 justify-between flex">
                <div class="flex">
                    <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti"
                    class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:mx-4"></a>
                    <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti"
                    class="w-8 my-2 mx-1 rounded-full sm:w-10 sm:ml-3"></a>
                </div>
                <div class="relative text-black">
                    <a href="/login">
                        <img src="{{ asset('storage/properti/5.jpg') }}" alt="gambar properti" class="w-8 my-2 mx-2 rounded-full sm:w-10 sm:ml-10 sm:mr-4 md:ml-24
                        object-cover aspect-ratio-1/1">
                    </a>
                    
                </div>
            </div>
            <!-- navbar start -->
            <div class="bg-fot w-full absolute mt-12 sm:mt-14 justify-between flex">
                <div class="flex items-center px-5">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute lg:hidden">
                        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left" ></span>
                        <span class="hamburger-line transition duration-500 ease-in-out"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden  bg-fot  absolute py-5 shadow-md rounded-md max-w-[200px] w-full
                    top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none lg:py-3 lg:w-full">
                        <ul class="block lg:flex">
                        <li class="group">
                                <a href="/" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5 {{ request()->is('/') ? 'text-sky-600' : 'text-black' }}" id="navhome">Home</a>
                            </li>
                            <li class="group relative">
                                <a href="/guest/Tentang Kami" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5 {{ request()->is('guest/Tentang Kami') ? 'text-sky-600' : 'text-black' }}" id="tentangkami">Tentang Kami</a>
                                
                            </li>
                            <li class="group relative ">
                                <a href="/guest/Konsultasi" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5 {{ request()->is('guest/Konsultasi') ? 'text-sky-600' : 'text-black' }}" id="konsultasi">Konsultasi</a>
                                
                            </li>
                            <li class="group relative">
                                <a href="/guest/Riset" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-5 {{ request()->is('guest/Riset') ? 'text-sky-600' : 'text-black' }}" id="riset">Riset</a>
                               
                            </li>
                            <li class="group relative">
                                <a href="/guest/Publikasi" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6 {{ request()->is('guest/Publikasi') ? 'text-sky-600' : 'text-black' }}" id="publikasi">Publikasi</a>
                                
                            </li>
                            <li class="group relative text-black ">
                                <a href="#akademi" class="text-base py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6" id="akademi">Akademi</a>
                                <ul class="dropdown bg-latar lg:bg-fot hidden lg:absolute py-3 px-8 lg:ml-5 lg:px-5 lg:pt-5 lg:shadow-md lg:rounded-md
                                w-full transition duration-700"
                                id="dropdownakademi">
                                    <li class="my-2"><a href="#pelatihan" class="hover:text-sky-600">Pelatihan</a></li>
                                    <li class="my-2"><a href="#kegiatan" class="hover:text-sky-600 ">Kegiatan</a></li>
                                </ul>
                            </li>
                            <li class="group relative">
                                <a href="/guest/Berita" class="text-base text-black py-2 mx-8 flex group-hover:text-sky-600
                                lg:mx-6 {{ request()->is('guest/Berita') ? 'text-sky-600' : 'text-black' }}" id="berita">Berita</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="my-3 mx-2">
                    <img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti" class="w-8 rounded-lg  sm:w-10 sm:ml-10 sm:mr-2 md:ml-24">
                </div>   
            </div>
            <!-- navbar end -->
        </div>
    </header>
    <!-- Header End -->
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mb-12 mx-8">
        <div class="bg-white w-full">
            <div class="p-5 md:p-20 w-full">
                <img class="object-cover w-full rounded-md" src="{{ asset('storage/properti/2.jpg') }}" alt="detail tentang kami"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <h5 class="mb-4 text-xl md:text-3xl font-bold "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">Judul Page</h5>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi nulla sunt excepturi nisi. Quidem perspiciatis neque molestias! Architecto, provident? Maiores repellendus, vero beatae laborum culpa quibusdam quod cupiditate suscipit et nulla delectus error earum harum alias dolor dolorum doloremque in? Repellat veniam ex impedit temporibus blanditiis eveniet voluptatibus ad.
                    </p>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi nulla sunt excepturi nisi. Quidem perspiciatis neque molestias! Architecto, provident? Maiores repellendus, vero beatae laborum culpa quibusdam quod cupiditate suscipit et nulla delectus error earum harum alias dolor dolorum doloremque in? Repellat veniam ex impedit temporibus blanditiis eveniet voluptatibus ad.
                    </p>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo nulla aperiam officiis, nisi quas modi. Corrupti debitis hic cumque ullam harum dignissimos tenetur quod quas voluptates delectus, fugiat animi obcaecati, optio explicabo quis eius aut omnis enim aperiam quidem alias nesciunt culpa? Modi nobis enim nulla, quod, nam magnam sed commodi inventore explicabo corrupti odit mollitia velit a fugit, soluta eos? Reprehenderit vero sapiente quo et quia consequatur fugit, assumenda eum delectus provident, voluptatum voluptas quasi unde nemo? Fuga quis iusto quidem accusamus perspiciatis alias officiis asperiores repellat deserunt vero voluptas minus fugit, pariatur libero tempore commodi voluptatum earum sint?
                    </p>
                </div>
            </div>
            


        </div>
    </section>
    <!-- Content End -->

    <!-- Footer Start -->
    <footer class="bg-fot text-black mt-20" data-aos="fade-up">
        <div class="container max-w-full pt-2">
            <div class="grid grid-cols-4 lg:grid-cols-5 gap-3">
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                  <p class=" font-bold">Tentang Kami</p>
                  <hr class="border-t-2 border-black my-1">
                  <p><a href="/guest/Detail Tentang Kami" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Tentang Kami" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Tentang Kami" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Tentang Kami" class="hover:text-sky-600">Link</a></p>
                </div>
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12" >
                  <p class="font-bold ">Konsultasi</p>
                  <hr class="border-t-2 border-black my-1">
                  <p><a href="/guest/Detail Konsultasi" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Konsultasi" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Konsultasi" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Konsultasi" class="hover:text-sky-600">Link</a></p>
                </div>
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                  <p class="font-bold">Riset</p>
                  <hr class="border-t-2 border-black my-1">
                  <p><a href="/guest/Detail Riset" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Riset" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Riset" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guest/Detail Riset" class="hover:text-sky-600">Link</a></p>
                </div>
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                  <p class="font-bold ">Publikasi</p>
                  <hr class="border-t-2 border-black my-1">
                  <p><a href="/guest/Detail Publikasi" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guset/Detail Publikasi" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guset/Detail Publikasi" class="hover:text-sky-600">Link</a></p>
                  <p><a href="/guset/Detail Publikasi" class="hover:text-sky-600">Link</a></p>
                </div>
                <div class="mx-2 text-xs sm:text-base sm:mx-12 lg:mr-12 w-8/12">
                  <p class="font-bold ">Akademi</p>
                  <hr class="border-t-2 border-black my-1">
                  <p><a href="#" class="hover:text-sky-600">Link</a></p>
                  <p><a href="#" class="hover:text-sky-600">Link</a></p>
                  <p><a href="#" class="hover:text-sky-600">Link</a></p>
                  <p><a href="#" class="hover:text-sky-600">Link</a></p>
                </div>
        
            </div>
            <div class="mt-8 mx-2 sm:mx-12  lg:mt-12 lg:ml-12">
                <p class="font-bold text-base lg:text-2xl">Link Reference</p>
                <div class="flex">
                    <a href="https://www.facebook.com/NASA?mibextid=ZbWKwL"><i class="fab fa-facebook mr-2 lg:text-xl"></i></a>
                    <a href="https://www.instagram.com/nasa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="fab fa-instagram mr-2 lg:text-xl"></i></a>
                    <a href="https://x.com/NASA?s=20"><i class="fab fa-twitter mr-2 lg:text-xl"></i></a>
                    <a href="https://www.youtube.com/@NASA"><i class="fab fa-youtube lg:text-xl"></i></a>
                    <p class="text-[8px] font-sans mt-3 ml-5 lg:text-sm">No Telp 08xx-xxxx-xxx</p>
                </div>
                <div class="mt-14 pb-8 text-[6px] lg:text-xs ">
                <p class="text-center"><i class="far fa-copyright"></i> COPYRIGHT 2024 TAX Digital. All rights reserved. Not for further distribution without the permission of TAX digital</p>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- Footer End -->




    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>

