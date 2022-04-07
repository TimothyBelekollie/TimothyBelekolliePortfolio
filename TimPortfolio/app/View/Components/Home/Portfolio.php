<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Boostrap', 'Css'],
                'title' => 'Full Blog Site, with catogories',
                'image' => url('/img/survey.png'),
                'github' => 'https://github.com/TimothyBelekollie/Full-Blog-Site'
            ],
            [
                'category' => ['Laravel', 'Bootstrap'],
                'title' => 'OpportunityApp',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'github' => 'https://github.com/TimothyBelekollie/OpportunityApp'
            ],
            [
                'category' => ['Laravel','Boostrap', 'Css'],
                'title' => 'YES website',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://github.com/TimothyBelekollie/YESProject'
            ],
            [
                'category' => ['Laravel','Boostrap'],
                'title' => 'Simple site to sell Land and House',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/TimothyBelekollie/BUy-and-Sell-House-and-Land'
            ],
            [
                'category' => ['Bootstrap'],
                'title' => 'Laravel Bootcamp Html clone',
                'image' => url('/img/yii2-youtube-clone.png'),
                'github' => 'https://github.com/TimothyBelekollie/Boostrap-Bootcamp-templatee'
            ],
            [
                'category' => ['Laravel', 'Alpinejs','Tailwinds'],
                'title' => 'My Portfolio',
                'image' => url('/img/yii2-vue-notes.png'),
                'github' =>  'https://github.com/TimothyBelekollie/TimothyBelekolliePortfolio'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
