@extends('layout.app')

@section('title', 'Lista de Productos')

@section('header', 'Lista de Productos')

@section('content')
    <div class=" flex flex-col justify-center bg-white p-6 rounded-lg shadow-md items-center">
        
     <a href="{{ route('product.create') }}" 
       class="bg-green-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-md shadow-md transition items-center mb-5 w-40 text-center align-center">
        Create New Product
    </a>   
    <table class="min-w-full divide-y divide-gray-200">
        <tr>
            <th class="border border-gray-300 px-4 py-2 text-left" >ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Stock</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Description</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Price</th>
            <th class="border border-gray-300 px-4 py-2">Edit</th>
            <th class="border border-gray-300 px-4 py-2">Delete</th>
        </tr>
        @foreach($products as $product)
        <tr class="hover:bg-gray-50">
            <td class="border border-gray-300 px-4 py-2">{{ $product->id }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $product->name }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $product->stock }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $product->description }}</td>
            <td class="border border-gray-300 px-4 py-2">{{ $product->price }}</td>  
            <td class="border border-gray-300 px-4 py-2 text-center">
                <a class="text-blue-600 hover:underline" href="{{ route('product.edit', $product) }}">Edit</a>
            </td>  
            <td class="border border-gray-300 px-4 py-2 text-center">
                <form method="POST" action="{{ route('product.destroy', $product) }}">
                    @csrf
                    @method('DELETE')
                    <input class="text-red-600 hover:underline" type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection

