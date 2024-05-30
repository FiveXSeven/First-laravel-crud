<x-layout>
    <h2>Create</h2>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{route('product.store')}}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">Product name</label> <br>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Product Quantity</label> <br>
            <input type="text" name="qty">
        </div>
        <div>
            <label for="">Product description</label> <br>
            <input type="text" name="description">
        </div>
        <div>
            <label for="">Product price</label> <br>
            <input type="text" name="price">
        </div>
        <div>
            <input type="submit" value="Save new product" name="saveProduct">
        </div>
    </form>
</x-layout>
