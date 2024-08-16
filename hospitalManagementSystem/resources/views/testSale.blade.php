<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digonestic Test Sale</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/testSale.css">
</head>
<body>

<div id="input-section">
    <div class="container">

    <div class="row">
        <div class="col text-center">
          @if(session()->has('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
            @elseif(session()->has('error'))
            <div class="alert alert-danger">
              {{ session()->get('error') }}
            </div>
          @endif
        </div>
    </div>

        <h2 class="text-center display-4">Digonestic Test Salte Detail</h2><hr>
        <div class="row ">
            <div class="col-md-6">
                <div class="bg-light mt-3 overflow-auto" >
                    <table class="table table-bordered bg-transparent text-dark">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($data1 as $data)
                            <tr>
                                <td scope="row">{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->price}}/-</td>
                                <td><a href="{{ url('/add-item/'.$data->id) }}"><button class="btn btn-sm btn-info">Add</button></a></td>
                            </tr>
                            @endforeach                           
                            <tr>
                                <td colspan="2">Total Amount</td>
                                <td colspan="2">{{$sum}}/-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-light mt-3 overflow-auto" >
                    <table class="table table-bordered bg-transparent text-dark">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Reg. No</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">                            
                            <?php $i = 1;?>
                            @foreach($storetest as $datas => $row)
                            <tr>
                                <th scope="row">{{$i;}}</th>
                                <td>{{$row->regNum}}</td>
                                <td>{{$row->testname}}</td>
                                <td>{{$row->testprice}}</td>
                                <td><a href="{{ url('/remove/item/'.$row['id']) }}"><button class="btn btn-sm btn-warning">Remove</button></a></td>
                            </tr> 
                            <?php $i++;?>
                            @endforeach                 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-12 ">                
                <form method="GET" action="/test-sale/data-insert" enctype="multipart/from-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" placeholder="Name" value="Shamim Hossain" name="name" id="name" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" id="dob" value="2001-12-31" name="dob" class="form-control">
                        </div>                        
                    </div>
                    <div class="row mt-4">                        
                        <div class="col-md-6">
                            <label for="gender">Gender</label><br>
                            <input type="radio" id="Male" name="gender" checked value="Male">
                            <label for="Male">Male</label>&emsp;&emsp;
                            <input type="radio" id="Female" name="gender" value="Female">
                            <label for="Female">Female</label>&emsp;&emsp;
                            <input type="radio" id="Other" name="gender"  value="Other">
                            <label for="Other">Other</label>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <div class="input-group">
                                <span class="input-group-text">+880</span>
                                <input type="number" class="form-control" placeholder="Phone" value="1762164746" name="phone" id="phone">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="address" class="form-label">Address</label>
                        <input type="tezt" class="form-control" placeholder="Address" value="Kaliakair, Gazipur, Dhaka, Bangladesh" name="address" id="address">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="doctor" class="form-label">Doctors</label>
                            <select name="doctorid" required class="custom-select" id="doctor">
                                <option selected disabled>Select Doctor</option>
                                @foreach($doct as $docts)
                                    <option value="{{$docts->id}}">{{$docts->doctName}} ( {{$docts->doctDesignation}} )</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="refer" class="form-label">Reference</label>
                            <select name="referid" required class="custom-select" id="refer">
                                <option selected disabled>Select Refer</option>
                                @foreach($ref as $refe)
                                <option value="{{$refe->id}}">{{$refe->refName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col bg-color my-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class=" my-2 ">
                                    <label for="" class="form-label display-4">Actual: {{$sum2}}/-</label>
                                    <input type="number" class="form-control" hidden disabled id="num1" name="totalAmount" value="{{$sum2}}">
                                </div>
                                <div class=" my-2 ">
                                    <p id="result" name="reminderAmount" class="display-4">Amount: 00/-</p>
                                </div>
                            </div>
                            <div class="col-md-6">                                
                                <div class=" my-2 ">
                                    <label for="" class="form-label">Discount</label>
                                    <input placeholder="Discount" type="number" onkeyup="sumNumbers()" id="num3"  name="discount" required value="0" class="form-control">
                                </div>
                                <div class=" my-2 ">
                                    <label for="" class="form-label">Received</label>
                                    <input placeholder="Received Amount" required type="number" onkeyup="sumNumbers()" id="num2" name="received" class="form-control">
                                </div>
                            </div>                              
                        </div>
                    </div>
                    <button class="btn btn-light btn-block mx-3" id="btnSave" disabled>Save</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- <section id="main-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Digonestic Test Salte Detail</h2>
                <hr>
                <form method="GET" action="/test-sale/data-insert" enctype="multipart/from-data">
                    @csrf
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" placeholder="Name" name="name" id="name" class="form-control">
                </div>
                <div hidden>
                    <label for="">Due Status</label>
                    <label for="">Due CollectAmount</label>
                    <label for="">Due Discount</label>
                    <label for="">Due Collect Date</label>
                    <label for="">Due Collection Office</label>
                    <label for="">Test Sale officer</label>
                    <label for="">return Status</label>
                    <label for="">return Date</label>
                    <label for="">return officer</label>
                </div>
                <div class="row">
                    <div class="col-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control">
                    <input type="date" hidden disabled id="cdob"  name="cdob" class="form-control">
                    </div>
                    <div class="col-6">
                    <label for="gender">Gender</label><br>
                    <input type="radio" id="Male" name="gender" value="Male">
                    <label for="Male">Male</label>&emsp;&emsp;
                    <input type="radio" id="Female" name="gender" value="Female">
                    <label for="Female">Female</label>&emsp;&emsp;
                    <input type="radio" id="Other" name="gender" checked value="Other">
                    <label for="Other">Other</label>
                    </div>
                </div>
                <div>
                    <label for="phone" class="form-label">Phone</label>
                    <div class="input-group">
                        <span class="input-group-text">+880</span>
                        <input type="number" class="form-control" placeholder="Phone" name="phone" id="phone">
                    </div>
                </div>
                <div>
                    <label for="address" class="form-label">Address</label>
                    <input type="tezt" class="form-control" placeholder="Address" name="address" id="address">
                </div>
                <div>
                    <label for="doctor" class="form-label">Doctors</label>
                    <select name="doctorid" class="custom-select" id="doctor">
                        <option selected disabled>Select Doctor</option>
                        @foreach($doct as $docts)
                            <option value="{{$docts->id}}">{{$docts->doctName}} ( {{$docts->doctDesignation}} )</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="refer" class="form-label">Reference</label>
                    <select name="referid" class="custom-select" id="refer">
                        <option selected disabled>Select Refer</option>
                        @foreach($ref as $refe)
                        <option value="{{$refe->id}}">{{$refe->refName}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

             section second part start 

            <div class="col-md-6">
                <div class="bg-light mt-3 overflow-auto" >
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            @foreach($data1 as $data)
                            <tr>
                                <td scope="row">{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->price}}/-</td>
                                <td><a href="{{ url('/add-item/'.$data->id) }}"><button class="btn btn-sm btn-info">Add</button></a></td>
                            </tr>
                            @endforeach                           
                            <tr>
                                <td colspan="2">Total Amount</td>
                                <td colspan="2">{{$sum}}/-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="bg-light mt-3 overflow-auto" >
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Reg. No</th>
                                <th scope="col">Test Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">                            
                            <?php $i = 1;?>
                            @foreach($storetest as $datas => $row)
                            <tr>
                                <th scope="row">{{$i;}}</th>
                                <td>{{$row->regNum}}</td>
                                <td>{{$row->testname}}</td>
                                <td>{{$row->testprice}}</td>
                                <td><a href="{{ url('/remove/item/'.$row['id']) }}"><button class="btn btn-sm btn-warning">Remove</button></a></td>
                            </tr> 
                            <?php $i++;?>
                            @endforeach                 
                        </tbody>
                    </table>
                </div>
            </div>

             section second part end 

            <div class="col bg-color my-4">
                <div class="row">
                    <div class="col-6">
                        <div class=" my-2 ">
                            <label for="" class="form-label display-4">Total: {{$sum2}}/-</label>
                            <input type="number" class="form-control" disabled hidden id="num1" name="totalAmount" value="{{$sum2}}">
                        </div>
                        <div class=" my-2 ">
                            <label for="" class="form-label">Discount</label>
                            <input placeholder="Discount" type="number" onkeyup="sumNumbers()" id="num3" name="discount" required value="0" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class=" my-2 ">
                            <label for="" class="form-label">Received</label>
                            <input placeholder="Received Amount" required type="number" onkeyup="sumNumbers()" id="num2" name="received" class="form-control">
                        </div>
                        <div class=" my-2 ">
                            <p id="result" class="display-4"></p>
                        </div>
                    </div>  
                    <button class="btn btn-success btn-block mx-3" id="btnSave" disabled>Save</button>
                </div>
            </div>
        </form>   
        </div>
    </div>
</section> -->

<div id="show-investigation-test-sele-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="text-center display-4 mt-4">Digonestic Test Sale Details</h2><hr>
                <table class="table table-bordered bg-transparent text-dark">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Received</th>
                            <th scope="col">Due</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">                            
                        <?php $i = 1;?>
                        @foreach($data2 as $datas => $row)
                        <tr>
                            <th scope="row">{{$i;}}</th>
                            <td>{{$row->patientName}}</td>
                            <td>{{$row->totalAmount}}</td>
                            <td>{{$row->discount}}</td>
                            <td>{{$row->received}}</td>
                            <td>{{$row->receivedreminAmount}}</td>

                            @if($row->receivedreminAmount == 0 )
                            <td class="alert alert-success">Paid</td>
                            @elseif($row->receivedreminAmount < 0)                           
                            <td class="alert alert-danger">Return</td>
                            @else
                            <td>Due </td>
                            @endif                                                   
                        </tr> 
                        <?php $i++;?>
                        @endforeach   
                        <tr>
                            <th colspan="2">Total Amount</th>
                            <td>৳{{$d1}}/-</td>
                            <td>৳{{$d2}}/-</td>
                            <td>৳{{$d3}}/-</td>
                            <td>৳{{$d4}}/-</td>
                            <td class="alert alert-warning">৳{{$r1}}/-</td>
                        </tr>              
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    
    <script src="/js/testSale.js"></script>
</body>
</html>