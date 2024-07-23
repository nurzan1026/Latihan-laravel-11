<aside id="sidebar" class="sidebar flex flex-col border-r bg-white">
    <div class="bg-primary h-20 flex justify-center items-center">
        <h1 class="font-bold text-2xl text-white">Bank sampah</h1>
    </div>
    <nav class="flex-1 overflow-y-auto mt-5">
        <ul class="p-4 space-y-4">
            <li>
                <a href="/dashboard"
                    class="flex items-center text-sm font-bold p-2 rounded {{ request()->is('dashboard') ? 'bg-hijau text-white' : 'hover:bg-hijau hover:text-white' }}">
                    <span class="material-icons">home</span>
                    <span class="ml-2">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/admin"
                    class="flex items-center text-sm font-bold p-2 rounded {{ request()->is('admin') ? 'bg-hijau text-white' : 'hover:bg-hijau hover:text-white' }}">
                    <span class="material-icons">admin_panel_settings</span>
                    <span class="ml-2">Admin</span>
                </a>
            </li>
            <li>
                <a href="/nasabah"
                    class="flex items-center text-sm font-bold p-2 rounded {{ request()->is('nasabah') ? 'bg-hijau text-white' : 'hover:bg-hijau hover:text-white' }}">
                    <span class="material-icons">person</span>
                    <span class="ml-2">Nasabah</span>
                </a>
            </li>
            <li>
                <a href="/setoran-sampah"
                    class="flex items-center text-sm font-bold p-2 rounded {{ request()->is('setoran-sampah') ? 'bg-hijau text-white' : 'hover:bg-hijau hover:text-white' }}">
                    <span class="material-icons">edit_square</span>
                    <span class="ml-2">Setoran Sampah</span>
                </a>
            </li>
            <li>
                <a href="/data-sampah"
                    class="flex items-center text-sm font-bold p-2 rounded {{ request()->is('data-sampah') ? 'bg-hijau text-white' : 'hover:bg-hijau hover:text-white' }}">
                    <span class="material-icons">dataset</span>
                    <span class="ml-2">Data Sampah</span>
                </a>
            </li>
            <li>
                <a href="/riwayat-setoran"
                    class="flex items-center text-sm font-bold p-2 rounded {{ request()->is('riwayat-setoran') ? 'bg-hijau text-white' : 'hover:bg-hijau hover:text-white' }}">
                    <span class="material-icons">bookmark</span>
                    <span class="ml-2">Riwayat setoran</span>
                </a>
            </li>
            <li>
                <a href="/profile"
                    class="flex items-center text-sm font-bold p-2 rounded {{ request()->is('profile') ? 'bg-hijau text-white' : 'hover:bg-hijau hover:text-white' }}">
                    <span class="material-icons">manage_accounts</span>
                    <span class="ml-2">Profile</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="p-4">
        <a href="/logout" class="flex items-center text-sm p-2 font-bold rounded hover:bg-hijau hover:text-white">
            <span class="material-icons">logout</span>
            <span class="ml-2">Logout</span>
        </a>
    </div>
</aside>
