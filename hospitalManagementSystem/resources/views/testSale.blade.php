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
    
<section id="main-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Digonestic Test Salte Detail</h2>
                <hr>
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input type="text" placeholder="Name" id="name" class="form-control">
                </div>
                <div class="row">
                    <div class="col-6">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" id="dob" class="form-control">
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
                        <input type="number" class="form-control" placeholder="Phone" id="phone">
                    </div>
                </div>
                <div>
                    <label for="address" class="form-label">Address</label>
                    <input type="tezt" class="form-control" placeholder="Address" id="address">
                </div>
                <div>
                    <label for="doctor" class="form-label">Doctors</label>
                    <select name="" class="custom-select" id="doctor">
                        <option selected disabled>Select Doctor</option>
                        <option value="1">Dr. Shohanur Rahman</option>
                        <option value="2">Dr. Mazina Tanvir</option>
                        <option value="3">Dr. Hasanur Hahman</option>
                        <option value="4">Dr. Saidur Rahman</option>
                    </select>
                </div>
                <div>
                    <label for="refer" class="form-label">Reference</label>
                    <select name="" class="custom-select" id="refer">
                        <option selected disabled>Select Refer</option>
                        <option value="1">Sadikur Rahman</option>
                        <option value="2">Abir Hossain/option>
                        <option value="3">Sakib Al Hasan</option>
                        <option value="4">Rakib Khan</option>
                    </select>
                </div>
            </div>
            <!-- section second part start -->
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
                            <tr>
                                <th scope="row">1</th>
                                <td>CBC</td>
                                <td>200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>RBS</td>
                                <td>550/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>


                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-info">Add</button></td>
                            </tr>
                            <!-- <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr> -->
                        </tbody>
                    </table>
                </div>
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
                            <tr>
                                <th scope="row">1</th>
                                <td>CBC</td>
                                <td>200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>RBS</td>
                                <td>550/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>


                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>HsBgS</td>
                                <td>1200/-</td>
                                <td><button class="btn btn-sm btn-warning">Remove</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


    <script src="/js/jquery.min.js"></script>
   <script src="/js/popper.min.js"></script>
   <script src="/js/bootstrap.bundle.min.js"></script>
   <script src="/js/jquery-3.0.0.min.js"></script>
   <script src="/js/plugin.js"></script>

</body>
</html>