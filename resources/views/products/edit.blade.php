@extends('layout.app')

@section('title', 'Edit Product')
@section('header', 'Edit Product')

@section('content')
    <form method="POST" action="{{ route('product.update', $product) }}" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" required
               class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>
    <div>
        <label for="stock" class="block text-sm font-medium text-gray-700">Product Stock</label>
        <input type="text" id="stock" name="stock" value="{{ $product->stock }}" required
               class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>

   
    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Product Description</label>
        <input type="text" id="description" name="description" value="{{ $product->description }}" required
               class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>


    <div>
        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
        <input type="number" id="price" name="price" step="0.01" value="{{ $product->price }}" required
               class="mt-1 block w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
    </div>


    <div class="flex justify-end">
        <button type="submit" 
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-md shadow-md transition">
            Update Product
        </button>
    </div>
</form>

@endsection