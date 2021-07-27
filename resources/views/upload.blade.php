@extends('layouts.app')

@section('content')

<div class="bg-white p-4 w-11/12 lg:w-2/3 mx-auto">
    <h2 class="text-center text-2xl my-4">Upload your dog!</h2>
    <form class="flex flex-col items-center p-2" action="/pictures" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center">
            <label class="mr-2" for="name">Name: </label>
            <input class="border p-2" type="text" id="name" name="name">
        </div>
        <div class="bg-gray-200 p-4 mt-4 w-full flex flex-col items-center">
            <input class="my-4 hidden" type="file" id="image-selection" name="image">
            <label class="my-4 bg-blue-500 hover:bg-blue-700 cursor-pointer text-white font-bold py-2 px-4 rounded" for="image-selection">Select image</label>
            <span>
                <strong>Chosen file:</strong>
                <span id="file-path">None</span>
            </span>
        </div>
        <input type="submit" value="Upload" class="m-4 bg-blue-500 hover:bg-blue-700 cursor-pointer text-white font-bold py-2 px-4 rounded">
    </form>
</div>

<script>
    const fileInputButton = document.getElementById('image-selection');
    const selectedFile = document.getElementById('file-path');
    fileInputButton.addEventListener('change', (e) => {
        selectedFile.textContent = e.target.files[0].name;
    });
</script>

@endsection