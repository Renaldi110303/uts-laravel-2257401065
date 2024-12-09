<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UTS Laravel 2257401065</title>

        <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body>
<section class="relative bg-cover bg-center bg-no-repeat "
style="background-image: url('{{ asset('images/buatwelcom.jpg') }}');">>
    
  <div class="justify-center mx-auto max-w-screen-xl px-4 py-32 lg:flex lg:h-screen lg:items-center">
  <article
  
>
  <div class="bg-gray-900/75 px-7 py-12 max-w-xl text-center ltr:sm:text-left rtl:sm:text-right" class="rounded-[10px] bg-blue-200 p-6 !pt-8 sm:p-6" >
    <div class="mx-auto max-w-xl text-center">
      <h1 class="text-3xl font-extrabold sm:text-5xl text-white">
        Selamat Datang

        <strong class="font-extrabold text-blue-500 sm:block"> Welcome </strong>
      </h1>

      <div class="mt-8 flex flex-wrap justify-center gap-4">
        <a
          class="block w-full rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-blue-700 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto"
          href="{{ route('login')}}"
        >
          Get Started
        </a>

        <a
          class="block w-full rounded px-12 py-3 text-sm font-medium text-blue-600 shadow hover:text-blue-700 focus:outline-none focus:ring active:text-blue-500 sm:w-auto"
          href="{{ route('register')}}"
        >
          Learn More
        </a>
      </div>
      <p class="mt-6 text-sm text-gray-400">Created By {{ $nama }}, {{ $nim }},
                    {{ $kelas }}</p>
</div>
</article>
    </div>
  </div>
</section>
</body>

</html>