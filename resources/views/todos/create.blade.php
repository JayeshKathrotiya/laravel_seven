@extends('todos.layout')

@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">What next you need To-Do</h1>
        <a href="{{ route('todo.index') }}" class="mx-5 text-gray-400 rounded cursor-pointer text-white py-2"><span
                class="fas fa-arrow-left"></span></a>
    </div>
    <x-alert />
    <form action="{{ route('todo.store') }}" method="post" class="py-5 ">
        @csrf
        <div class="py-1">
            <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title"/>
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 rounded border" placeholder="Description" cols="22" rows="3"></textarea>
        </div>
        <div class="py-1">
            <input type="submit" value="Create" class="p-2 border rounded" />
        </div>
    </form>

@endsection
