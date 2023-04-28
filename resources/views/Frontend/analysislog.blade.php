@extends('Frontend.Layouts.app')
@include('HelperFunction.function')

@section('title', 'Analysis Log')

@section('content')
    <div class="container">
        <div class="card" style="margin-top:5rem; border: none; outline: none;">
            <h1 style="font-family: 'Poppins', sans-serif;">
                Anlaysis Log
            </h1>
        </div>
        {{-- toaster message section  --}}
        <div class="row">
            <div class="" style="margin-top: 1rem;">
                @if (Session::has('mssg'))
                    <div class="btn btn-success" id="success-message">
                        <?php
                        echo Session::get('mssg');
                        ?>
                    </div>
                @endif
            </div>
        </div>

        <style>
            /* Add a transition to the opacity property */
            #success-message {
                transition: opacity 0.5s ease-in-out;
            }

            /* Set the opacity to 0 when the message is hidden */
            #success-message.hidden {
                opacity: 0;
            }
        </style>

        <script>
            setTimeout(function() {
                var successMessage = document.getElementById('success-message');
                if (successMessage) {
                    successMessage.classList.add('hidden'); // Add the 'hidden' class to trigger the fade-out effect
                    setTimeout(function() {
                        successMessage.remove();
                    }, 500); // Wait for the transition to complete before removing the message from the DOM
                }
            }, 1000); // 5000ms = 5 seconds
        </script>
        {{-- message section ends --}}

        <div class="card" style="gap: 10px;">
            {{-- @foreach ($user_data as $user) --}}
            @foreach ($user_data->reverse() as $user)
                <h5 class="card-header">Report {{ $loop->iteration }} </h5>
                <div class="card-body">
                    <h5 class="card-title">Result</h5>
                    <p class="card-text text-danger" style="font-weight: 700;">
                        <?php
                        $x = $user->class;
                        ?>
                        {{ colorForCKD($user->class, 0, 1) }}
                    </p>
                    <p>
                        Confidence Level: {{$user->c_level . "%"}}
                    </p>
                    {{-- added code --}}
                    <span class="card-text" style="font-size: small;">Age: {{ $user->age }},</span>
                    <span class="card-text" style="font-size: small;">Blood Pressure: {{ $user->bp }},</span>
                    <span class="card-text" style="font-size: small;">Specific Gravity: {{ $user->sg }},</span>
                    <span class="card-text" style="font-size: small;">Albumin: {{ $user->al }},</span>
                    <span class="card-text" style="font-size: small;">Sugar: {{ $user->su }},</span>
                    <span class="card-text" style="font-size: small;">Red Blood Cells: {{ $user->rbc }},</span>
                    <span class="card-text" style="font-size: small;">Pus Cell: {{ $user->pc }},</span>
                    <span class="card-text" style="font-size: small;">Pus Cell Clumps: {{ $user->pcc }},</span>
                    <span class="card-text" style="font-size: small;">Bacteria: {{ $user->ba }},</span>
                    <span class="card-text" style="font-size: small;">Blood Glucose Random: {{ $user->bgr }},</span>
                    <span class="card-text" style="font-size: small;">Blood Urea: {{ $user->bu }},</span>
                    <span class="card-text" style="font-size: small;">Serum Creatinine: {{ $user->sc }},</span>
                    <span class="card-text" style="font-size: small;">Sodium: {{ $user->sod }},</span>
                    <span class="card-text" style="font-size: small;">Potassium: {{ $user->pot }},</span>
                    <span class="card-text" style="font-size: small;">Hemoglobin: {{ $user->hemo }},</span>
                    <span class="card-text" style="font-size: small;">Packed Cell Volume: {{ $user->pcv }},</span>
                    <span class="card-text" style="font-size: small;">White Blood Cell Count: {{ $user->wc }},</span>
                    <span class="card-text" style="font-size: small;">Red Blood Cell Count: {{ $user->rc }},</span>
                    <span class="card-text" style="font-size: small;">Hypertension: {{ getYesNoLabel($user->htn) }},</span>
                    <span class="card-text" style="font-size: small;">Diabetes Mellitus: {{ getYesNoLabel($user->dm) }},</span>
                    <span class="card-text" style="font-size: small;">Coronary Artery Disease: {{ getYesNoLabel($user->cad) }},</span>
                    <span class="card-text" style="font-size: small;">Appetite: {{ $user->appet }},</span>
                    <span class="card-text" style="font-size: small;">Pedal Edema: {{ getYesNoLabel($user->pe) }},</span>
                    <span class="card-text" style="font-size: small;">Anemia: {{ getYesNoLabel($user->ane) }}</span>

                    {{-- <a href="#" class="btn btn-primary">View Details</a> --}}
                    {{-- <a href="#" class="btn btn-danger">Remove</a> --}}
                </div>
            @endforeach
        </div>
    </div>
@endsection
