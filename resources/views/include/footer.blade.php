<div class="bg-dark text-secondary px-2 py-3 text-center">
    <div class="py-5">
      <div class="text-center">
        <a href="{{ url('/')}}"><button class="btn btn-outline-primary">{{ __('Home') }}</button></a>
        <a href="{{ route('transaction-history') }}"><button class="btn btn-outline-primary mx-3">{{ __('Transactions') }}</button></a>
      </div>
      <h1 class="display-5 fw-bold text-white">Mobile Banking App</h1>
      <div class="col-lg-6 mx-auto">
        <p class="fs-5 mb-4">Designed and developed by Dhiraj Kumar. <span class="text-primary fs-6">2023</span></p>
      </div>
    </div>
  </div>

    <!-- Bootstrap JS CDN link -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
 <!-- Flash Messages -->
    <script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $("div.alert").remove()
        }, 3000);
    });
    </script>


