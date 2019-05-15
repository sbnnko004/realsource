<?php

namespace App\Http\Controllers;

use App\Order;
use App\ProjectType;
use App\WritingLevel;
use App\Reference;
use App\SubjectArea;
use App\Subject;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Billow\Contracts\PaymentProcessor;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        if(Order::where('step','!=', 0)->count()==0){
            $order = new Order();
        }
        else{
            $order = Order::where('user_id',auth()->user()->id)->where('step','!=', 0)->first();
        }
        $order->user_id = auth()->user()->id;
        $order->save();
        $order = Order::find($order->id);
        return redirect(route('manage.order.complete-order', ['order' => $order->id])."?step=".$order->step);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentProcessor $payfast)
    {
        //
        $step = Input::get('step');
        $order = Order::where('user_id',auth()->user()->id)->where('step','!=', 0)->first();
        if($step>$order->step){
            return redirect(route('manage.order.complete-order', ['order' => $order->id])."?step=".$order->step);
        }
        if($step==1){
            $writing_level = WritingLevel::all();
            $project_type = ProjectType::all();
            return view('pages.main.ordering')->with(["step" => $step, "order"=>$order, "writing_level"=>$writing_level, "project_type"=>$project_type]);
        }
        elseif($step==2){
            $Reference = Reference::all();
            $subject_area = SubjectArea::all();
            $subject = Subject::all();
            return view('pages.main.ordering')->with(["step" => $step, "order"=>$order]);
        }
        elseif($step==3){
            // Build up payment Paramaters.
            $payfast->setBuyer(auth()->user()->name, auth()->user()->name, auth()->user()->email);
            $payfast->setAmount($order->cost);
            $payfast->setItem($order->project_type, $order->project_title);
            $payfast->setMerchantReference($order->id);
            return view('pages.main.ordering')->with(["step" => $step, "order"=>$order, "payfast" => $payfast]);
        }
        
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $order = Order::where('user_id',auth()->user()->id)->where('step','!=', 0)->first();
        $message = json_decode($request->input('message'));
        $step = $request->input('step');
        if($step==1){
            //return 1;
            
            //$order->step=$order->step + 1;
            if($order->step==$step){
                $order->step=$step + 1;
            }
            $order->line_spacing=$message->line_spacing;
            $order->page_count=$message->page_count;
            $order->project_purpose=$message->project_purpose;
            $order->project_type=$message->project_type;
            $order->type_of_writing=$message->type_of_writing;
            $order->writer_preference=$message->writer_preference;
            $order->writing_level=$message->writing_level;
            if($order->writer_preference==2){
                $order->writer_by_order_id=$message->writer_by_order_id;
            }
            $order->save();
            $res = [
                "success" => "true",
            ];
            return json_encode($res);
        }
        if($step==2){
            
            if($order->step==$step){
                $order->step=$step + 1;
            }
            $order->deadline_date=$message->deadline_date;
            $order->deadline_time=$message->deadline_time;
            $order->formating=$message->formating;
            $order->number_of_sources=$message->number_of_sources;
            $order->project_specs=$message->project_specs;
            $order->project_title=$message->project_title;
            $order->subject=$message->subject;
            $order->subject_area=$message->subject_area;
            $order->upload_later=$message->upload_later;
            
           
            $order->save();
            $res = [
                "success" => "true",
            ];
            return json_encode($res);
            
        }
        
        return 'done';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function confirmPayment(PaymentProcessor $payfast)
    {
        // Eloqunet example.  
        $order = Order::where('user_id',auth()->user()->id)->where('step','==', 3)->first();

    
        // Build up payment Paramaters.
        $payfast->setBuyer(auth()->user()->name, auth()->user()->name, auth()->user()->email);
        $payfast->setAmount($order->cost);
        $payfast->setItem($order->project_type, $order->project_title);
        $payfast->setMerchantReference($order->id);
    
        // Return the payment form.
        return $payfast->paymentForm(false);
    }
}
