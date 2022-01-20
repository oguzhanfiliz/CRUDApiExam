<?php

namespace App\Http\Controllers;
use App\Models\CustomerOrders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CustomerOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CustomerOrders::where('customerID',Auth::user()->id)->where('shippingDate','>=',Carbon::now())->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
                'name' => 'required',
                'productID' => 'required',
                'quantity' => 'required',
                'address' => 'required',
                ]
        );
        $data = new CustomerOrders;
        $data->name = $request->input('name');
        $data->customerID = Auth::user()->id;
        $data->quantity = $request->input('quantity');
        $data->address = $request->input('address');
        $data->productID = $request->input('productID');
        $data->shippingDate =date('Y-m-d H:m:s',strtotime($request->input('shippingDate')));
        $data->save();
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CustomerOrders::where('customerID',Auth::user()->id)->where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $order = CustomerOrders::find($id);
        $date = Carbon::now();
        if($date<$order->shippingDate){
            $order->update($request->all());
            return $order;
        }else{
            return [
                'status'=>'error',
                'message'=>'Invalid Date'
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $temp = CustomerOrders::destroy($id);
        if($temp){
            return [
                "status"=> "succcess",
                "message" => "Deleted item id : $id"
            ];
        }else{
            return [
                'status' => "error",
                "message" => "Don't delete item id :  $id"
            ];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return CustomerOrders::where('name','like','%'.$name.'%')->where('customerID',Auth::user()->id)->where('shippingDate','>=',Carbon::now())->get();
    }
}
