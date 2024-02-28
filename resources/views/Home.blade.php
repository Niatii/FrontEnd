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
    <header class=" w-full relative top-0 left-0 h-28">
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
                rounded-sm sm:w-8/12 sm:ml-10 sm:mt-2 md:w-7/12 sm:text-base" />
                </div>
                <div>
                <a href="#"><img src="{{ asset('storage/properti/1.jpg') }}" alt="gambar properti"
                    class="w-8 my-2 mx-2 rounded-lg  sm:w-10 sm:ml-10 sm:mr-4 md:ml-24"></a>
                </div>
            </div>
            <!-- navbar start -->
            <div class="bg-orange-50 w-full absolute mt-12 sm:mt-14 justify-between flex">
                <div>
                    <button class="mx-5 mt-3 md:hidden">
                        <span class="w-[25px] h-[1.5px] my-2 block bg-black"></span>
                        <span class="w-[25px] h-[1.5px] my-2 block bg-black"></span>
                        <span class="w-[25px] h-[1.5px] my-2 block bg-black"></span>
                    </button>
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
</body>
</html>