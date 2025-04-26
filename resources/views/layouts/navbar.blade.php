{{-- filepath: d:\Code\BrantaNew\KI-Poltek\resources\views\layouts\navbar.blade.php --}}
<div class="navbar bg-[#ffffff] shadow-sm fixed top-0 w-full z-50">
    <div class="flex justify-between items-center w-full px-10 py-2">
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-2">
            <img src="{{ asset('img/brantaLogo.png') }}" alt="Logo" class="h-16 w-auto scale-200">
        </a>

        <!-- Center Links -->
        <div class="flex space-x-12">
            <a href="#about" class="text-gray-700 hover:text-black font-bold text-lg" style="font-family: 'Poppins', sans-serif;">About</a>
            <a href="#why" class="text-gray-700 hover:text-black font-bold text-lg" style="font-family: 'Poppins', sans-serif;">Why</a>
            <a href="#how" class="text-gray-700 hover:text-black font-bold text-lg" style="font-family: 'Poppins', sans-serif;">How</a>
        </div>

        <!-- Button -->
        <div class="relative group">
            <button class="bg-[#a0f0c5] text-black font-bold py-2 px-6 border-2 border-black relative z-10">
                Test Now
            </button>
            <div class="absolute top-1 left-1 bg-black w-full h-full z-0 transition-all duration-300 group-hover:top-0 group-hover:left-0 rounded"></div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
</script>
