<x-app-layout>
    <x-slot name="sidebar">
        <x-sidebar />
    </x-slot>
    <div class="mt-2">
        <div class="flex justify-between">
            <div class="flex">
                <div class="h-20 w-20 rounded-full bg-white mr-3"></div>
                <div class="flex flex-col justify-center">
                    <h3 class="font-black text-lg">Name Of User</h3>
                    <p class="text-cool-gray-500 text-xs">qualifications and others here</p>
                </div>
            </div>
            <div class="flex">
                <i class="fas fa-comments p-3 bg-orange-400 rounded-full mr-3 self-center"></i>
                <a class="cursor-pointer bg-orange-400 p-2 rounded-3xl inline-flex self-center text-sm font-semibold">
                    <i class="fa fa-plus text-orange-400 text-xs p-1 bg-black rounded-full self-center mr-2"></i>
                    Add New
                </a>
            </div>
        </div>
        <br>
        <div class="text-sm bg-gray-100 rounded-lg p-1 w-full flex justify-between space-x-4">
            <div class="{{request()->is('user-settings') ? 'rounded-md bg-white px-5 text-center':'px-2 text-gray-400'}}">
                <a href="/user-settings">Personal Info</a>
            </div>
            <div class="{{request()->is('user-settings/artisans') ? 'rounded-md bg-white px-5 text-center':'px-2 text-gray-400'}}">
                <a href="/user-settings/artisans">Bookmarked Artisans</a>
            </div>
            <div class="{{request()->is('user-settings/visits-history') ? 'rounded-md bg-white px-5 text-center':'px-2 text-gray-400'}}">
                <a href="/user-settings/visits-history">Visits History</a>
            </div>
            <div class="{{request()->is('user-settings/purchases') ? 'rounded-md bg-white px-5 text-center':'px-2 text-gray-400'}}">
                <a href="/user-settings/purchases">Purchase History</a>
            </div>
            <div class="{{request()->is('user-settings/reports') ? 'rounded-md bg-white px-5 text-center':'px-2 text-gray-400'}}">
                <a href="/user-settings/reports">Reports</a>
            </div>
        </div>
        <br>
        <div class="h-96 relative">
            @if(request()->is('user-settings'))

            @include('partials.personal-info')

            @elseif(request()->is('user-settings/artisans'))

            @include('partials.artisans')

            @elseif(request()->is('user-settings/visits-history'))

            @include('partials.visits-history')

            @elseif(request()->is('user-settings/purchase-history'))

            @include('partials.purchase-history')

            @endif
        </div>
    </div>
</x-app-layout>
