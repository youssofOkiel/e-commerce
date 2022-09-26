<div class="mt-3">
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <div class="text-white">

        {{ Str::title( $variations->first()?->type ) }}

    </div>

    <x-select class="w-full my-2 text-black" wire:model="selectedVariation">
        <option value=""> Choose</option>
        @foreach($variations as $variation)
            <option value="{{ $variation->id }}"> {{ $variation->title }} </option>
        @endforeach
    </x-select>

    {{ $this->selectedVariationModel }}

</div>
