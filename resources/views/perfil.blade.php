@extends('layouts.principal')

@section('contenido')

        <div style="background-color:white;" class="contenedorPrincipal">
            <div class="fotoPerfil">
                @if (Auth::user()->avatar == true)
                    <img src="/storage/{{Auth::user()->avatar}}" alt="">
                    @else
                    <img src="/img/sinfoto.png" alt="Sin foto">
                @endif
            </div>
            <div class="informacionPerfil">
                <div role="tabpanel">

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Datos del Usuario</a></li>
                        <li role="presentation"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Datos de Contacto</a></li>
                        <li role="presentation"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">Historial de Compra</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="seccion1">
                            <form action="/profile/datosUsuario" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6 col-lg-8">
                                        <div class="row">
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="name">Nombre:</label>
                                                <input class="form-control" type="text" value="{{$user->name}}" name="name">
                                                @if ($errors->name)
                                                <p class="text-danger small">{{$errors->first('name')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="surname">Apellido:</label>
                                                <input class="form-control" type="text" value="{{$user->surname}}" name="surname">
                                                @if ($errors->surname)
                                                <p class="text-danger small">{{$errors->first('surname')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="email">Email:</label>
                                                <input class="form-control" type="text" value="{{$user->email}}" name="email">
                                                @if ($errors->email)
                                                <p class="text-danger small">{{$errors->first('email')}}</p>
                                                @endif
                                            </div>
                                            <div class="col-sm-12 col-lg-6">
                                                <label class="col-form-label-sm" for="password">Contraseña:</label>
                                                <input class="form-control" type="text" value="{{$desencriptado}}" name="password">
                                                @if ($errors->password)
                                                <p class="text-danger small">{{$errors->first('password')}}</p>
                                                @endif
                                            </div>
                                            <div class="">
                                                
                                            </div>

                                        </div>
                                        <div class="row d-flex justify-content-center mt-3 botones">

                                        <a href="{{'/home'}}"><button class="btn btn-secondary m-2" type="button">Cerrar </button></a>
                                        <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                        </div>
                                        </div>
                                        <div class="row">

                                    </div>

                                </div>
                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="seccion2">
                            <form action="/profile/datosContacto" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{$user->id}}">

                                        <div class="row">
                                            <div class="col-11">
                                                <label class="col-form-label-sm" for="domicilio">Domicilio:</label>
                                                <input class="form-control" type="text" value="{{$user->domicilio}}" name="domicilio">
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <label class="col-form-label-sm" for="telefono">Telefono:</label>
                                                <input class="form-control" type="text" value="{{$user->telefono}}" name="telefono">
                                            </div>
                                            <div class="col-sm-12 col-md-4 col-lg-4">
                                                <label class="col-form-label-sm" for="celular">Celular:</label>
                                                <input class="form-control" type="text" value="{{$user->celular}}" name="celular">
                                            </div>

                                        </div>
                                        <div class="row d-flex justify-content-center mt-3">
                                            <button class="btn btn-secondary m-2" type="button">Cancelar</button>
                                            <button class="btn btn-primary m-2" type="submit">Aceptar</button>
                                        </div>



                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="seccion3">
                            <h3>Historial de compra</h3>
                        </div>
                    </div>

                </div>


                </div>

            </div>





        @endsection
