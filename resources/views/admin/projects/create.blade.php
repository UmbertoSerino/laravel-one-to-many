@extends('admin.projects.create-or-edit')



@section('route-for-create-or-edit')
    {{ route('admin.projects.store') }}
@endsection


@section('method-for-create-or-edit')
    @method('POST')
@endsection