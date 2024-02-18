@extends('admin.layouts.app')
@section('content')
    @include('admin.components.category.categoryList')
    @include('admin.components.category.categoryCreate')
    @include('admin.components.category.categoryDelete')
    @include('admin.components.category.categoryUpdate')
@endsection
