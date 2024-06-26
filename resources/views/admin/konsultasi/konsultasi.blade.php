<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>
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
    
    <!-- Script modal -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>
<body class="bg-latar text-black pb-12 min-h-screen">
    
    <!-- header -->
   @include('components.headeradmin')

    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mb-12 mx-8">
        @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Swal.fire({
                    title: "{{ session('success') }}",
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            });
        </script>
        @endif


        <div class="bg-white w-full rounded-md">
            <div class="mx-3 my-2">
                <h1 class="font-bold pt-6 text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6"
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="200"
                    data-aos-offset="0">
                    Konsultasi
                </h1>
            </div>

            
            <div class="grid gap-x-5 sm:gap-x-10 gap-y-2 grid-cols-2 mx-5 sm:mx-10 my-2 ">

                @foreach ($files as $file)

                <div class="w-full" data-aos="fade-up"
                data-aos-anchor-placement="center-bottom">
                    <a href="{{ route('admin.konsultasi.detail', $file->konsultasi_id) }}">
                        <img src="{{ asset('images/'.$file->photo) }}" alt="konsultasi" class="w-full aspect-16/9 hover:brightness-50"/>
                    </a>
                    <div class="py-3">
                        <a href="{{ route('admin.konsultasi.detail', $file->konsultasi_id) }}">
                            <h5 class="mb-2 text-xs md:text-lg font-bold tracking-tight hover:text-sky-600">{{ $file->title }}</h5>
                        </a>
                        <p class="mb-3 text-[10px] overflow-hidden md:text-xs h-[62px]">
                            {{ $file->content }}
                        </p>
                    </div>
                </div>


                @endforeach

            
            </div>
            <div class="mx-5 mt-5 mb-20 sm:mx-10">
                <a href="{{route('admin.konsultasi.tambah')}}" class="text-xs sm:text-base bg-nav py-1 px-3 rounded-md text-white hover:bg-gradb focus:bg-gradb transition duration-700">
                    Tambah
                </a>
            </div>
            <div class="flex justify-end mb-20">
                <a href="/admin/konsultasi/pertanyaan" class="bg-latar py-1 mb-14 pl-4 pr-8 font-bold text-nav text-xs sm:text-base
                    hover:text-black focus:text-white transition duration-1000">
                    Lihat list pertanyaan..
                </a>
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