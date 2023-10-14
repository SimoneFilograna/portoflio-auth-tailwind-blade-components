<x-app-layout>
    <div class="container mx-auto mt-20 flex justify-center">
        <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data">
            @csrf()
            
            <div class="input-container flex flex-col w-11/12">
    
            {{-- title --}}

            <div class="mb-3">
                <label for="title" class="text-white">Title</label>
                <input type="text" id="title" name="title" class="w-full" value="{{old("title")}}">
                @error("title")
                    <div class="">{{$message}}</div>
                @enderror
            </div>
            

            {{-- TYPE --}}

            <div class="mb-3">
                <label for="type_id" class="text-white">Type</label>
                <select name="type_id" class="w-full text-black" id="type_id">
                    {{-- ciclo sulla tabella types per aggiugnere le option --}}
                    @foreach($types as $type)
                        <option value="{{$type->id}}">{{$type->type}}</option>                                               
                    @endforeach
                </select>
                @error("type_id")
                    <div class="">{{$message}}</div>
                @enderror
            </div>

            {{-- TECHNOLOGIES --}}

            <div class="mb-3 mt-2">
                <label class="mb-3 text-white">Technologies</label>

                <div class="flex">
                    @foreach ($technologies as $singleTech)
                    <div class="">
                        <input class="" type="checkbox" value="{{$singleTech->id}}" id="flexCheckDefault" name="technologies[]">
                        <label class="text-white" for="flexCheckDefault">
                            {{$singleTech->name}}
                        </label>                            
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- link --}}

            <div class="mb-3">
                <label for="link" class="text-white">Link</label>
                <input type="text" id="link" name="link" class="w-full" value="{{old("title")}}">
                @error("link")
                    <div class="">{{$message}}</div>
                @enderror
            </div>

            {{-- description --}}

            <div class="mb-3">
                <label for="description" class="text-white">Description</label>
                <textarea  id="description" name="description" class="w-full">{{old("description")}}</textarea>
                @error("description")
                    <div class="">{{$message}}</div>
                @enderror
            </div>

            {{-- thumb --}}

            <div class="mb-3">
                <label for="thumb" class="text-white">Thumb</label>
                <input type="file" accept="image/* " id="thumb" name="thumb" class="w-full bg-white">
                @error("thumb")
                    <div class="">{{$message}}</div>
                @enderror
            </div>

            {{-- date --}}

            <div class="mb-3">
                <label for="date" class="text-white">Release</label>
                <input type="date" id="date" name="release"  class="w-full" value="{{old("release")}}">
                @error("release")
                    <div class="">{{$message}}</div>
                @enderror
            </div>

            {{-- submit button --}}
            <div class="text-center mt-5" >
                <x-generic-button type="submit" class="w-1/3 my-button">
                    SEND
                </x-generic-button>
                <a href="{{route("admin.projects.index")}}">
                    <x-generic-button class="w-1/3 my-button">
                        CANCEL
                    </x-generic-button>
                </a>
            </div>

            </div>
    </div>
</x-app-layout>