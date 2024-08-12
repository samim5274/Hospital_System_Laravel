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


</body>
</html>
