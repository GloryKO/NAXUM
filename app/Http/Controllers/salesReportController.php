<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
//use App\country;

class salesReportController extends Controller
{
    public $total;
    public $a;
    public $price;
     public function index()
    {
       //$countries = Country::all()->toArray();
       $users = DB::table('orders')->paginate(5);
    //    $users = DB::select('select * from orders');
       return view('country.index', ['countries' => $users]);
    // return view('index')->with($countries);
    }
    
    public static function getOrderTotal($id)
    {
        # code...
        $total = 0;
        $qty = 0;
        $a = 0;
        $price = 0;
        $order_item = DB::select('select * from order_items where order_id = ?',[$id]);
        foreach($order_item as $row1)
        {
            $qty = $row1->qantity;
            $p_id = $row1->product_id;
            $price;
            $product = DB::select('select * from products where id = ?',[$p_id]);
            foreach ($product as $row) {
                # code...
                $price = $row->price;

            }
            $total += $qty * $price;
        }
        return $total;
    }

    public static function getPurchaser($id)
    {
        # code...
        $user = DB::select('select * from users where id = ?',[$id]);
        foreach ($user as $row) {
            # code...
            return $row;

        }
    }

    public static function getDistributor($id)
    {
        # code...
        $dist = DB::select('select * from users where id = ?',[$id]);
        foreach ($dist as $row) {
            # code...
            if (DB::table('user_category')->where('user_id',$id)->where('category_id', 1)->exists()) {
                // ...
                return $row->first_name." ".$row->last_name;
            }else{
                return " ";
            }
        }
    }

    public static function getTotalRefer($id)
    {
        # code...
        $total =0;
        $dist = DB::select('select * from users where referred_by = ?',[$id]);
        foreach ($dist as $row) {
            # code...
            if (DB::table('user_category')->where('user_id',$row->id)->where('category_id', 1)->exists()) {
                // ...
                $total+=1;
            }else{
                // return " ";
            }
        }
        return $total;
    }

    public static function getItem($id)
    {
        # code...
        $items = DB::select('select * from order_items where order_id = ?', [$id]);
        return $items;
    }
    public static function getItemDetail($id)
    {
        # code...
        $product = DB::select('select * from products where id = ?', [$id]);
        foreach ($product as $row) {
            # code...
            return $row;

        }
    }

    
   public function create()
    {
        return view('country.create');
    }
    public function search(Request $request)
    {

         $search = $request->get('search');
         if($search != ''){
         $countries = Country::where('country_name','like', '%' .$search. '%')->paginate(2);
         $countries->appends(array('search'=> Input::get('search'),));
         if(count($countries )>0){
            return view('index',compact($countries));
         }
         return back()->with('error','No results Found');
     }
 }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'country_name'    =>  'required',
        // ]);
        // $country = new Country([
        //     'country_name'    =>  $request->get('country_name')
        // ]);
        // $country->save();
        // return redirect()->route('country.create')->with('success', 'Data Added');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
    //     $country = Country::where('country_id',$id)->first();
    //    return view('country.edit', compact('country'));
    return "editing";
    }
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'country_name'    =>  'required',
        // ]);
        //  $data = array(
        //             'country_name' => $request->country_name
        //         );
        //     Country::where('country_id', $id)->update($data);
        
        // return redirect()->route('country.index')->with('success', 'Data Updated');
        return "updating";
    }
    public function destroy($id)
    {
        // $country = Country::where('country_id', $id);
        // $country->delete();
        // return redirect()->route('country.index')->with('success', 'Data Deleted');
        return "deleting";

    }
}