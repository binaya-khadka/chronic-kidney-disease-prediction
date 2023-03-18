@extends('Frontend.Layouts.app')

@section('content')
    <div class="topContainer">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6">
                    <h3>Contact Information</h3>
                    <p><i class="fa fa-map-marker"></i>123 Main Street, New York, NY 10001</p>
                    <p><i class="fa fa-phone"></i><a href="tel:123-456-7890">123-456-7890</a></p>
                    <p><i class="fa fa-envelope-o"></i><a href="mailto:info@example.com">info@example.com</a></p>
                    <p><i class="fa fa-facebook"></i><a href="#">Facebook</a></p>
                    <p><i class="fa fa-twitter"></i><a href="#">Twitter</a></p>
                    <p><i class="fa fa-instagram"></i><a href="#">Instagram</a></p>
                </div>
                <div class="col-md-6">
                    <img src="https://img.freepik.com/free-vector/organic-flat-customer-support-illustration_23-2148899174.jpg?w=2000"
                        class="img-fluid" alt="Contact Us Image">
                </div>
            </div>
            <hr>
            <h3>Feedback Form</h3>
            <form>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Clear</button>
            </form>
        </div>
    </div>
@endsection
