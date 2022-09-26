<?php

namespace App\Http\Livewire;

use App\Models\Variation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class ProductDropdown extends Component
{
    public $variations;

    public $selectedVariation;

    /**
     * @return mixed
     */
    public function getSelectedVariationModelProperty()
    {
        if (!$this->selectedVariation)
            return;

        return Variation::find($this->selectedVariation);
    }

    public function updatedSelectedVariation()
    {
//         dd($this->selectedVariationModel);
    }

    /**
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('livewire.product-dropdown');
    }
}
