<x-layout>
    <h2>Edit</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{route('product.update', ['id' => $product])}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">Product name</label> <br>
            <input type="text" name="name" value="{{$product->name}}">
        </div>
        <div>
            <label for="">Product Quantity</label> <br>
            <input type="text" name="qty" value="{{$product->qty}}">
        </div>
        <div>
            <label for="">Product description</label> <br>
            <input type="text" name="description" value="{{$product->description}}">
        </div>
        <div>
            <label for="">Product price</label> <br>
            <input type="text" name="price" value="{{$product->price}}">
        </div>
        <div>
            <input type="submit" value="Update" name="Update">
        </div>
    </form>
</x-layout>
