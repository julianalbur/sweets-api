<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SweetsApiController extends Controller
{ 
    


    public function index()
    {
        return response()->json($this->productsArr());
    }
    public function productsArr(){
        return array(
	array('id' => 1, 'title' => 'Fudge', 'link' => '95_2542284'),
	array('id' => 2, 'title' => 'Sugar Cookies', 'link' => '167_2835774'),
	array('id' => 3, 'title' => 'Chocolate Angelfood Cupcakes', 'link' => '430_3150132'),
	array('id' => 4, 'title' => 'Peanut Brittle', 'link' => '700_3473780'),
	array('id' => 5, 'title' => 'Toasted Marshmallows', 'link' => '167_2835774'),
	array('id' => 6, 'title' => 'Fruit Salad', 'link' => '167_2835774'),
	array('id' => 7, 'title' => 'Cheesecake', 'link' => '430_3151480'),
	array('id' => 8, 'title' => 'Glazed Doughnut', 'link' => '167_2835774'),
	array('id' => 9, 'title' => 'Fortune Cookies', 'link' => '167_2835774'),
	array('id' => 10, 'title' => 'Devils Food Cake', 'link' => '430_3151480'),
	array('id' => 11, 'title' => 'Peanut Butter Cups', 'link' => '326_2841738'),
	array('id' => 12, 'title' => 'Crispy Rice Treats', 'link' => '326_2841738'),
	array('id' => 13, 'title' => 'Cherry Pie', 'link' => '430_3151480'),
	array('id' => 14, 'title' => 'Apple Turnover', 'link' => '430_3151480'),
	array('id' => 15, 'title' => 'Napoleon', 'link' => '430_3151480'),
	array('id' => 16, 'title' => 'Chocolate Chip Cookies', 'link' => '326_2841738'),
	array('id' => 17, 'title' => 'Chocolate Soufflé', 'link' => '430_3150132'),
	array('id' => 18, 'title' => 'Walnut Brownies', 'link' => '700_3473780'),
	array('id' => 19, 'title' => 'Ambrosia Salad', 'link' => '167_2835774'),
	array('id' => 20, 'title' => 'Peach Cobbler', 'link' => '430_3151480'),
	array('id' => 21, 'title' => 'Chocolate Eclair', 'link' => '430_3150132'),
	array('id' => 22, 'title' => 'Chocolate Toaster Tarts', 'link' => '95_2542284'),
	array('id' => 23, 'title' => 'Candied Ginger', 'link' => '700_3473780'),
	array('id' => 24, 'title' => 'Spice Cake', 'link' => '430_3151480'),
	array('id' => 25, 'title' => 'Tapioca Pudding', 'link' => '430_3150132'),
	array('id' => 26, 'title' => 'Banana Pudding', 'link' => '430_3150132'),
	array('id' => 27, 'title' => 'Vanilla Cream Pie   ', 'link' => '430_3151480'),
	array('id' => 28, 'title' => 'Peanut Butter Cookies', 'link' => '95_2542284'),
	array('id' => 29, 'title' => 'Oatmeal Raisin Cookies', 'link' => '95_2542284'),
	array('id' => 30, 'title' => 'Chocolate Mousse', 'link' => '430_3150132'),
	array('id' => 31, 'title' => 'Baklava', 'link' => '700_3473780'),
	array('id' => 32, 'title' => 'Chocolate Fondue', 'link' => '430_3150132'),
	array('id' => 33, 'title' => 'Strawberry Shortcake', 'link' => '185_2577502'),
	array('id' => 34, 'title' => 'Apple Pie a la Mode', 'link' => '167_2835774'),
	array('id' => 35, 'title' => 'Neapolitan Ice Cream', 'link' => '185_2577502'),
	array('id' => 36, 'title' => 'Cinnamon Roll', 'link' => '185_2577502'),
	array('id' => 37, 'title' => 'Gingerbread Cookies', 'link' => '430_3151480'),
	array('id' => 38, 'title' => 'Gingerbread Dude', 'link' => '430_3151480'),
	array('id' => 39, 'title' => 'Bread Pudding   ', 'link' => '430_3151480'),
	array('id' => 40, 'title' => 'Coconut Custard Pie', 'link' => '430_3151480'),
	array('id' => 41, 'title' => 'Coconut Macaroon', 'link' => '326_2841738'),
	array('id' => 42, 'title' => 'Ice Cream Cone', 'link' => '700_3473780'),
	array('id' => 43, 'title' => 'Mint Chocolate Milk Shake', 'link' => '700_3473780'),
	array('id' => 44, 'title' => 'Pecan Pie', 'link' => '185_2577502'),
	array('id' => 45, 'title' => 'Smores', 'link' => '167_2835774'),
	array('id' => 46, 'title' => 'Black Forest Cake', 'link' => '167_2835774'),
	array('id' => 47, 'title' => 'Fruit Cake', 'link' => '326_2841738'),
	array('id' => 48, 'title' => 'Pumpkin Nut Bread', 'link' => '430_3150132'),
	array('id' => 49, 'title' => 'Pumpkin Pie', 'link' => '700_3473780'),
	array('id' => 50, 'title' => 'Pumpkin Ice Cream', 'link' => '700_3473780'),
	array('id' => 51, 'title' => 'Rhubarb Crumble', 'link' => '430_3151480'),
	array('id' => 52, 'title' => 'Carrot Cake', 'link' => '167_2835774'),
	array('id' => 53, 'title' => 'Ice Cream Cake', 'link' => '700_3473780'),
	array('id' => 54, 'title' => 'Baked Alaska', 'link' => '430_3150132'),
	array('id' => 55, 'title' => 'Ice Cream Sandwich', 'link' => '326_2841738'),
	array('id' => 56, 'title' => 'Hot Fudge Sundae', 'link' => '430_3151480'),
	array('id' => 57, 'title' => 'Pecan Praline Ice Cream', 'link' => '95_2542284'),
	array('id' => 58, 'title' => 'Banana Split', 'link' => '167_2835774'),
	array('id' => 59, 'title' => 'Boston Cream Pie', 'link' => '430_3151480'),
	array('id' => 60, 'title' => 'Banana Bread', 'link' => '430_3151480'),
	array('id' => 61, 'title' => 'Chocolate Layer Cake', 'link' => '326_2841738'),
	array('id' => 62, 'title' => 'Shortbread Cookies', 'link' => '185_2577502'),
	array('id' => 63, 'title' => 'Oreo Cookies', 'link' => '326_2841738'),
	array('id' => 64, 'title' => 'Pop Tarts', 'link' => '430_3151480'),
);

        
    }

    public function show($id)
    {
        $products = $this->productsArr();
        if ($id >= sizeof($products)){
            $id =sizeof ($products) -1;
        }
        return response()->json( $products[$id-1] );
    }
}