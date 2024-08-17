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
        $today = Carbon::now()->toDateString();
        $regnumber = Digonesticsaleinfo::count();
        $storetest = StoreTest::where('regNum',$regnumber)->get();
        $sum2 = StoreTest::where('regNum',$regnumber)->sum('testprice');

        // total income calculate
        $d1 = Digonesticsaleinfo::where('testsalteDate',$today)->sum('totalAmount');
        $d2 = Digonesticsaleinfo::where('testsalteDate',$today)->sum('discount');
        $d3 = Digonesticsaleinfo::where('testsalteDate',$today)->sum('received');
        $d4 = Digonesticsaleinfo::where('testsalteDate',$today)->sum('receivedreminAmount');
        $r1 = $d3+$d4;        
        $data2 = Digonesticsaleinfo::where('testsalteDate',$today)->get();
        $doct = Doctor::all();
        $ref = Refer::all();
        return view('testSale', compact('data1','sum','storetest','sum2','doct','ref','data2','d1','d2','d3','d4','r1'));
    }

    public function store(Request $request)
    {
        $data1 = new Digonesticsaleinfo();
        
        // default value assign
        $regnumber = Digonesticsaleinfo::count();
        $dueSts = 0;
        $backAmount = 0;
        $saleOfficer = 1;
        $saleDate = Carbon::now()->toDateString(); // Assigns only the date, no time        
        $dueCol = 0; 
        $dueDis = 0;
        $dueColDate = null;
        $dueColOfficer = 0;
        $retSts = 0; // 0 for no return & 1 for has return
        $retDate = null;

        // find some value
        $totalAmount = StoreTest::where('regNum',$regnumber)->sum('testprice');
        $recvAmount = $request->has('received') ? $request->get('received'):'';
        $dis = $request->has('discount') ? $request->get('discount'):'';
        
        // calculate some value
        $remAmount = $totalAmount - ($recvAmount + $dis);
        
        switch($remAmount)
        {
            case($remAmount < 0 ):
                $dueSts = 0; // 0 for no due & 1 for has due
                $recvAmount = $totalAmount - $dis;
                break;
            case($remAmount > 0):
                $dueSts = 1; // 0 for no due & 1 for has due
                $backAmount = $remAmount;
                break;
            case($remAmount == 0):
                $dueSts = 0; // 0 for no due & 1 for has due
                $backAmount = $remAmount;
                break;
            default:
                $backAmount = 0;
        }

        $data1->regNumber = $regnumber;
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
        $data1->received = $recvAmount; 
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
