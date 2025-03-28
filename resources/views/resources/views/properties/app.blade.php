<!-- Example in resources/views/layouts/app.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Property Management</a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('properties.index') }}">All Properties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('properties.create') }}">Add Property</a>
            </li>
        </ul>
    </div>
</nav>