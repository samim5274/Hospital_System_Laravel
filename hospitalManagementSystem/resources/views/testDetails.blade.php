<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Investigation Input Form</title>

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
          @endif
        </div>
    </div>
  </div>
</section>

  <div class="container">
      <h2>Investigation Input Form</h2>
      <form action="/insert-Iinvestigation" method="POST" enctype="multipart/form-data">
          @csrf
          <fieldset>
              <legend>Test Information</legend>
              <label for="test_name">Test Name:</label>
              <input type="text" id="test_name" name="test_name" required>

              <label for="category">Test Category:</label>
              <select id="category" name="category" required>
                  <option selected disabled>Select Category</option>                                        
                  @foreach($data1 as $val)
                  <option value="{{$val->id}}">{{$val->catname}}</option> 
                  @endforeach                             
              </select>
              
              <label for="price">Test Price:</label>
              <input type="number" id="price" name="price" required>

              <label for="room">Test Room No:</label>
              <input type="number" id="room" name="room" required>

          </fieldset>

          <button type="submit">Submit</button>
      </form>
  </div>

  <section id="show-test-details">
    <div class="container">
      <div class="row">
        <div class="col">
        <table class="table table-bordered">
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
            @foreach($data2 as $data)
            <tr>
              <th scope="row">{{$data->id}}</th>
              <td>{{$data->name}}</td>
              <td>{{$data->catname}}</td>
              <td>৳{{$data->price}}/-</td>
              <td>{{$data->room}}</td>
            </tr>
            @endforeach     
          </tbody>
      </table>
        </div>
      </div>
    </div>
  </section>



</body>
</html>
