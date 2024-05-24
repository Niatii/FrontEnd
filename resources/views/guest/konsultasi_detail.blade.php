<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi Detail</title>

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
<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headerguest')
    
    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mb-12 mx-8">
        <div class="bg-white w-full">
            <div class="p-5 md:p-20 w-full">
                <img class="object-cover w-full rounded-md" src="{{ asset('images/'.$files->photo) }}" alt="detail tentang kami"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <h5 class="mb-4 text-xl md:text-3xl font-bold "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">{{$files->title}}</h5>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        {{$files->content}}
                    </p>
                    
                    
                    <section class="bg-wform1 rounded-xl mt-20 " data-aos="fade-zoom-in">
                        <div class="py-6 lg:py-8">
                            <h2 class="mb-4 lg:text-2xl px-4">Formulir Pertanyaan</h2>
                            <form action="{{route('guest.pertanyaan.tambah')}}" method="POST" class=" p-4 bg-white">
                                @csrf
                                <div>
                                    <input type="text" name="name" id="name" class="bg-wform text-sm border-none focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 my-4 " placeholder="Nama" required>
                                </div>
                                <div>
                                    <input type="email" name="email" id="email" class="bg-wform text-sm border-none focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 my-4"   placeholder="Email" required>
                                </div>
                                <div class="sm:col-span-2">
                                    <textarea name="pertanyaan" id="message" rows="6" class="block p-2.5 w-full bg-wform text-sm border-none focus:ring-primary-500 focus:border-primary-500 my-4 " placeholder="Pertanyaan..."></textarea>
                                </div>

                                <div class="flex justify-center items-center mt-3">
                                    <button type="submit" class="py-2 px-7 text-sm font-medium text-center rounded-full bg-wform1 sm:w-fit hover:bg-nav transition duration-700 hover:text-white">
                                        Kirim Formulir
                                    </button>
                                </div> 
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footerguest')

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>
