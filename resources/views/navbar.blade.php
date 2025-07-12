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
