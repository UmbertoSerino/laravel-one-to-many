@extends('layouts.admin')

@section('head-title')
    @yield('create-or-edit')
@endsection

@section('main-content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            @if($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <strong>
                                {{ $error }}
                            </strong>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="@yield('route-for-create-or-edit')" method="POST">
                @csrf
                @yield('method-for-create-or-edit')
                <div class="mb-3 input-group">
                    <label for="title" class="input-group-text">Titolo:</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $project->title) }}">
                </div>
                <div class="mb-3 input-group">
                    <label for="date" class="input-group-text">Data:</label>
                    <input class="form-control" type="date" name="date" id="date" value="{{ old('date', $project->date) }}">
                </div>
                <div class="form-check form-switch">
                    <input type="hidden" name="complete" value="0">
                    <input class="form-check-input" type="checkbox" role="switch" id="complete" name="complete" value="1">
                    <label class="form-check-label" for="complete">Completato?</label>
                </div> 
                <div class="mb-3 input-group">
                    <label for="description" class="input-group-text">Descrizione:</label>
                    <textarea class="form-control"  name="description" id="description" cols="40" rows="10">{{ old('description',$project->description)  }}</textarea>
                </div>
                <div class="mb-3 input-group">
                    <button type="submit" class="btn btn-success d-line-block">Modifica</button>
                </div>  
            </form>
            <a href="{{ route('admin.projects.index') }}" class="m-2">
                <button class="btn btn-primary d-inline-block">Torna indietro</button>
            </a>
        </div>
    </div>
</div>
@endsection