<div class="mb-5 mt-10 flex flex-col justify-between h-5/6">
    <div class="">
        <a href="/dashboard" class="hover:text-indigo-500 {{request()->is('dashboard') ? 'text-indigo-500':'text-gray-500'}}">
            <div class="flex justify-between mb-5">
                <h3 class="font-black text-sm ">Dashboard</h3>
                <i class="font-black self-center text-sm fa fa-tachometer-alt"></i>
            </div>
        </a>
        <a href="/book-appointment" class="hover:text-indigo-500 {{request()->is('book-appointment') ? 'text-indigo-500':'text-gray-500'}}">
            <div class="flex justify-between mb-5">
                <h3 class="font-black text-sm ">Book Appointment</h3>
                <i class="font-black self-center text-sm far fa-calendar-check"></i>
            </div>
        </a>
        <a href="/" class="hover:text-indigo-500">
            <div class="flex justify-between mb-5">
                <h3 class="font-black text-sm ">WishList</h3>
                <i class="font-black text-sm fas fa-thumbs-up"></i>
            </div>
        </a>
        <a href="/" class="hover:text-indigo-500">
            <div class="flex justify-between mb-5">
                <h3 class="font-black text-sm ">Become an Owner</h3>
                <i class="font-black text-sm fas fa-store"></i>
            </div>
        </a>
        <a href="/user-settings" class="hover:text-indigo-500 {{request()->is('user-settings') ? 'text-indigo-500':'text-gray-500'}}">
            <div class="flex justify-between mb-5">
                <h3 class="font-black text-sm ">Setting</h3>
                <i class="font-black text-sm fas fa-user-cog"></i>
            </div>
        </a>

    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="pr-5 flex mb-5 outline-none">
            <i class="self-center font-black mr-3 text-sm fas fa-power-off"></i>
            <h3 class="font-black text-sm">Logout </h3>
        </button>
    </form>
</div>
