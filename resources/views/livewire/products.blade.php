<div class="row-auto mb-6 px-8 mt-4">
    <div class="w-full">
        <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" wire:model="search" type="text" placeholder="Search somethings ............">
    </div>
</div>
<div class="flex sm:flex-wrap">
    @foreach ($products as $product)
    <div class="mb-6 px-4">
        <div class="max-w-sm rounded overflow-hidden shadow-lg mx-4 w-auto h-full" style="width: 12rem !important;">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                <p class="text-gray-700 text-base">
                    {{ $product->desc }}
                </p>
            </div>
            <div class="px-6 py-4">
                <button class="bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded">
                    Add to Cart
                </button>
            </div>
        </div>
    </div>
    @endforeach
    {{ $products->links() }}
</div>