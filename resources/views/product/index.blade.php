<x-layout>
    <h2>Products</h2>
    <a href="{{route('product.create')}}">CREATE A NEW PRODUCT</a>
    <table>
        <thead>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

            @foreach ($products as $product)
                <tbody>
                    <td> {{$product->name}} </td>
                    <td> {{$product->price}} </td>
                    <td> {{$product->qty}} </td>
                    <td> {{$product->description}} </td>
                    <td><a href="{{ route('product.edit', ['id' => $product]) }}">Edit</a></td>
                    <td>
                        <form action="{{ route('product.delete', ['id' => $product]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tbody>
            @endforeach
    </table>
</x-layout>
