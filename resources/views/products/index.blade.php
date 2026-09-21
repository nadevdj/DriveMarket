
<x-layouts.car>
  <div>
      @foreach($products as $product)
            
        <x-product :product="$product"></x-product>
      @endforeach

  </div>

</x-layouts.car>


