@extends('Frontend.Layouts.app')

@section('content')
<div class="container">
    <div class="flex aic">
        <div class="col-md-6">
            <h2 class="b-title">About this Project</h2>
            <hr>
            <p class="b-subtitle taj" style="line-height:1.5rem; font-size: 1.115rem;">
                The chronic disease prediction system is a web-based application created using Laravel, 
                a popular PHP framework. This system is designed to predict the likelihood of chronic diseases such as heart disease, 
                diabetes. The prediction algorithm is based on Naive Bayes, a probabilistic algorithm 
                that uses statistical models to predict the probability of an event. The algorithm is implemented using Python and 
                integrated into the Laravel framework to provide an efficient and accurate prediction system. 
                This project is a part of the 7th-semester curriculum in college and aims to provide students with 
                practical experience in developing real-world applications using modern web technologies.
            </p>
        </div>
        <div class="col-md-6">
            <img src="https://medicaldialogues.in/h-upload/2020/12/30/145030-chronic-kidney-disease.webp"
                class="img-fluid" alt="Placeholder image">
        </div>
    </div>
</div>
@endsection