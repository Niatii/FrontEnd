<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail List Pertanyaan</title>
    <!-- @vite(['resources/css/app.css','resources/js/app.js']) -->

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

<body class="bg-latar text-black pb-12 min-h-screen">

    <!-- header -->
    @include('components.headeradmin')

    <!-- Content Start -->
    <section class="pt-36 mx-8 sm:pt-40 flex justify-center relative">
        <div class="bg-white w-full rounded-md pb-5">
            <h1 class="mx-5 md:mx-10 font-bold text-wjudul mt-8 md:text-lg lg:text-xl md:mt-12" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                Detail Pertanyaan
            </h1>


            <div class="text-xs md:text-base mx-5 md:mx-10 my-3 flex">
                <p class="font-bold text-wjudul">
                    Nama :
                </p>
                <p class="ml-2">
                    {{ $files->name }}
                </p>
            </div>
            <div class="text-xs md:text-base mx-5 md:mx-10 my-3 flex">
                <p class="font-bold text-wjudul">
                    Email :
                </p>
                <p class="ml-2">
                    <a href="mailto:{{ $files->email }}">{{ $files->email }}</a>
                </p>
            </div>
            <div class="text-xs md:text-base mx-5 md:mx-10 my-3">
                <p class="font-bold text-wjudul">
                    Pertanyaan :
                </p>
                <p class="my-2">
                    {{ $files->pertanyaan }}
                </p>
            </div>


            <div class="mt-20">
                <a href="/admin/konsultasi" class="bg-latar py-1 pr-4 pl-8 font-bold text-nav text-xs sm:text-base
                 hover:text-black focus:text-white transition duration-1000">Kembali</a>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>

</html>