<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investigation Test Show</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/testDetail.css">
</head>
<body>

<section id="account-section">
  <div class="">
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
  </div>
</section>


<section id="test-sale-report-section">
    <div class="container">
        <div class="row">
            <div class="mb-4 text-center">
                <form action="/show-filer-investigation-data" method="GET" enctype="multipart/from-data">
                    @csrf
                    <div class="col-md-4">
                        <label for="">Start:</label>
                        <input name="startDate" type="date">
                    </div>
                    <div class="col-md-4">
                        <label for="">End:</label>
                        <input name="endDate" type="date">
                    </div>
                    <div class="col-md-4">
                    <a href=""><button class="btn btn-info">Search</button></a>
                    </div>
                </form>            
            </div>
            <div class="col-md-12">
                <table class="table table-info" >
                    <thead class="text-center">
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col" class="text-left">Sale Date</th>
                        <th scope="col" class="text-left">Name</th>
                        <th scope="col" class="text-left">Gender</th>
                        <th scope="col" class="text-left">Phone</th>
                        <th scope="col" class="text-right">Amount</th>
                        </tr>
                    </thead>
                    <tbody class="text-center"><label for="" hidden>{{$i=1}}</label>
                        @foreach($fillterTestSale as $data)
                        <tr>
                            <th scope="row">{{$i}}</th>              
                            <td class="text-left">{{$data->testsalteDate}}</td>
                            <td class="text-left">{{$data->patientName}}</td>      
                            <td class="text-left">{{$data->gender}}</td>      
                            <td class="text-left">{{$data->phone}}</td>      
                            <td class="text-right">৳{{$data->received}}/-</td>
                        </tr>
                        <label for="" hidden>{{$i++}}</label>
                        @endforeach   
                        <tr>
                            <th scope="row">Total: </th>
                            <td></td>
                            <td></td>                    
                            <td></td>                    
                            <td>Total:</td>
                            <td class="text-right">৳{{$fillterTestSaleSum}}/-</td>
                        </tr>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<!-- ===============================show all test========================================  -->

<section id="show-test-details">
    <div class="container">
    <div class="row">
        <div class="col">                
        <table class="table table-bordered" >
            <thead class="text-center">
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Test Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Room No</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach($data1 as $data)
                <tr>
                    <th scope="row">{{$data->id}}</th>
                    <td>{{$data->name}}</td>
                    <td>{{$data->catname}}</td>                    
                    <td>৳{{$data->price}}/-</td>
                    <td>{{$data->room}}</td>
                </tr>
                @endforeach   
                <tr>
                    <th scope="row">Total: {{$data2}}</th>
                    <td></td>
                    <td></td>                    
                    <td>Total:৳ {{$data3}}/-</td>
                    <td></td>
                </tr>  
            </tbody>
        </table>
        </div>
    </div>
    </div>
</section>


<section id="store-test">
    <div class="container">
        <div class="row">

            <div class="col-6">
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
                            <td colspan="2">{{$data3}}/-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-6">
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
                <h4>Total : {{$sum2}}/-</h4>              
            </div>    

        </div>
    </div>
</section>

</body>
</html>
