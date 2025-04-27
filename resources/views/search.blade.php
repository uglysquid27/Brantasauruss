@extends('layouts.app')

@section('title', 'Main Page')

@section('content')
<section id="hero" class="hero bg-white min-h-screen border-b-4 border-black">
    <div class="hero-content flex-col lg:flex-row-reverse pt-50">
        <img
            src="{{ asset('img/tbc.png') }}"
            class="max-w-sm rounded-lg scale-160 ml-50"
        />
        <div style="font-family: 'Poppins', sans-serif;">
            <h1 class="text-6xl font-bold mb-2 text-black">
                Early 
                <span class="relative inline-block">
                    <span class="highlight-green">Detection.</span>
                </span>
            </h1>
            <h1 class="text-6xl font-bold mb-4 text-black">
                Fight 
                <span class="relative inline-block">
                    <span class="highlight-pink">TBC</span>.
                </span>
            </h1>
            <p class="text-lg text-gray-600 mb-6">
                Screen yourself for Tuberculosis symptoms easily and take<br>action early. Protect yourself and your loved ones from TBC with<br>this simple test.
            </p>
            <div class="flex space-x-4">
                <div class="relative group">
                    <a href="/screening" class="bg-[#a0f0c5] text-black font-bold py-4 px-8 border-2 border-black relative z-10 inline-block text-center">
                        Start Screening
                    </a>
                    <div class="absolute top-2 left-2 bg-black w-full h-full z-0 transition-all duration-300 group-hover:top-0 group-hover:left-0"></div>
                </div>
                <div class="relative group">
                    <button class="bg-[#f7c1d9] text-black font-bold py-4 px-8 border-2 border-black relative z-10">
                        Learn More
                    </button>
                    <div class="absolute top-2 left-2 bg-black w-full h-full z-0 transition-all duration-300 group-hover:top-0 group-hover:left-0"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="bg-[#f7c1d9] min-h-screen pt-50 px-8 border-b-4 border-black">
    <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center">
        <!-- Image -->
        <div class="md:w-1/2 mb-10 md:mb-0">
            <img src="{{ asset('img/think.png') }}" alt="About TBC" class=" w-full">
        </div>

        <!-- Text Content -->
        <div class="md:w-1/2 md:pl-16 " style="font-family: 'Poppins', sans-serif;">
            <h2 class="text-4xl font-bold text-black mb-6">About TBC Screening</h2>
            <p class="text-gray-600 text-lg mb-4 font-semibold">
                Tuberculosis (TBC) remains a major health challenge. Early detection is key to preventing serious consequences and spreading the infection.
            </p>
            <p class="text-gray-600 text-lg mb-6 font-semibold">
                Our TBC Screening tool helps you easily identify symptoms and encourages early action to seek professional diagnosis and treatment.
            </p>

            <!-- Button -->
            <div class="relative group inline-block">
                <button class="bg-[#a0f0c5] text-black font-bold py-3 px-8 border-2 border-black relative z-10">
                    Learn More
                </button>
                <div class="absolute top-1 left-1 bg-black w-full h-full z-0 transition-all duration-300 group-hover:top-0 group-hover:left-0 rounded"></div>
            </div>
        </div>
    </div>
</section>

<section id="why" class="bg-[#a0f0c5] min-h-screen pt-60 px-8 border-b-4 border-black">
    <div class="max-w-6xl mx-auto text-center" style="font-family: 'Poppins', sans-serif;">
        <h2 class="text-4xl font-bold text-black mb-12">Why Early Screening?</h2>
        <div class="flex flex-col md:flex-row justify-center items-stretch gap-8">
            <!-- Card 1 -->
            <div class="relative">
                <div class="absolute top-2 left-2 w-full h-full bg-[#f7c1d9] rounded-lg z-0"></div>
                <div class="relative bg-white border-2 border-black rounded-lg p-8 z-10">
                    <div class="mb-6">
                        <img src="{{ asset('img/spread.png') }}" alt="Prevent Spread" class="mx-auto w-14 h-14 scale-160">
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-black">Prevent Spread</h3>
                    <p class="text-gray-600">
                        Early detection stops TBC from spreading to others.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="relative">
                <div class="absolute top-2 left-2 w-full h-full bg-[#f7c1d9] rounded-lg z-0"></div>
                <div class="relative bg-white border-2 border-black rounded-lg p-8 z-10">
                    <div class="mb-6">
                        <img src="{{ asset('img/treat.png') }}" alt="Early Treatment" class="mx-auto w-14 h-14 scale-150">
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-black">Early Treatment</h3>
                    <p class="text-gray-600">
                        Early action boosts recovery chances and saves lives.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="relative">
                <div class="absolute top-2 left-2 w-full h-full bg-[#f7c1d9] rounded-lg z-0"></div>
                <div class="relative bg-white border-2 border-black rounded-lg p-8 z-10">
                    <div class="mb-6">
                        <img src="{{ asset('img/protect.png') }}" alt="Protect Loved Ones" class="mx-auto w-14 h-14 scale-160">
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-black">Protect Loved Ones</h3>
                    <p class="text-gray-600">
                        Screening protects your family and community members.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="how" class="bg-white min-h-screen pt-60 px-8 border-b-4 border-black">
    <div class="max-w-6xl mx-auto text-center" style="font-family: 'Poppins', sans-serif;">
        <h2 class="text-4xl font-bold text-black mb-6">How It Works</h2>
        <p class="text-gray-600 text-lg mb-12">
            We've made screening simple, fast, and accessible for everyone.
        </p>
        <div class="flex flex-col md:flex-row items-center justify-center gap-12">
            <!-- Step 1 -->
            <div class="flex flex-col items-center">
                <div class="bg-[#a0f0c5] w-20 h-20 flex items-center justify-center rounded-full text-2xl font-bold border-2 border-black mb-4">
                    1
                </div>
                <h4 class="text-xl font-bold mb-2 text-black">Answer Questions</h4>
                <p class="text-gray-600">
                    Complete a quick questionnaire about your symptoms.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center">
                <div class="bg-[#f7c1d9] w-20 h-20 flex items-center justify-center rounded-full text-2xl font-bold border-2 border-black mb-4">
                    2
                </div>
                <h4 class="text-xl font-bold mb-2 text-black">Get Results</h4>
                <p class="text-gray-600">
                    Instantly receive feedback on your risk level.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center">
                <div class="bg-[#a0f0c5] w-20 h-20 flex items-center justify-center rounded-full text-2xl font-bold border-2 border-black mb-4">
                    3
                </div>
                <h4 class="text-xl font-bold mb-2 text-black">Next Steps</h4>
                <p class="text-gray-600">
                    Learn what to do next based on your result.
                </p>
            </div>
        </div>
    </div>
</section>



<style>
    .highlight-green {
        position: relative;
        z-index: 0;
    }
    .highlight-green::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        height: 0.6em;
        background-color: #a0f0c5; /* light green stabilo */
        z-index: -1;
        border-radius: 4px;
    }

    .highlight-pink {
        position: relative;
        z-index: 0;
    }
    .highlight-pink::before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        height: 0.6em;
        background-color: #f7c1d9; /* picked from your pink image */
        z-index: -1;
        border-radius: 4px;
    }
</style>
@endsection
