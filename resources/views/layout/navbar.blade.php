<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
  <title>Navbar</title>
</head>
<body>
  <div class="navbar">
    <div class="brand">Fretty S.</div>
    <ul class="nav-menu">
        <li>
          <a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">
            About
          </a>
        </li>
        <li>
          <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">
            Service
          </a>
        </li>
        <li>
          <a href="{{ asset('assets/cv_fretty.pdf') }}" target="_blank" rel="noopener noreferrer">
            Resume
          </a>
        </li>
    </ul>
  </div>
</body>
</html>
