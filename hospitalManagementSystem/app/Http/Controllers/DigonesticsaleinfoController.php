<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Digonesticsaleinfo;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Investigation;
use App\Models\StoreTest;
use App\Models\Doctor;
use App\Models\Refer;
use Carbon\Carbon;


class DigonesticsaleinfoController extends Controller
{
    public function index()
    {
        $data1 = Investigation::all();
        $sum = Investigation::sum('price');

        $regnumber = 1;
        $storetest = StoreTest::where('regNum',$regnumber)->get();
        $sum2 = StoreTest::where('regNum',$regnumber)->sum('testprice');

        $doct = Doctor::all();
        $ref = Refer::all();
        return view('testSale', compact('data1','sum','storetest','sum2','doct','ref'));
    }

    public function store(Request $request)
    {
        $data1 = new DigonesticsaleinfoController();

        // default value assign
        $regnumber = 1;
        $dueSts = 0;
        $saleOfficer = 1;
        $saleDate = Carbon::now()->toDateString(); // Assigns only the date, no time        
        $dueCol = 0; 
        $dueDis = 0;
        $dueColDate = null;
        $dueColOfficer = 0;
        $retSts = 0; // 0 for no return & 1 for has return
        $retDate = null;

        // calculate some value
        $totalAmount = StoreTest::where('regNum',$regnumber)->sum('testprice');
        $recvAmount = $request->has('received') ? $request->get('received'):'';
        $dis = $request->has('discount') ? $request->get('discount'):'';
        
        $remAmount = $totalAmount - $recvAmount - $dis;

        if($totalAmount == $remAmount)
        {
            $dueSts = 0; // 0 for no due & 1 for has due
        }
        elseif($remAmount < 0)
        {
            $backAmount = $remAmount;
        }
        else
        {
            $dueSts = 1; // 0 for no due & 1 for has due
        }
                
        $data1->patientName = $request->has('name') ? $request->get('name'):'';
        $data1->dob = $request->has('dob') ? $request->get('dob'):'';
        $data1->gender = $request->has('gender') ? $request->get('gender'):'';
        $data1->phone = $request->has('phone') ? $request->get('phone'):'';
        $data1->address = $request->has('address') ? $request->get('address'):'';
        $data1->doctorid = $request->has('doctorid') ? $request->get('doctorid'):'';
        $data1->referid = $request->has('referid') ? $request->get('referid'):'';
        $data1->testSaleOfficerId = $saleOfficer;
        $data1->totalAmount = $totalAmount;
        $data1->discount = $request->has('discount') ? $request->get('discount'):'';
        $data1->received = $request->has('received') ? $request->get('received'):'';
        $data1->receivedreminAmount =  $backAmount;
        $data1->testsalteDate = $saleDate;
        $data1->dueStatus = $dueSts;
        $data1->dueCollection = $dueCol;
        $data1->dueDiscount = $dueDis;
        $data1->dueCollectDate = $dueColDate;
        $data1->dueCollectOfficerId = $dueColOfficer;
        $data1->testReturnStatus = $retSts;
        $data1->testReturnDate = $retDate;

        // dd($data1);
        
        $data1->save();
        return redirect()->back()->with('success', 'Test sale transection successfully!');
    }
}
