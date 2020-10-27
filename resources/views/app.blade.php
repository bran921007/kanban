
@extends('layouts.app')

@section('title', 'Dashboard')  
@section('content')          
<div class="py-4 " id="app">
<project
    title="Project 23"
    :cardlists="{{ $cardlists->toJson() ?? '' }}"
    >
</project>    
</div>    
@endsection

