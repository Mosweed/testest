<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Product
{

    public static $products =  [
        [

            'id' => 1,

            'name' => 'LEGO Harry Potter Hogwarts Castle',

            'category' => 'Building Toys',

            'price' => '399.99',

            'saleprice' => '359.99',

            'description' => 'Build a detailed Hogwarts Castle with LEGO pieces.',

            'ean' => '5702016616602',

            'image' => 'https://www.lego.com/cdn/cs/set/assets/blt51ff6bf5627b4161/71043_Prod.png?format=webply&fit=bounds&quality=75&width=800&height=800&dpr=1'

        ],

        [

            'id' => 2,

            'name' => 'Barbie Dreamhouse',

            'category' => 'Dolls & Accessories',

            'price' => '299.99',

            'saleprice' => '279.99',

            'description' => 'A three-story Barbie Dreamhouse with various rooms and accessories.',

            'ean' => '0887961531282',

            'image' => 'https://media.s-bol.com/R20EYjOzy4R/550x708.jpg'

        ],

        [

            'id' => 3,

            'name' => 'Hot Wheels Ultimate Garage',

            'category' => 'Vehicle Playsets',

            'price' => '139.99',

            'saleprice' => '129.99',

            'description' => 'A multi-level garage that stores over 100 cars and includes a shark attack feature.',

            'ean' => '0887961847915',

            'image' => 'https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTzdJL0STNhVcqod5d5wcNqr9G-jQ5aJvIXXqQzr5HzI1PWo80p-YnqXvjGpYFby1gNH2KhfJmfqQLK5JB-SPJmaZBAFSddKwWpQwSSNW1Z'

        ],

        [

            'id' => 4,

            'name' => 'Nerf N-Strike Elite Disruptor',

            'category' => 'Blaster Toys',

            'price' => '19.99',

            'saleprice' => '17.99',

            'description' => 'A quick-draw blaster with a rotating drum that holds 6 darts.',

            'ean' => '0630509520053',

            'image' => 'https://m.media-amazon.com/images/I/51n9FVTITKL.jpg'

        ],

        [

            'id' => 5,

            'name' => 'Fisher-Price Laugh & Learn Smart Stages Chair',

            'category' => 'Educational Toys',

            'price' => '49.99',

            'saleprice' => '44.99',

            'description' => 'An interactive chair that rewards babies with songs and phrases.',

            'ean' => '0887961424800',

            'image' => 'https://m.media-amazon.com/images/I/71NjwHQF1oL.jpg'

        ],

        [

            'id' => 6,

            'name' => 'Play-Doh Modeling Compound 10-Pack',

            'category' => 'Arts & Crafts',

            'price' => '7.99',

            'saleprice' => '6.99',

            'description' => 'A set of 10 colorful Play-Doh cans for creative play.',

            'ean' => '0653569967288',

            'image' => 'https://m.media-amazon.com/images/I/71gHRy76hwL.jpg'

        ],

        [

            'id' => 7,

            'name' => 'Crayola Inspiration Art Case',

            'category' => 'Arts & Crafts',

            'price' => '24.99',

            'saleprice' => '22.99',

            'description' => 'A portable art case with over 140 pieces, including crayons, markers, and colored pencils.',

            'ean' => '0071662069172',

            'image' => 'https://media.s-bol.com/JXNRVEJ0q5Ry/qYoXrp/550x449.jpg'

        ],

        [

            'id' => 8,

            'name' => 'Melissa & Doug Deluxe Standing Art Easel',

            'category' => 'Arts & Crafts',

            'price' => '89.99',

            'saleprice' => '79.99',

            'description' => 'A double-sided wooden art easel with chalkboard and dry-erase board.',

            'ean' => '000772128220',

            'image' => 'https://m.media-amazon.com/images/I/71KX1nxq7QL.jpg'

        ],

        [

            'id' => 9,

            'name' => 'VTech KidiZoom Camera Pix',

            'category' => 'Electronics for Kids',

            'price' => '39.99',

            'saleprice' => '34.99',

            'description' => 'A kid-friendly camera with photo and video capabilities.',

            'ean' => '3417761707004',

            'image' => 'https://www.vtechkids.com/assets/data/products/%7BFB692011-EFB7-4D37-9BC8-0B2822E11197%7D/images/193600_1Front_thumb_detail.jpg'

        ],

        [

            'id' => 10,

            'name' => 'LeapFrog Learning Friends 100 Words Book',

            'category' => 'Educational Toys',

            'price' => '19.99',

            'saleprice' => '17.99',

            'description' => 'An interactive book that teaches kids 100 words in both English and Spanish.',

            'ean' => '3417766015400',

            'image' => 'https://media.s-bol.com/gJLOyErxZVWZ/550x543.jpg'

        ]
    ];


    public static function all(): array
    {
        if (empty(self::$products)) {
            return [];
        }

        return self::$products;

    }

    public static function find(int $id): array
    {
        $product =  collect(self::$products)->firstWhere('id', $id);

        if (! $product) {
            abort(404);
        }

        return $product;
    }



    public static function getFive()
    {
        return collect(self::$products)->shuffle()->take(5)->toArray();
    }
}
