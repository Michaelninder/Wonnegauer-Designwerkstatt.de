<div class="sidebar bg-light vh-100 d-flex flex-column p-3">
    <div class="sidebar-header mb-4">
        <h3 class="text-center text-primary">Admin Dashboard</h3>
    </div>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('admin.overview') }}">
                <i class="bi bi-house-door"></i> Übersicht
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('admin.users.index') }}">
                <i class="bi bi-person-circle"></i> Benutzer
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('admin.dates.index') }}">
                <i class="bi bi-calendar-event"></i> Termine
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="{{ route('admin.links.index') }}">
                <i class="bi bi-link-45deg"></i> Links
            </a>
        </li>
    </ul>
</div>
