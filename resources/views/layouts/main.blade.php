<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Print</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class=" scroll-smooth" x-data="{ showTop: false }" @scroll.window="showTop = (window.pageYOffset > 200)">

    <div>
        @include('layouts.Topnav')
    </div>
    <div class=" sticky top-0 z-[999]">
        @include('layouts.navbar')
    </div>
    <div>
        @yield('body')
    </div>
    <div>
        @include('layouts.footer')
    </div>

    <script src="https://kit.fontawesome.com/ee1a5338f6.js" crossorigin="anonymous"></script>

    <script>
    let index = 0;
    const slides = document.getElementById("slides");
    const totalSlides = 2;

    function showSlide() {
        index = (index + 1) % totalSlides;
        slides.style.transform = `translateX(-${index * 100}%)`;
    }

    setInterval(showSlide, 4000); // 4s per slide
    </script>
    <script>
    (function() {
        const root = document.getElementById('service-dd');
        const btn = root.querySelector('[data-dd-toggle]');
        const menu = root.querySelector('[data-dd-menu]');
        const items = root.querySelectorAll('[data-dd-item]');
        const label = root.querySelector('[data-dd-label]');
        const input = root.querySelector('[data-dd-input]');

        const open = () => menu.classList.remove('hidden');
        const close = () => menu.classList.add('hidden');

        btn.addEventListener('click', (e) => {
            e.stopPropagation();
            menu.classList.toggle('hidden');
        });

        items.forEach(li => {
            li.addEventListener('click', () => {
                label.textContent = li.textContent.trim();
                if (input) input.value = li.textContent.trim();
                close();
            });
        });

        // click outside closes
        document.addEventListener('click', (e) => {
            if (!root.contains(e.target)) close();
        });

        // escape key closes
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') close();
        });
    })();
    </script>
</body>

</html>