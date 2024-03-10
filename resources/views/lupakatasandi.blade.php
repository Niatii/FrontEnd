<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

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
</head>
<body class="bg-gradient-to-b from-gradb to-grad h-screen">
    <div class="container max-w-full flex justify-center">
        <div class=" w-8/12 px-2 self-center my-40
        sm:w-3/6 md:w-2/6 lg:my-24">
            <h1 class=" text-xl text-white lg:text-2xl font-bold">
                TAX-D
            </h1>
            <div class=" text-xs mt-5 mb-2 text-white lg:text-base">
                <p>Selamat datang di TAX</p>
                <p>Digital</p>
            </div>
            <hr>
            <p class="text-center text-2xl my-8 font-bold text-white lg:text-4x lg:my-10">
                Lupa Kata Sandi
            </p>
            <form action="" class="text-center">
                <div class="mb-7">
                    <p class="text-[10px] mb-1 text-left text-white lg:text-xs">Masukkan Alamat Email Anda</p>
                    <input type="email" class="rounded-md text-[10px] placeholder:text-[10px] 
                     pl-4 py-2 w-full focus:outline-none focus:ring focus:ring-blue-800 lg:text-xs
                     lg:placeholder:text-xs lg:py-3 lg:rounded-lg" 
                    placeholder="Email">
                </div>
                
                <div class="text-center mt-4 lg:text-xs lg:mt-12">
                    <button class="bg-gradb text-[10px] w-8/12 rounded-2xl py-2 text-white lg:text-xs
                    lg:py-3 lg:rounded-3xl hover:bg-nav transition duration-700 ">Kirim Kode</button>
                </div>
                  
            </form>
        </div>
    </div>
</body>
</html>