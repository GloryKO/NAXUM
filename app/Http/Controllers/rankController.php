<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
//use App\country;

class rankController extends Controller
{
    public $total;
    public $a;
    public $price;
     public function index()
    {
       //$countries = Country::all()->toArray();
       $real_dist=[];
       $dist = DB::table('users')->paginate(30);
        foreach ($dist as $row) {
            # code...
            if (DB::table('user_category')->where('user_id',$row->id)->where('category_id', 1)->exists()) {
                // ...
                array_push($real_dist,$row);
            }else{
                // return " ";
            }
        }
       return view('country.rank', ['distributors' => $real_dist]);
    // return view('index')->with($countries);
    }

    public static function countSales($id)
    {
        # code...
        $total=0;
        $users = DB::table('users')->where('referred_by',$id);
        foreach ($users as $row1) {
            # code...
            // var_dump($row1);
            // $r_id = $row1->id;
            // $c_order=DB::select('select count(invoice_number) as total from orders where purchaser_id =?',[$r_id]);
            // return $c_order->total;
            return $total;
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