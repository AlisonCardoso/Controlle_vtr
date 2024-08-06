@extends('layout.header')

@section('content')



<div class="bg-gray py-4">
    <h3>{{ $title }}</h3>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4 mb-lg-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('companies.index')}}" class="btn btn-dark "> voltar</a>
        </div>
    </div>

                         <form class="form1" method="post" action="@if (isset($edit->id)) {{ route('companies.update', ['id' => $edit->id]) }}@else{{ route('companies.store') }} @endif" enctype="multipart/form-data">
                                @csrf

                       <div
                       class="card-header">
                         </div>
                        <div class="card-body row g-4">
                            <div class="col-md-4">

                            <label for="regional_command_id"class="form-label h5">COMANDO REGIONAL</label>
                            <select name="regional_command_id" id="regional_command_id" class="form-select select2">
                                <option value="">Selecione</option>
                                @foreach ($commands as $command )
                                <option value="{{$command->id}}">{{$command->name}}</option>
                                @endforeach
                            </select>

                            </div>
                            <div class="col-md-4">
                                <label for="sub_command_id" class="form-label h5">BATALHÃO DE POLICIA MILITAR</label>
                                    <select name="sub_command_id"  id="sub_command_id" class="form-select select2">
                                     <option value="">Selecione</option>
                        @forelse ($sub_commands as $sub_command)
                            <option value="{{ $sub_command->id }}"
                                {{ old('sub_command_id') == $sub_command->id ? 'selected' : '' }}> {{ $sub_command->name }}</option>

                        @empty
                            <option value="">Nenhum Batalhão cadastrado</option>
                        @endforelse
                    </select>
                            </div>
                            


                                    <div class="col-md-6">
                                <label for="name" class="form-label h5">Nome da Companhia</label>
                                <input value="@if (isset($edit->id)) {{ $edit->name }}@else {{ old('name') }} @endif" type="text" class="@error('name')is-invalid @enderror form-control form-control-lg " id="name"
                                 autocomplete="name" required  name="name">
                                @error('name')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>

                                <div class="col-md-2">
                                <label for="slug" class="form-label h5">Sigla da Companhia</label>
                                <input value="@if (isset($edit->id)) {{ $edit->slug }}@else {{ old('slug') }} @endif" type="text" class="@error('slug')is-invalid @enderror form-control form-control-lg " id="slug"
                                 autocomplete="slug" required  slug="slug">
                                @error('slug')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>


                            <div class="col-md-6">
                                <label for="pelotao" class="form-label h5">Nome Completo do Pelotão/Posto</label>
                                <input value="@if (isset($edit->id)) {{ $edit->pelotao }}@else {{ old('pelotao') }} @endif" type="text" class="@error('pelotao')is-invalid @enderror form-control form-control-lg " id="pelotao"
                                 autocomplete="pelotao" required  name="pelotao">
                                @error('pelotao')<p class="invalid-feedback text-danger">{{ $message}}</p> @enderror
                            </div>



                        </div>







                        <div class="mb-4 justify-content-center">
                             <input type="submit" class="btn btn-primary" value="Cadastrar">
                            <a class="btn btn-danger" href="{{ route('companies.index') }}">Cancelar</a>
                        </div>

                        </div>
                        </form>
                        @push('funcao')

                        @endpush
                        @push('js')
                        <script type="text/javascript">




                        let selectCrpm = document.getElement


                            function previewImage(input) {
                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $("#imagePreview").css('background-image', 'url(' + e.target.result + ')');
                                        $("#imagePreview").hide();
                                        $("#imagePreview").fadeIn(700);
                                    }
                                    reader.readAsDataURL(input.files[0]);
                                }
                            }
                        </script>
                        @endpush
                        <script>
                         /*  document.addEventListner('DOMContentLoaded', function(){

                                //receber os dados do HTML
                               var inputSelectState = document.querySelector('#state_id');
                               var inputSelectCity = document.querySelector('#city_id');

                               // aguardar o usuario selecionar o estado
                               inputSelectState.addEventListner('change', () =>{
                                pesquisarCidade();
                               });
                               function pesquisarCidade(){
                                inputSelectCity.innerHTML = ' <option value="">Carregando...</option>';
                               }
                               var selectCities = "{{route('cities.index')}}"
                            })
                        */</script>

                </div>
            </div>
        </div>
    </div>

@endsection

