@extends('front.layouts.frontMaster')
@section('content')
@include('front.partials.slideshow')
<div class="section-full cotizacion">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="sf-title">Sólo faltan algunos datos</h1>
            </div>
            <div class="w-100"></div>

            <div class="col-12 col-md-8">
                <form action="{{route('quotation.store')}}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="form-group col-12 col-lg-6">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" value="{{old('name')}}" id="name" class="form-control"
                                placeholder="Nombre">
                            @if ($errors->has('name'))
                            <div class="badge badge-danger">{{$errors->first('name')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="last_name">Apellido</label>
                            <input type="text" name="last_name" value="{{old('last_name')}}" id="last_name"
                                class="form-control" placeholder="Apellido">
                            @if ($errors->has('last_name'))
                            <div class="badge badge-danger">{{$errors->first('last_name')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="rut">Rut</label>
                            <input type="text" name="rut" value="{{old('rut')}}" id="rut" class="form-control"
                                placeholder="16358177-k">
                            @if ($errors->has('rut'))
                            <div class="badge badge-danger">{{$errors->first('rut')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="{{old('email')}}" id="email" class="form-control"
                                placeholder="usuario@email.com">
                            @if ($errors->has('email'))
                            <div class="badge badge-danger">{{$errors->first('email')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="phone">Télefono móvil</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">+569</span>
                                </div>
                                <input type="text" name="phone" value="{{old('phone')}}" id="phone" class="form-control"
                                    placeholder="86655779">
                            </div>
                            @if ($errors->has('phone'))
                            <div class="badge badge-danger">{{$errors->first('phone')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="bithdate">Fecha nacimiento</label>
                            <input type="date" name="birthdate" value="{{old('birthdate')}}" id="birthdate"
                                class="form-control" placeholder="Fecha de nacimiento">
                            @if ($errors->has('date'))
                            <div class="badge badge-danger">{{$errors->first('date')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="city">Ciudad</label>
                            <input type="text" name="city" value="{{old('city')}}" id="city" class="form-control"
                                placeholder="Ciudad">
                            @if ($errors->has('city'))
                            <div class="badge badge-danger">{{$errors->first('city')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="commune">Comuna</label>
                            <input type="text" name="commune" value="{{old('commune')}}" id="commune"
                                class="form-control" placeholder="Comuna">
                            @if ($errors->has('commune'))
                            <div class="badge badge-danger">{{$errors->first('commune')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="rent">Renta imponible</label>
                            <input type="text" name="rent" value="{{old('rent')}}" id="rent" class="form-control"
                                placeholder="500000">
                            @if ($errors->has('rent'))
                            <div class="badge badge-danger">{{$errors->first('rent')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="workertype_id">Tipo de trabajor</label>
                            <select name="workertype_id" id="workertype_id" class="form-control">
                                @foreach ($workertypes as $work)
                                <option value="{{$work->id}}" @if(old('workertype_id')==$work->id) selected
                                    @endif>{{$work->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('workertype_id'))
                            <div class="badge badge-danger">{{$errors->first('workertype_id')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="isapre_id">Isapre</label>
                            <select name="isapre_id" id="isapre_id" class="form-control">
                                @foreach ($isapres as $isa)
                                <option value="{{$isa->id}}" @if(old('isapre_id')==$isa->id) selected
                                    @endif>{{$isa->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('isapre_id'))
                            <div class="badge badge-danger">{{$errors->first('isapre_id')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12 col-lg-6">
                            <label for="familyburden_id">Número de cargas</label>
                            <select name="familyburden_id" id="familyburden_id" class="form-control">
                                @foreach ($familyburdens as $fam)
                                <option value="{{$fam->id}}" @if(old('familyburden_id')==$fam->id) selected
                                    @endif>{{$fam->number_burden}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('familyburden_id'))
                            <div class="badge badge-danger">{{$errors->first('familyburden_id')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12">
                            <label for="message">¿Tienes algo que comentar?</label>
                            <textarea class="form-control" name="message" id="message" rows="3"
                                placeholder="Mensaje opcional..">{{old('message')}}</textarea>
                            @if ($errors->has('message'))
                            <div class="badge badge-danger">{{$errors->first('message')}}</div>
                            @endif
                        </div>

                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Solicitar asesoría</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection