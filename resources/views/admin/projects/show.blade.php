<x-app-layout>
    <div class="container mx-auto pb-11">
        <div class="text-white mt-16 flex flex-col gap-5">
            <h1 class="text-5xl text-center">{{$project->title}}</h1>

            <div class="container-img-show w-2/4 self-center my-16">
                <img src="{{asset("/storage/". $project->thumb)}}" class="w-100 object-cover" alt="">
            </div>

            @if($project->technologies)
            <div class="div">
                @foreach ($project->technologies as $singleTech)
                    <span class="px-2 rounded-full" style="background-color: rgb({{$singleTech->color}})">{{$singleTech->name}}</span>     
                @endforeach
            </div>
            @endif

            <p>{{$project->description}}</p>
            <p>Type:{{$project->type->type}}</p>
            <p>GitHub: <a href="{{$project->link}}" class="text-fuchsia-500 ps-2">Link </a></p>
            <p>Release: {{$project->release->format("d-m-Y")}}</p>

            <div class="back-button-container max-h-9 flex justify-center gap-7">
                <div class="px-3">
                    <a href="{{route("admin.projects.index")}}" class="">
                        <x-generic-button class="my-button">
                            HOME
                        </x-generic-button>
                    </a>
                </div>
                <div class="px-3">
                    <a href="{{route("admin.projects.edit", $project->id)}}" class="">
                        <x-generic-button class="my-button">
                            EDIT
                        </x-generic-button>
                    </a>
                </div>
                <div class="px-3">
                    <form action="{{route("admin.projects.destroy", $project->slug)}}" method="POST">
                        @csrf
                        @method("DELETE")                  
                        <x-generic-button class="my-button">
                        DELETE
                        </x-generic-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>