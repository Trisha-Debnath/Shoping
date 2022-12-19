<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
   public function admin(){
    return view('backend.page.admin');
   }
   //start admin create controller
   public function admin_create(){
   return view('backend.page.sql.admin');
   }




   public function seller(){
      return view('backend.page.category.seller.sellerList');
      }
   //end admin create controller

   public function product(){
      return view('backend.page.product');
     }

     public function category(){
      return view('backend.page.category.category');
     }

     public function Men(){
      return view('backend.page.category.Men');
     }

     public function woMen(){
      return view('backend.page.category.women');
     }

     public function kids(){
      return view('backend.page.category.kids');
     }

     public function food(){
      return view('backend.page.category.food');
     }

     public function drink(){
      return view('backend.page.category.drink');
     }

     public function cart(){
      return view('backend.page.cart');
     }
     public function details(){
      return view('backend.page.orderdetails');
     }

      public function order(){
      return view('backend.page.order');
     }

     public function payment(){
      return view('backend.page.payment');
     }

     public function supplier(){
      return view('backend.page.supplier');
     }
}
