<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\Variation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductSelector extends Component
{
    public $product;

    public $initialVariation;

    public function mount()
    {
        $this->initialVariation = $this->product->variations->sortBy('order')->groupBy('type')->first();
    }

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.product-selector');
    }
}
