@extends('Frontend.Layouts.app')

@section('content')
<div class="container container2">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center mb-4">Update Details</h5>
                    <form>
                        <div class="form-group mb-3">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" id="fullname" placeholder="Enter fullname">
                        </div>
                        <div class="form-group mb-3">
                            <label for="username">username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                        </div>
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group mb-3">
                            <label for="phonenumber">Phone Number</label>
                            <input type="number" class="form-control" id="phonenumber" placeholder="Enter phonenumber">
                        </div>
                        <div class="form-group mb-3">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" id="age" placeholder="Enter age">
                        </div>
                        <div class="form-group mb-3">
                            <label for="username">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                <label class="form-check-label" for="gridRadios1">
                                  Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">
                                  Female
                                </label>
                              </div>
                              <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                <label class="form-check-label" for="gridRadios3">
                                    Other
                                </label>
                              </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password">
                        </div>
                        <button type="submit" class="btn btn-primary" onclick="toogleEdit()">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
