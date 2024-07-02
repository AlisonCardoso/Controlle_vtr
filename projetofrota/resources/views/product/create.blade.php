
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5" >

                @if (session('status'))
                <div class="alert alert-sucess">{{session('status')}} </div>
                @endif


                <div class="card">
                     <div class="card-header">
                        <a class="btn btn-primary float-end " href="{{ route('products.index') }}">{{ __('Voltar') }}</a>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    @if (isset($errors) && count($errors)>0) 
                    <div class="text-center mt-4 mb-4 p-2 alert-danger"> 
                        @foreach ($errors->all() as $erro)
                        {{$erro}}      
                        @endforeach
                    </div>
                    @endif
                 
                    <form name="formCad" id="formCad" method="post" action="{{ route('products.store') }}" class="mt-5 space-y-5">
                        @csrf

                        <div>
                            <x-input-label for="categoty_id" :value="__('Categoria')" />
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Selecione</option>
                                @foreach ($categories as $category )
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full form-control" :value="old('name')" autocomplete="name" required autofocus/>
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div>
                            <x-input-label for="image" :value="__('Image')" />
                            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full form-control" :value="old('image')" />
                                @error('image') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" type="text" class=" form-control mt-1 block w-full" :value="old('description')" autocomplete="new-description" > </textarea>
                                 <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Create') }}</x-primary-button>
                        </div>




                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>




</section>
