@extends('layouts.app')

@section('title', 'Search')

@section('content')
<div class="hero bg-gray-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse pt-50">
        <img
            src="{{ asset('img/tbc.png') }}"
            class="max-w-sm rounded-lg scale-160 ml-50"
        />
        <div style="font-family: 'Poppins', sans-serif;">
            <h1 class="text-6xl font-bold mb-2 text-black">
                Early 
                <span class="relative inline-block">
                    <span class="highlight-green">Detection</span>
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
                    <button class="bg-[#a0f0c5] text-black font-bold py-4 px-8 border-2 border-black relative z-10">
                        Start Screening
                    </button>
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
</div>

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
