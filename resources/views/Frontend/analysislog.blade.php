@extends('Frontend.Layouts.app')

@section('content')
<div class="container">
    <div class="card" style="margin-top:5rem; border: none; outline: none;">
        <h1>
            Anlaysis Log
        </h1>
    </div>

    <div class="row">
        <div class="" style="margin-top: 1rem;">
            @if (Session::has('mssg'))
            <div class="btn btn-success">
              <?php  
              echo Session::get('mssg')
              ?>
            </div>
            @endif
          </div>    
    </div>
    <div class="card" style="gap: 10px;">
        @foreach ($user_data as $user)
            <h5 class="card-header">Report {{ $loop->iteration }} </h5>
            <div class="card-body">
                <h5 class="card-title">Result</h5>
                
                <p class="card-text text-danger" style="font-weight: 700;">
                    <?php 
                        $x = $user->class;
                    ?>
                    @if ($x == 0)
                        CKD
                    @elseif($x == 1)
                        Not CKD
                    @else 
                        Result not found
                    @endif
                </p>
                {{-- <a href="#" class="btn btn-primary">View Details</a> --}}
                {{-- <a href="#" class="btn btn-danger">Remove</a> --}}
            </div>
        @endforeach
    </div>
</div>
@endsection