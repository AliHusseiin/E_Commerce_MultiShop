<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Review extends Model
{
    use HasFactory;

    public static function getProduct($id=9)
    {
        $product = Product::findOrFail($id);
        return $product; 
    }
    public static function getProducts()
    {
        $products = Product::all();
        return $products; 
    }
      public static function getReviews($id=9)
    {
        $reviews = $reviews = Self::where('product_id', $id)->with('user')->get();
        return $reviews;
    }

      public static function postReview($request, $id=9)
    {
        $review = new Self;
        $review['user_id'] = Auth::user()->id;
        $review['product_id'] = $id;
        $review['rating'] = 3.5;
        $review->fill($request->post());
        $review->save();
         $productReview = Self::where('product_id', '=', $id)->get();
        $productTotalRating = $productReview->sum('rating');
        $product = Product::findOrFail($id);
        $product['rating_count'] = $product['rating_count']+1 ;
        $rating_count = $product['rating_count'];
        $product['rating'] =floor(($productTotalRating +$review['rating']*$rating_count)/$rating_count);
         // product->rating = 4*
        $product->save();

    }
   
   







    
    protected $guarded = [];
    function product()
    {
        return $this->belongsTo(Product::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}