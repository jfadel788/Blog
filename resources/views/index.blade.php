@extends('layouts.app')
@section('content')


    {{-- HERRO --}}

    <div class="hero-bg-image flex flex-col items-center justify-center">

        <h1 class="text-gray-100 text-5xl uppercase font-bold pb-10 text-center">
            Welcome to my Blog
        </h1>

        <a href="/" class="bg-gray-100 text-gray-700 py-4 rounded-lg font-bold uppercase text-xl" >
            Start Reading
        </a>

    </div>

    {{-- How to be an expert  --}}

    <div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15">

        <div class="mx-2 md:mx-0">
            <img  class="sm:rounded-lg"src="https://picsum.photos/id/239/960/620" alt="">
        </div>


        <div class="flex flex-col items-left justify-center m-10 sm:m-0">
            <h2 class="font-bold text-gray-700 text-4xl uppercase">
                How to be an expert in 2023
            </h2>
            <p class="font-bold text-gray-600 text-xl pt-2"> you can find a list of all programing language here.</p>
            <p class="py-4 text-gray-500 text-sm leading-5 "> Get the same random image evry time based on a seed by adding to the start of the url .You may combine any of the option above. For example, to get a specifc image that is greyscale and blurred.</p>
            <a href="/" class="bg-gray-700 text-gray-100 py-4 px-4 rounded-lg font-bold uppercase text-l place-self-start"> Read More</a>
        </div>



    </div>

    {{-- Blog Categories --}}

    <div class="text-center p-15 bg-gray-700 text-gray-100" >
        <h2 class="text-2xl">Blog Categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            <div class="font-bold text-2xl py-2">UX Design thinking</div>
            <div class="font-bold text-2xl py-2">Programing language</div>
            <div class="font-bold text-2xl py-2">Graphic design</div>
            <div class="font-bold text-2xl py-2">Front-End development</div>
        </div>
    </div>

    {{-- Recent Posts --}}

    <div class="container mx-auto text-center py-15">
        <h2 class="font-bold text-5xl py-10">
            Recent Posts
        </h2>
        <p class="text-gray-400 leading-6 px">
            PHP is a general-purpose scripting language geared towards web development.[9] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.[10][11] The PHP reference implementation is now produced by the PHP Group.

        </p>

    </div>
    <div class="sm:grid grid-cols-2 w-4/5 mx-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class=" block m-auto pt-4 pb-15 w-4/5">
                <ul class="md:flex text-xs gap-2">
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-700 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-700 hover:text-yellow-100 transition duration-300"><a href="/">Programing</a></li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-700 hover:text-yellow-100 transition duration-300"><a href="/"></a>Languages</li>
                    <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-700 hover:text-yellow-100 transition duration-300"><a href="/"></a>Backend</li>
                </ul>
                <h3 class="text-l py-10 leading-6">
                    PHP is a general-purpose scripting language geared towards web development.[9] It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995.[10][11] The PHP reference implementation is now produced by the PHP Group.
                </h3>
                <a  class="bg-transparent border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block"href="/">Read More</a>

            </div>

        </div>
        <div class="flex">
            <img  class="object-cover"src="https://picsum.photos/id/242/960/620" alt="">
        </div>
    </div>

@endsection
