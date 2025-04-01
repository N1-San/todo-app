<html>

<head>
  <title>Tasks</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">To Do List</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="/">All Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tasks/create">New Tasks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/tasks/completed">Completed Tasks</a>
        </li>
      </ul>
    </div>
  </nav>
  @if (session()->has('message'))
    <x-alert message="{{ session('message') }}" />
    {{ session()->forget('message') }}
  @endif
  <div class="container">
    @yield('content')
  </div>

</body>

</html>