<!-- Mobile sidebar button -->
<button data-drawer-target="cta-button-sidebar" data-drawer-toggle="cta-button-sidebar"
    aria-controls="cta-button-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Open sidebar</span>
    <i class="fas fa-bars w-6 h-6"></i>
</button>

<!-- Sidebar -->
<aside id="cta-button-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 py-8 overflow-y-auto bg-white border-r border-gray-200">
        <!-- Logo Text -->
        <div class="mb-8">
            <h1 class="text-xl font-bold text-[#0C3183]">Management Software</h1>
        </div>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#" class="flex items-center p-2 text-[#0C3183] rounded-[20px] bg-blue-50 group">
                    <i class="fas fa-tachometer-alt w-5 h-5 text-[#0C3183]"></i>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-500 rounded-[20px] hover:text-[#0C3183] hover:bg-blue-50 group">
                    <i class="fas fa-building w-5 h-5 text-gray-500 transition duration-75 group-hover:text-[#0C3183]"></i>
                    <span class="ms-3">Companies</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-500 rounded-[20px] hover:text-[#0C3183] hover:bg-blue-50 group">
                    <i class="fas fa-users w-5 h-5 text-gray-500 transition duration-75 group-hover:text-[#0C3183]"></i>
                    <span class="ms-3">Users</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-500 rounded-[20px] hover:text-[#0C3183] hover:bg-blue-50 group">
                    <i class="fas fa-book w-5 h-5 text-gray-500 transition duration-75 group-hover:text-[#0C3183]"></i>
                    <span class="ms-3">Courses</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-500 rounded-[20px] hover:text-[#0C3183] hover:bg-blue-50 group">
                    <i class="fas fa-file-alt w-5 h-5 text-gray-500 transition duration-75 group-hover:text-[#0C3183]"></i>
                    <span class="ms-3">Documents</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-500 rounded-[20px] hover:text-[#0C3183] hover:bg-blue-50 group">
                    <i class="fas fa-map-marker-alt w-5 h-5 text-gray-500 transition duration-75 group-hover:text-[#0C3183]"></i>
                    <span class="ms-3">Types of visit</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center p-2 text-gray-500 rounded-[20px] hover:text-[#0C3183] hover:bg-blue-50 group">
                    <i class="fas fa-cog w-5 h-5 text-gray-500 transition duration-75 group-hover:text-[#0C3183]"></i>
                    <span class="ms-3">Settings</span>
                </a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="w-full flex items-center p-2 text-gray-500 rounded-[20px] hover:text-red-600 hover:bg-red-50 group">
                        <i class="fas fa-sign-out-alt w-5 h-5 text-gray-500 transition duration-75 group-hover:text-red-600"></i>
                        <span class="ms-3">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</aside>
