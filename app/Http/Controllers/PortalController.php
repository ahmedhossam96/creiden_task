<?php

namespace App\Http\Controllers;

use App\Models\Item;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index()
    {
   
  $items =  Item::all();

  return $items;
 
  //return view('portal', compact(['items']));
  
    }


    

 
    public function store(Request $request)
    {
       
      
        $item = new Issue();
        $item->name =  $request->date;
        
        $item->price =  $request->status;
        $item->save(); 


    
 
      // return view('portal');

    }

    

    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);
        $item->update($request->all());

        return $item;

       // return view('portal', compact(['item']));

       
    }

          

    public function delete(Request $request, $id)
    {
        
        $item = Item::findOrFail($id);
        $item->delete();

        $item =  Item::all();

        return $item;


      //  return view('portal', compact(['item']));


    }
}
