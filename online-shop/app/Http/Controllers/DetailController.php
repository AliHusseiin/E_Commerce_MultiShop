<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DetailController extends Controller
{
    //
    function index($id=9)
    {
        $product = Product::findOrFail($id);
        $products = Product::all();
        $reviews = $reviews = Review::where('product_id', $id)->with('user')->get();
        
        
        return view('details')->with(['products'=>$products,'product'=>$product,'reviews'=>$reviews]);
    }
    function leaveAreview(Request $request, $id=9)
    {
        $review = new Review;
        $review['user_id'] = Auth::user()->id;
        $review['product_id'] = $id;
        $review['rating'] = 4;
        $review->fill($request->post());
        $review->save();
        
        return Redirect()->back()->with('done', 'Done:Thank you for your Review');
    }
    
}
