<x-guest-layout>  

    @slot('header')
    <div class="container mx-auto">  
        <div class="columns-2 flex justify-between items-center">

            <div class="">
                <img src="/img/logo.png" alt="" class="h-20">      
            </div>

            @if (Route::has('login'))
            <div class="z-10 flex items">
            @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-white">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-white">Log in</a>
        
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white">Register</a>
            @endif
            @endauth
            </div>
            @endif
        </div>             
    </div>  
    @endslot

        <div class="container mx-auto text-white mt-20">

            <div class="columns-2 flex justify-center gap-48 items-center">
                <div class="portfolio-text basis-3/6">
                    <div class="img-container w-64 rounded-full overflow-hidden relative">
                        <img src="/img/nc.jpg" class="w-full relative z-50 rounded-full p-2" alt="">
                    </div>
                    <h1 class="text-4xl mt-4 pb-3">Welcome to My portfolio</h1>
                    <p>Hello, I am Simone, a passionate web developer who has been immersed in the world of IT since the age of 15. Thanks to my curiosity, I have had the opportunity to delve into various programming languages, always striving to learn and preferring logic over memorization. There is no memory that can surpass a well-structured reasoning.</p>
                </div>
                <div class="righ-img">
                    <img src="/img/right-side.svg" alt="">
                </div>
            </div>
        </div>

        <div class="container mx-auto text-white project-example text-center mt-32">
            <h1 class="text-4xl mt-4 pb-3">EXPLORE MY PROJECTS</h1>
            <div class="columns-3 mt-14 flex gap-36 justify-center">

                @foreach ($projects as $project)
                    
                    <div class="project border border-pink-600 border-solid rounded-3xl px-11 py-8">
                        <img src="/img/logo.png" alt="">
                        <h5>{{$project->title}}</h5>
                        <p>{{$project->type->type}}</p>

                        <a href="{{route("admin.projects.show", $project->slug)}}">
                            <x-generic-button class="mt-3 my-button">
                                Details
                            </x-generic-button>
                        </a>
                    </div>

                @endforeach

            </div>
        </div>
    

</x-guest-layout>