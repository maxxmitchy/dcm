<div class="">
    <h3 class="font-black text-lg mb-3">General Information</h3>
    <hr>
    <div class="h-52 overflow-y-auto md:pr-2">
        <div class="flex justify-between my-3 text-sm" x-data="{open: false}">
            <h6 class="text-gray-400">Full Name</h6>
            <div class="flex">
                <form wire:submit.prevent="store">
                    <div class="flex  mr-2" x-show="open == true">
                        <input wire:model="name" type="text" class="px-3 rounded-sm focus:outline-none" />
                        <button @click="open = !open" type="submit" class="bg-indigo-600 text-white py-1 px-3 text-xs rounded-r-sm">Submit</button>
                    </div>
                </form>
                <h6 x-show="open == false" class="mr-2 overflow-ellipsis">{{$name}}</h6>
                <i @click="open = !open" class="cursor-pointer fas fa-edit self-center text-xs"></i>
            </div>
        </div>
        <hr>
        <div class="flex justify-between my-3 text-sm" x-data="{open: false}">
            <h6 class="text-gray-400">Email</h6>
            <div class="flex">
                <form wire:submit.prevent="store">
                    <div class="flex  mr-2" x-show="open == true">
                        <input wire:model="email" type="text" class="px-3 rounded-sm focus:outline-none" />
                        <button @click="open = !open" type="submit" class="bg-indigo-600 text-white py-1 px-3 text-xs rounded-r-sm">Submit</button>
                    </div>
                </form>
                <h6 x-show="open == false" class="mr-2 overflow-ellipsis">{{$email}}</h6>
                <i @click="open = !open" class="cursor-pointer fas fa-edit self-center text-xs"></i>
            </div>
        </div>
        <hr>
        <div class="flex justify-between my-3 text-sm">
            <h6 class="text-gray-400">Date Of Birth</h6>
            <div class="flex">
                <h6 class="mr-2 overflow-ellipsis">March 9, 1990.</h6>
                <i class="fas fa-edit self-center text-xs"></i>
            </div>
        </div>
        <hr>
        <div class="flex justify-between my-3 text-sm" x-data="{open: false}">
            <h6 class="text-gray-400">Address</h6>
            <div class="flex">
                <form wire:submit.prevent="store">
                    <div class="flex  mr-2" x-show="open == true">
                        <input wire:model="address" type="text" class="px-3 rounded-sm focus:outline-none" />
                        <button @click="open = !open" type="submit" class="bg-indigo-600 text-white py-1 px-3 text-xs rounded-r-sm">Submit</button>
                    </div>
                </form>
                <h6 x-show="open == false" class="mr-2 overflow-ellipsis">{{$address}}</h6>
                <i @click="open = !open" class="cursor-pointer fas fa-edit self-center text-xs"></i>
            </div>
        </div>
        <hr>
        <div class="flex justify-between my-3 text-sm">
            <h6 class="text-gray-400">Profession</h6>
            <div class="flex">
                <h6 class="mr-2 overflow-ellipsis">Nail Technician, Skin Therapy Mogul.</h6>
                <i class="fas fa-edit self-center text-xs"></i>
            </div>
        </div>
    </div>
</div>
