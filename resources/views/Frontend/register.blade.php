<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"
    integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
    integrity="sha512-eHx4nbBTkIr2i0m9SANm/cczPESd0DUEcfl84JpIuutE6oDxPhXvskMR08Wmvmfx5wUpVjlWdi82G5YLvqqJdA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  {{-- @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif --}}


  <form action="{{route('homepage.patient.register.store')}}" method="POST">
    @csrf
    <input type="text" name="name" id="name" class="@error('name') is-invalid @enderror" placeholder="name"
      value="{{ old('name') }}"><br>
    <br>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="number" name="age" id="age" placeholder="age" class="@error('age') is-invalid @enderror"
      value="{{ old('age') }}"><br><br>
    @error('age')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="text" name="email" id="email" placeholder="email" class="@error('email') is-invalid @enderror"
      value="{{old('email')}}"><br>
    <br>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="number" name="phone" id="phone" placeholder="phone" class="@error('phone') is-invalid @enderror"
      value="{{old('phone')}}"><br>
    <br>
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input type="password" name="password" id="password" placeholder="password"
      class="@error('password') is-invalid @enderror">
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br> <br>
    <button class="btn btn-success" type="submit">Submit</button>
  </form>

</body>

</html>