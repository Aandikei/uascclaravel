<div class="p-3 border-end" style="min-height:100vh;">
    <div class="text-muted small mb-3">MENU</div>

    <ul class="nav nav-pills flex-column gap-1">

        {{-- <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('mahasiswa.*') ? 'active' : 'text-dark' }}"
                href="{{ route('mahasiswa.index') }}">
                📘 Mahasiswa
            </a>
        </li> --}}

        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('inventory.*') ? 'active' : 'text-dark' }}"
                href="{{ route('inventory.index') }}">
                🧪 Inventory Lab
            </a>
        </li>

    </ul>
</div>
