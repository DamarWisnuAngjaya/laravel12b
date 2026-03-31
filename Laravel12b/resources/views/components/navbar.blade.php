<nav class="navbar">
    <div class="nav-brand">Crea<span>ont</span></div>

    <div class="nav-links">
        <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('/about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
        <a href="{{ url('/features') }}" class="{{ request()->is('features') ? 'active' : '' }}">Features</a>
        <a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
    </div>
</nav>