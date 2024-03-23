<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan</title>

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
    <!-- header -->
    @include('components.headerguest')

    
    <!-- Start content -->
    <section  class="pt-36 sm:pt-40 mb-12 mx-8 flex justify-center">
        <div class="bg-white w-full rounded-md pb-40">
            <div class="mx-3 my-2">
                <h1 class="font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-6 sm:mx-6"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="200"
                data-aos-offset="0">Kegiatan</h1>
            </div>


            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <img class="w-full" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />    
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">Judul Kegiatan</h5>
                        <p class="my-1 text-[9px] md:text-base">Harga</p>
                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate? blabala</p>
                       <button onclick="showDialog()" class="bg-grad text-[9px] md:text-xs py-1 px-2 rounded-full text-gray-200 hover:bg-grab hover:text-black">Akses Halaman</button>
                    </div>
                </div>
            </div>

            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <img class="w-full" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />    
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">Judul Kegiatan</h5>
                        <p class="my-1 text-[9px] md:text-base">Harga</p>
                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate? blabala</p>
                       <button onclick="showDialog()" class="bg-grad text-[9px] md:text-xs py-1 px-2 rounded-full text-gray-200 hover:bg-grab hover:text-black">Akses Halaman</button>
                    </div>
                </div>
            </div>

            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <img class="w-full" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />    
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">Judul Kegiatan</h5>
                        <p class="my-1 text-[9px] md:text-base">Harga</p>
                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate? blabala</p>
                       <button onclick="showDialog()" class="bg-grad text-[9px] md:text-xs py-1 px-2 rounded-full text-gray-200 hover:bg-grab hover:text-black">Akses Halaman</button>
                    </div>
                </div>
            </div>
            
            <div class="px-2 md:px-10 items-center my-4" data-aos="fade-right"
                data-aos-offset="150"
                data-aos-easing="ease-in-sine">
                <div class="w-full grid grid-cols-3">
                    <div class="flex items-center">
                        <img class="w-full" src="{{ asset('storage/properti/2.jpg') }}" alt="gambar pelatihan" />    
                    </div>
                    <div class="mx-2 h-24 sm:px-2 sm:h-[120px] md:h-48 md:pt-5 overflow-hidden col-span-2 ">
                        <h5 class="font-bold text-xs md:text-lg lg:text-2xl overflow-hidden h-4 md:h-10">Judul Kegiatan</h5>
                        <p class="my-1 text-[9px] md:text-base">Harga</p>
                        <p class="text-[10px] md:text-base overflow-hidden h-7 sm:h-12 lg:h-[72px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. At repellendus corrupti nobis perferendis eos officiis iusto rem iure ad quis numquam natus error nesciunt, deserunt expedita nam veniam nihil nemo voluptatibus, recusandae quia eaque, laudantium aperiam? Delectus dicta repudiandae rem provident optio obcaecati nulla, necessitatibus, adipisci fuga perspiciatis quibusdam. Voluptates, minus facere eius quibusdam officia reprehenderit alias voluptatum quidem autem dicta iusto? Quos atque reprehenderit itaque officia aliquid enim. Sit, itaque repellat. Natus nobis accusantium doloribus tempora deleniti vitae quidem, nihil est aperiam aliquid, officiis repellendus debitis quos quae deserunt similique reiciendis molestiae ipsa odit quas, corporis consectetur dolores. Voluptate? blabala</p>
                       <button onclick="showDialog()" class="bg-grad text-[9px] md:text-xs py-1 px-2 rounded-full text-gray-200 hover:bg-grab hover:text-black">Akses Halaman</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End content -->

    <!--modal start -->
   <div id="dialog" class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen z-40 justify-center items-center
   opacity-0 hidden transition-opacity duration-500">
    <div class="bg-white rounded shadow-md p-8 w-[60%] overflow-hidden">
        <div class="flex-grow">
            <h1 class="font-bold text-lg md:text-2xl">Syarat dan Ketentuan Layanan</h1>
            <hr class="border-t-1 border-black mt-1">
            <p class="mt-4 text-gray-800 text-xs md:text-lg">Silakan melakukan login untuk mendapatkan akses fitur ini!</p>
        </div>
        <div class="flex mt-6 gap-4">
            <button class="mt-4 text-xs md:text-lg bg-grad py-2 px-4 text-gray-200 rounded-lg hover:bg-gradb" onclick="showLogin()">
                Login
            </button>
            <button onclick="hideDialog()" class="mt-4 text-xs md:text-lg border-1 border-gray-800 py-2 px-3 rounded-lg hover:border-none hover:bg-gray-500 hover:text-white
            focus:bg-gray-500">
                Cencel
            </button>
        </div>
    </div>
   </div>
    <!-- modal end -->

    
    



    <!-- footer -->
    @include('components.footerguest')


    <!-- javascript -->
    <script>
        function showDialog(){
            let dialog = document.getElementById('dialog');
            dialog.classList.remove('hidden');
            dialog.classList.add('flex');
            dialog.classList.add('opacity-100');
            setTimeout(() => {
                dialog.classList.add('opacity-100');
            }, 20);
        }
        function hideDialog() {
            let dialog = document.getElementById('dialog');
            dialog.classList.add('opacity-0');
            setTimeout(() => {
                dialog.classList.add('hidden');
                dialog.classList.remove('flex');
            }, 500);
        }
        function showLogin() {
            
            window.location.href = "/login";
        }
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>