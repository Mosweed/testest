<?php

namespace App\View\Components\products;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class productprice extends Component
{

    public $saleprice , $price;
    /**
     * Create a new component instance.
     */
    public function __construct(   $price , $saleprice = null)
    {
        $this->saleprice = $saleprice;
        $this->price = $price;
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.products.productprice');
    }
}