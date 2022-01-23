<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Beranda</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="stylesheet" href="{{asset('/css/app.css')}}" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
  <style>
    .slide-in-bottom {
      -webkit-animation: slide-in-bottom .5s cubic-bezier(.25, .46, .45, .94) both;
      animation: slide-in-bottom .5s cubic-bezier(.25, .46, .45, .94) both
    }

    .slide-in-bottom-h1 {
      -webkit-animation: slide-in-bottom .5s cubic-bezier(.25, .46, .45, .94) .5s both;
      animation: slide-in-bottom .5s cubic-bezier(.25, .46, .45, .94) .5s both
    }

    .slide-in-bottom-subtitle {
      -webkit-animation: slide-in-bottom .5s cubic-bezier(.25, .46, .45, .94) .75s both;
      animation: slide-in-bottom .5s cubic-bezier(.25, .46, .45, .94) .75s both
    }

    .fade-in {
      -webkit-animation: fade-in 1.2s cubic-bezier(.39, .575, .565, 1.000) 1s both;
      animation: fade-in 1.2s cubic-bezier(.39, .575, .565, 1.000) 1s both
    }

    .bounce-top-icons {
      -webkit-animation: bounce-top .9s 1s both;
      animation: bounce-top .9s 1s both
    }

    @-webkit-keyframes slide-in-bottom {
      0% {
        -webkit-transform: translateY(1000px);
        transform: translateY(1000px);
        opacity: 0
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1
      }
    }

    @keyframes slide-in-bottom {
      0% {
        -webkit-transform: translateY(1000px);
        transform: translateY(1000px);
        opacity: 0
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        opacity: 1
      }
    }

    @-webkit-keyframes bounce-top {
      0% {
        -webkit-transform: translateY(-45px);
        transform: translateY(-45px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 1
      }

      24% {
        opacity: 1
      }

      40% {
        -webkit-transform: translateY(-24px);
        transform: translateY(-24px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      65% {
        -webkit-transform: translateY(-12px);
        transform: translateY(-12px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      82% {
        -webkit-transform: translateY(-6px);
        transform: translateY(-6px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      93% {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      25%,
      55%,
      75%,
      87% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
        opacity: 1
      }
    }

    @keyframes bounce-top {
      0% {
        -webkit-transform: translateY(-45px);
        transform: translateY(-45px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in;
        opacity: 1
      }

      24% {
        opacity: 1
      }

      40% {
        -webkit-transform: translateY(-24px);
        transform: translateY(-24px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      65% {
        -webkit-transform: translateY(-12px);
        transform: translateY(-12px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      82% {
        -webkit-transform: translateY(-6px);
        transform: translateY(-6px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      93% {
        -webkit-transform: translateY(-4px);
        transform: translateY(-4px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
      }

      25%,
      55%,
      75%,
      87% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
      }

      100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
        opacity: 1
      }
    }

    @-webkit-keyframes fade-in {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }

    @keyframes fade-in {
      0% {
        opacity: 0
      }

      100% {
        opacity: 1
      }
    }
  </style>

</head>


<body class="leading-normal tracking-normal text-gray-900" style="font-family: 'Source Sans Pro', sans-serif;">



  <div class="h-screen pb-14 bg-right bg-cover" style="background-image:url('bg.svg');">
    <!--Nav-->
    <div class="w-full container mx-auto p-6">

      <div class="w-full flex items-center justify-between">
        <a class="flex items-center text-indigo-400 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">Sepatan</a>

        <div class="flex w-1/2 justify-end content-center">
          <a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4" href="https://instagram.com/kecamatansepatan">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
          </a>
          <a class="inline-block text-blue-300 no-underline hover:text-indigo-800 hover:text-underline text-center h-10 p-2 md:h-auto md:p-4 " href="mailto:sepatankec@tangerangkab.go.id">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </a>
        </div>

      </div>

    </div>

    <div class="container pt-4 px-6 mx-auto flex flex-wrap flex-col md:flex-row items-center">

      <div class="flex flex-col w-full xl:w-2/5 justify-center lg:items-start overflow-y-hidden">
        <h1
          class="my-4 text-3xl md:text-5xl text-purple-800 font-bold leading-tight text-center md:text-left slide-in-bottom-h1">
          Main Hero Message to sell your app</h1>
        <p class="leading-normal text-base md:text-2xl mb-8 text-center md:text-left slide-in-bottom-subtitle">Sub-hero
          message, not too long and not too short. Make it just right!</p>
        <div class="flex w-full justify-center md:justify-start pb-24 lg:pb-0 fade-in">
          <a href="/dashboard" class="px-8 py-2 bg-blue-600 text-blue-200 rounded-md">Go To System</a>
        </div>

      </div>

      <div class="w-full xl:w-3/5 py-6 overflow-y-hidden">
        <img class="w-5/6 mx-auto lg:mr-0 slide-in-bottom object-cover" src="{{asset('/images/sepatan.jpeg')}}">
      </div>

      <div class="w-full pt-16 pb-6 text-sm text-center md:text-left fade-in">
        <a class="text-gray-500 no-underline hover:no-underline" href="#">&copy; Kecamatan Sepatan 2022</a>
      </div>

    </div>


  </div>

</body>

</html>
