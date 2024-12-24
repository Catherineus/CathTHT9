<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [

        ['id' => 1, 'name' => 'Red Lipstick', 'category' => 'lipstick', 'price' => 150000, 'description' => 'Bold red lipstick for any occasion.', 'image' => '/images/lipstick1.jpeg'],
        ['id' => 2, 'name' => 'Pink Lipstick', 'category' => 'lipstick', 'price' => 140000, 'description' => 'Soft pink lipstick for a natural look.', 'image' => '/images/lipstick2.jpeg'],
        ['id' => 3, 'name' => 'Matte Nude Lipstick', 'category' => 'lipstick', 'price' => 160000, 'description' => 'Classic nude lipstick with a matte finish.', 'image' => '/images/lipstick3.jpeg'],
        ['id' => 4, 'name' => 'Berry Lipstick', 'category' => 'lipstick', 'price' => 155000, 'description' => 'Rich berry shade for a bold look.', 'image' => '/images/lipstick4.jpeg'],
        ['id' => 5, 'name' => 'Coral Lipstick', 'category' => 'lipstick', 'price' => 145000, 'description' => 'Bright coral lipstick for summer vibes.', 'image' => '/images/lipstick5.png'],

        ['id' => 6, 'name' => 'Matte Cushion', 'category' => 'cushion', 'price' => 200000, 'description' => 'Lightweight matte cushion for flawless skin.', 'image' => '/images/cushion1.jpg'],
        ['id' => 7, 'name' => 'Glowy Cushion', 'category' => 'cushion', 'price' => 210000, 'description' => 'Glowy cushion for radiant skin.', 'image' => '/images/cushion1.jpg'],
        ['id' => 8, 'name' => 'Longwear Cushion', 'category' => 'cushion', 'price' => 220000, 'description' => 'Long-lasting cushion for busy days.', 'image' => '/images/cushion1.jpg'],
        ['id' => 9, 'name' => 'Hydrating Cushion', 'category' => 'cushion', 'price' => 230000, 'description' => 'Cushion with extra hydration.', 'image' => '/images/cushion1.jpg'],
        ['id' => 10, 'name' => 'Brightening Cushion', 'category' => 'cushion', 'price' => 240000, 'description' => 'Brightening cushion for even skin tone.', 'image' => '/images/cushion1.jpg'],
    
        ['id' => 11, 'name' => 'Peach Blush On', 'category' => 'blush_on', 'price' => 120000, 'description' => 'Natural peach blush for a fresh look.', 'image' => '/images/blush1.jpg'],
        ['id' => 12, 'name' => 'Pink Blush On', 'category' => 'blush_on', 'price' => 125000, 'description' => 'Soft pink blush for everyday wear.', 'image' => '/images/blush1.jpg'],
        ['id' => 13, 'name' => 'Berry Blush On', 'category' => 'blush_on', 'price' => 130000, 'description' => 'Deep berry blush for dramatic cheeks.', 'image' => '/images/blush1.jpg'],
        ['id' => 14, 'name' => 'Coral Blush On', 'category' => 'blush_on', 'price' => 135000, 'description' => 'Vibrant coral blush for summer.', 'image' => '/images/blush1.jpg'],
        ['id' => 15, 'name' => 'Shimmery Blush On', 'category' => 'blush_on', 'price' => 140000, 'description' => 'Blush with shimmer for glowing cheeks.', 'image' => '/images/blush1.jpg'],
    ];
    

    public function index()
    {
        return view('home', ['products' => $this->products]);
    }

    public function show($id)
    {
        $product = collect($this->products)->firstWhere('id', $id);
        return view('product_detail', ['product' => $product]);

        $product['stock'] = 50;
        $product['brand'] = 'Premium Makeup';
        $product['rating'] = 4.8;
    }

    public function lipstick()
    {
        $products = collect($this->products)->where('category', 'lipstick');
        return view('category', ['products' => $products, 'category' => 'Lipstick']);
    }

    public function cushion()
    {
        $products = collect($this->products)->where('category', 'cushion');
        return view('category', ['products' => $products, 'category' => 'Cushion']);
    }

    public function blushOn()
    {
        $products = collect($this->products)->where('category', 'blush_on');
        return view('category', ['products' => $products, 'category' => 'Blush On']);
    }
}
