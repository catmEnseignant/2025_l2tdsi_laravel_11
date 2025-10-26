<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Dashboard Admin')</title>

  <!-- CSS AdminLTE -->
  <link rel="stylesheet" href="{{ asset('adminlte/dist/css/adminlte.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="fa-solid fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('/') }}" class="nav-link">Accueil</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Sidebar -->
  <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
      <a href="{{ url('/admin') }}" class="brand-link">
        <span class="brand-text fw-light">AdminLTE v4</span>
      </a>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
        <li class="nav-item">
          <a href="{{ url('/admin') }}" class="nav-link active">
            <i class="nav-icon fa-solid fa-gauge"></i>
            <p>Dashboard</p>
          </a>
        </li>
      </ul>
    </nav>
  </aside>

  <!-- Contenu principal -->
  <main class="app-main p-4">
    <div class="container-fluid">
      @yield('content')
    </div>
  </main>

  <!-- Footer -->
  <footer class="app-footer text-center">
    <span>© 2025 - AdminLTE v4 avec Laravel</span>
  </footer>

</div>

<!-- JS AdminLTE -->
<script src="{{ asset('adminlte/dist/js/adminlte.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
