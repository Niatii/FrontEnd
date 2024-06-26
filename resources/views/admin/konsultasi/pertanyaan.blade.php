<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pertanyaan</title>
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
        <div class="bg-white w-full rounded-md pb-12">
            <h1 class="ml-2 md:ml-8 font-bold text-wjudul my-4 md:text-2xl lg:text-3xl md:my-8" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="200" data-aos-offset="0">
                Pertanyaan
            </h1>

            <div class=" relative overflow-x-auto mx-5 sm:mx-10">

                <table class="w-full text-xs sm:text-base text-left border-collapse border border-slate-500 ">

                    <thead class="text-xs text-center sm:text-base">
                        <tr>
                            <th scope="col" class="px-2 py-3 border border-slate-500">
                                Nama
                            </th>
                            <th scope="col" class="px-2 py-3 border border-slate-500">
                                Email
                            </th>
                            <th scope="col" class="px-2 py-3 border border-slate-500">

                            </th>
                        </tr>
                    </thead>
                    @foreach ($files as $file)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-2 py-4 border border-slate-500">
                                {{ $file->name }}
                            </td>
                            <td class="px-2 py-4 border border-slate-500">
                                <a href="mailto:{{ $file->email }}">{{ $file->email }}</a>
                            </td>
                            <td class="px-2 py-4 border border-slate-500 text-center">
                                <a href="{{ route('admin.detail.pertanyaan', $file->pertanyaan_id) }}" class=" text-white p-2 sm:px-4 rounded-md bg-nav 
                                hover:bg-gradb focus:bg-gradb transition duration-700">Detail</a>
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>

            </div>

            <div class="my-20">
                <a href="/admin/konsultasi" class="bg-latar py-1 pr-4 pl-8 font-bold text-nav text-xs sm:text-base
                    hover:text-black focus:text-white transition duration-1000">
                    Kembali ke konsultasi
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