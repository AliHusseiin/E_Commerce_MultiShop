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
        $product = Review::getProduct($id);
        $products = Review::getProducts();
        $reviews = Review::getReviews($id);
        
        
        return view('details')->with(['products'=>$products,'product'=>$product,'reviews'=>$reviews]);
    }
    function leaveAreview(Request $request, $id=9)
    {
        Review::postReview($request, $id=9);
        
       
        
        return Redirect()->back()->with('done', 'Done:Thank you for your Review');
    }
    
}
