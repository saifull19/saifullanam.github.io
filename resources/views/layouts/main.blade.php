<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- my stayll --}}
    <link rel="stylesheet" href="/css/stayl.css">

    {{-- Animasi AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    <title>Hello | {{ $title }}!</title>
  </head>
  <body style="background-image: url(/img/saiful.jpg);">

      @include('partials.navbar')

      <div class="container mt-4">
          
          @yield('container')

      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script> --}}
    {{-- textPlugin gsap --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js"></script> --}}
    <script>
      // import { gsap } from "gsap";
      // import { TextPlugin } from "gsap/TextPlugin";


      // plugin register
      // gsap.registerPlugin(TextPlugin);
      // gsap.from('.prof', {duration: 1, y: -100, opacity:0, ease: 'bounce' });
      
      // gsap.to('.lead', {duration: 2, delay: 1.5, text: 'Web Developer | Digital Marketing'});
      // gsap.from('.navbarr', { duration:1,5, y: '-100%', opacity: 0, ease: 'bounce'});
      // gsap.from('.jumbotron img', {duration: 1, rotateY: 360, opacity:0 });
      // gsap.from('.display-4', { duration:1, x: -50, opacity: 0, delay: 0.5, ease: 'back'});
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        const galleryImage = document.querySelectorAll('.gallery-img');
        const project = document.querySelectorAll('.project');
        const cardd = document.querySelectorAll('.cardd');
        const cio = document.querySelectorAll('.cio');

        cardd.forEach((car, i) => {
          car.dataset.aos = 'fade-down';
          car.dataset.aosDelay = i * 100;
          car.dataset.aosDuration = 1000; 
        });
        
        cio.forEach((ci, i) => {
          ci.dataset.aos = 'fade-down';
          ci.dataset.aosDelay = i * 200;
          ci.dataset.aosDuration = 1000; 
        });

        project.forEach((prj, i) => {
          prj.dataset.aos = 'fade-down';
          prj.dataset.aosDelay = i * 100;
          prj.dataset.aosDuration = 1000; 
        });

        galleryImage.forEach((img, i) => {
          img.dataset.aos = 'fade-down';
          img.dataset.aosDelay = i * 100;
          img.dataset.aosDuration = 1000; 
        });
      AOS.init();
    </script>

    
  </body>
</html>