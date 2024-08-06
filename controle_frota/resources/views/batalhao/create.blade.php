@extends('layout.header')

@section('content')



<div class="bg-gray py-4">
    <h3>{{ $title }}</h3>
</div>
<div class="container">
    <div class="row d-flex justify-content-center mt-4 mb-lg-4">
        <div class="col md-10 d-flex justify-content-end">
            <a href="{{route('subcommands.index')}}" class="btn btn-dark "> voltar</a>
        </div>
    </div>

                         <form class="form1" method="post" action="@if (isset($edit->id)) {{ route('subcommands.update', ['id' => $edit->id]) }}@else{{ route('subcommands.store') }} @endif" enctype="multipart/form-data">
                                @csrf

                       <div 
                       class="card-header">
                         </div>
                        <div class="card-body row g-4">
                            <div class="col-md-4">

                            <label for="regional_command_id"class="form-label h5">COMANDO REGIONAL</label>
                            <select name="regional_command_id" id="regional_command_id" class="form-select">
                                <option value="">Selecione</option>
                                @foreach ($commands as $command )
                                <option value="{{$command->id}}">{{$command->name}}</option>
                                @endforeach
                            </select>
                            </div>
                            <div class="col-md-4">
                                <label for="sub_command_id" class="form-label h5">BATALHÃO DE POLICIA MILITAR</label>
                                    <select name="sub_command_id"  id="sub_command_id" class="form-select">
                                        <option selected>Selecione</option>
                                        @foreach ($sub_commands as $sub_command)
                                        <option value="{{$sub_command->id}}">{{$sub_command->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                       



        

                        <div class="card-body row g-4">
                            <div class="col-md-4">
                            <label for="sub_command_id" class="form-label h5">OPM</label>
                                <select name="sub_command_id"  id="sub_command_id" class="form-select">
                                    <option selected>Selecione</option>
                                    @foreach ($sub_commands as $sub_command)
                                    <option value="{{$sub_command->id}}">{{$sub_command->name}}</option>
                                    @endforeach
                                </select>
                            </div>



                        <div class="mb-4 justify-content-center">
                             <input type="submit" class="btn btn-primary" value="Cadastrar">
                            <a class="btn btn-danger" href="{{ route('subcommands.index') }}">Cancelar</a>
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

