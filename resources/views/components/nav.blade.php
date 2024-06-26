<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href=""{{ URL::to(' ') }}""><img src="./public/assets/images/single-icons.png" alt="" class="logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ URL::to('') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('about-us') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('contact-us') }}">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('products') }}">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::to('students') }}">Students</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
