<div>
       
    <a href="{{ route('products.show', ['key' => $product['key']]) }}">{{ $product['name'] }}</a>
        <br>
        {{ $product['price'] }} €
</div>