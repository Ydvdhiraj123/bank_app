<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/icon.png')}}" alt="" width="50" height="45">
    </a>
    <i class="bi bi-house"></i> 
    <div class="d-flex">
        <a href="{{ url('/') }}"><button class="btn btn-outline-primary">{{ __('Home') }}</button></a>
        <a href="{{ route('transaction-history') }}"><button class="btn btn-outline-primary mx-3">{{ __('Transactions') }}</button></a>
    </div>
  </div>
</nav>
 <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <marquee class="">Welcome to our online banking</marquee>
</nav>
