<x-layouts.car>
    {{ $product['name'] }}
    {{ $product['price'] }} €
    <div>
        <h3>autres voitures similiares</h3>
        @foreach($other_products as $other_product)
            <x-product :product="$other_product" />
        @endforeach
    </div>
</x-layouts.car>
  

  
