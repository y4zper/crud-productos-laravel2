@extends('layout.app')

@section('title', 'Create Product')
@section('header', 'Create a Product')

@section('content')
   <form method="POST" action="{{ route('product.store') }}" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
    @csrf
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
        <input type="text" id="name" name="name" required
               class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 
                      focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
    </div>


    <div>
        <label for="stock" class="block text-sm font-medium text-gray-700">Product Stock</label>
        <input type="text" id="stock" name="stock" required
               class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 
                      focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Product Description</label>
        <input type="text" id="description" name="description" required
               class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 
                      focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
    </div>

   
    <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
        <input type="number" id="price" name="price" step="0.01" required
               class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 
                      focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500">
    </div>

    
    <div class="flex justify-end">
        <button type="submit" 
                class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 
                       rounded-md shadow-md transition">
            Create Product
        </button>
    </div>
</form>

@endsection