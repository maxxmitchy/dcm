<x-app-layout>
    <x-slot name="sidebar">
        <x-sidebar />
    </x-slot>
    <div class="mt-3 grid sm:grid-cols-5 sm:pl-8">
        <h3 class="font-black text-base self-center">Overview</h3>
        <h3 class="font-black text-base self-center">Reports</h3>
        <div class="relative text-gray-600 mx-8 col-span-3">
            <input class="w-full bg-white h-10 md:px-8 px-3 min-w-0 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
            <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                    <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </div>
    </div>
    <div class="" x-data="{isOpen:false}">
        <div x-show="isOpen" style="background: rgba(0,0,0,.8);" class="fixed z-20 mx-auto top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
            <div class="container mx-auto md:mx-96 z-30 rounded px-8 p-4 mt-2 overflow-y-auto">
                <div class="bg-white rounded-lg px-5 py-5 md:py-8 md:px-8">
                    <div class="relative">
                        <i @click="isOpen = false" x-ref="modalCloseButton" class="cursor-pointer fa fa-times absolute right-0"></i>
                    </div>
                    sht here
                </div>
            </div>

        </div>

        <div class="grid grid-cols-4 gap-4 p-8 mt-3">
            <div class="p-5 flex justify-center bg-indigo-400 items-center flex-col shadow-lg rounded-lg">
                <h2 class="text-3xl font-black text-white">300+</h2>
                <h3 class="my-1 font-black text-white text-sm text-center">Total Appointments</h3>
                <i class="fa fa-plus text-white text-sm p-2 rounded-full border mt-2"></i>
            </div>
            <div class="p-5 flex justify-center bg-orange-300 items-center flex-col shadow-lg rounded-lg">
                <h2 class="text-3xl font-black text-white">2</h2>
                <h3 class="my-1 font-black text-white text-sm text-center">Currently Active</h3>
                <i @click="isOpen = true" class="cursor-pointer fa fa-pencil-alt text-white border-white p-2 text-sm rounded-full border mt-2"></i>
            </div>
            <div class="col-span-2 p-3 bg-white rounded-lg" x-data="{open: false}">
                <div class="flex justify-between items-center mb-3 relative">
                    <div @click.away="open = false" x-cloak x-show.transition="open" class="absolute shadow-lg p-24 z-10 bg-white rounded-lg top-0 right-7"></div>
                    <h3 class="font-black text-sm text-md capitalize">Recent Activities</h3>
                    <i class="fa fa-ellipsis-v text-sm cursor-pointer" @click="open = !open"></i>
                </div>
                <div class="flex justify-between mb-3">
                    <div class="flex">
                        <div class="p-5 bg-red-200 rounded-full mr-2"></div>
                        <div class="flex flex-col">
                            <b class="font-semibold text-sm">Harlims Beauty Paer.</b>
                            <p class="text-cool-gray-500 text-xs font-black">2 weeks ago</p>
                        </div>
                    </div>
                    <h5 class="font-semibold text-xs font-black self-center text-green-700">NGN 50</h5>
                </div>
                <div class="flex justify-between mb-3">
                    <div class="flex">
                        <div class="p-5 bg-red-200 rounded-full mr-2"></div>
                        <div class="flex flex-col">
                            <b class="font-semibold text-sm">Harlims Beauty Paer.</b>
                            <p class="text-cool-gray-500 text-xs font-black">2 weeks ago</p>
                        </div>
                    </div>
                    <h5 class="font-semibold text-xs font-black self-center text-green-700">NGN 50</h5>
                </div>
                <div class="rounded-full border flex justify-center items-center p-1 w-8 h-8">1</div>
            </div>
        </div>
        <div class="py-3">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-5 bg-white">
                        <div class="flex justify-between mb-3">
                            <h3 class="font-black text-sm capitalize">Hot selling products</h3>
                            <h3 class="self-center font-black text-sm">see all</h3>
                        </div>
                        <hr>
                        <div class="flex justify-between mt-4">
                            <div class="flex">
                                <div class="p-5 bg-red-200 rounded-full mr-2"></div>
                                <div class="flex flex-col">
                                    <h3 class="font-semibold text-sm">Lorem ipsum dolor sit amet.</h3>
                                    <p class="text-cool-gray-500 text-xs font-black">50k sales</p>
                                </div>
                            </div>
                            <h5 class="font-semibold text-xs font-black">NGN 50</h5>
                        </div>
                        <div class="flex justify-between mt-4">
                            <div class="flex">
                                <div class="p-5 bg-red-200 rounded-full mr-2"></div>
                                <div class="flex flex-col">
                                    <b class="font-semibold text-sm">Lorem ipsum dolor sit amet.</b>
                                    <p class="text-cool-gray-500 text-xs font-black">50k sales</p>
                                </div>
                            </div>
                            <h5 class="font-semibold text-xs font-black">NGN 50</h5>
                        </div>

                        <br>
                        <div class="rounded-full border flex justify-center items-center p-1 w-8 h-8">1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
