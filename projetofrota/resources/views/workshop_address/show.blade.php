<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">







                    <table class="table">
                        <thead>
                          <tr>
                          
                             
                            
                            <th scope="col">id</th>
                            <th scope="col">id do Usuario</th>
                            <th scope="col">nome do usario</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th> 

                          </tr>
                        </thead>
                        <tbody>

                           
                                @foreach ( $customers as $customer )
                                    
                                @php
                                    $user= $customer->find($customer->id)->user;
                                @endphp
                                <tr>
                                <th scope="row">{{$customer->id}}</th>
                                <th scope="row">{{$customer->user_id}}</th>
                                <th scope="row">{{$user->name}}</th>
                                <th scope="row">{{$customer->name}}</th>
                                <th scope="row">{{$customer->email}}</th>
                                <th scope="row">
                            </tr>
                                  

                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </x-app-layout>
