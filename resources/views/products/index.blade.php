<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-red border-b border-red-200">
                    @foreach($products as $product)
                    <div>
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>${{ $product->price }}</td>
                            </tr>
                        </table>
                    </div>
                    @empty($products)
                    <div>
                        <p>No products found.</p>
                    </div>
                    @endempty
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</x-app-layout>