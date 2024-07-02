
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
                        <a class="btn btn-primary float-end " href="{{ route('categories.index') }}">{{ __('Voltar') }}</a>
       
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('categories.store') }}" class="mt-5 space-y-5">
                        @csrf
                        @method('PUT')

         
                        

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full form-control" :value="old('name', $categories->name)" autocomplete="name" required autofocus/>
                          
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" type="text" class=" form-control mt-1 block w-full" :value="old('description', $categories->description)" autocomplete="new-description" required> </textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        <div>
                           
                            <x-input-label for="is_active" :value="__('Is_active')" />
                            <input type="checkbox" name="is_active" class= "form-control" :value="old( 'is_active', $categories->is_active)== true ? 'checked'" />
                        </div>
                      



                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Upload') }}</x-primary-button>
                        </div>

            
                      

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>




</section>
