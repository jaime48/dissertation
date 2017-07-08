<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;
use App\User;
use Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Notifications\Notifiable;
use App\Notifications\InvoicePaid;
//use App\Events\OrderShipped;
class testController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function store(Request $request, $id=''){
        $this->validate($request,[
            'name'       => 'required | max:3',
            'age'        => 'required | max:2',
            'start_date' => 'required|date|after:tomorrow'
        ]);
        return redirect('test');
    }

    public function ship()
    {
        $message = (new OrderShipped(123))

            ->onQueue('emails');

        //Mail::to('duyanguk@163.com')->queue($message);

        $when = Carbon\Carbon::now()->addMinutes(10);

        // Order shipment logic...
        Mail::to('duyanguk@163.com')->queue($message)->later($when, new OrderShipped(123));
        //event(new OrderShipped());
    }

    public function index()
    {
        echo $value = Cache::get('key','defaultKey');
    }

    public function showprofile(Request $request){
        //Log::emergency('show that:'.$request);
        print_r( $request->all()['id']);
    }

    public function fileSystem() {
        return Storage::allDirectories('./');
    }

    public function notification(){
        $user = new user();
        //$when = Carbon\Carbon::now()->addMinutes(10);
        //print_r($when);exit;
        $user->notify(new InvoicePaid());
        echo 123;
    }
}
