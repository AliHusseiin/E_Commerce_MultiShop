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
        $review['rating'] = 2.5;
        $review->fill($request->post());
        $review->save();
        
        $productReview = Review::where('product_id', '=', $id)->get();
        $productTotalRating = $productReview->sum('rating');
        $product = Product::findOrFail($id);
        $product['rating_count'] = $product['rating_count']+1 ;
        $rating_count = $product['rating_count'];
        $product['rating'] =floor(($productTotalRating +$review['rating']*$rating_count)/$rating_count);
         // product->rating = 4*
        $product->save();
        
        return Redirect()->back()->with('done', 'Done:Thank you for your Review');
    }
    
}
