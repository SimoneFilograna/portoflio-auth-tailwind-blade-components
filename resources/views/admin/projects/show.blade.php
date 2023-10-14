<x-app-layout>
    <div class="container mx-auto pb-11">
        <div class="text-white mt-16 flex flex-col gap-5">
            <h1 class="text-5xl text-center">{{$project->title}}</h1>
            @if($project->technologies)
                @foreach ($project->technologies as $singleTech)
                    <span>{{$singleTech->name}}</span>     
                @endforeach
            @endif
            <div class="container-img-show w-2/4 self-center my-16">
                <img src="/img/login-img.png" class="w-100 object-cover" alt="">
            </div>
            <p>{{$project->description}}</p>
            <p>Type:{{$project->type->type}}</p>
            <p>GitHub: <a href="{{$project->link}}" class="text-fuchsia-500 ps-2">Link </a></p>
            <p>Release: {{$project->release->format("d-m-Y")}}</p>

            <div class="back-button-container max-h-9 text-center">
                <a href="{{route("admin.projects.index")}}" class="w-24 ">
                    <x-generic-button class="my-button">
                        HOME
                    </x-generic-button>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>