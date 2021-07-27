@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-11/12 lg:w-2/3 mx-auto">
    <h2 class="text-center text-2xl">Upload your dog!</h2>
    <form class="flex flex-col items-center p-4" action="/pictures" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="border p-2" type="text" name="name" placeholder="Name...">
        <input class="m-4" type="file" name="image">
        <input type="submit" value="Upload" class="m-4 bg-blue-500 hover:bg-blue-700 cursor-pointer text-white font-bold py-2 px-4 rounded">
    </form>
</div>

@endsection