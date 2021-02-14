<x-guest-layout>
    <x-authCard>
        <div class="bg-white" x-data="{isOpen:false}">
            <div class="p-2 md:p-8">
                <div x-show="isOpen" style="background: rgba(0,0,0,.8);" class="fixed z-20 mx-auto top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                    <div class="container mx-auto md:mx-96 z-30 rounded px-8 p-4 mt-2 overflow-y-auto">
                        <div class="bg-indigo-800 text-white rounded px-5 py-5 md:py-8 md:px-8">
                            <div class="relative">
                                <i @click="isOpen = false" x-ref="modalCloseButton" class="cursor-pointer fa fa-times absolute right-0 text-white"></i>
                            </div>
                            <div class="flex mt-3">
                                <div class=""><i class="fa fa-lock p-3 bg-indigo-400 rounded mr-2"></i></div>
                                <div class="flex flex-col">
                                    <h2 class="font-black capitalize">Can't login?</h2>
                                    <p class="text-gray-300">Restor access to your account.</p>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div>
                                    <label for="email" class="block font-medium text-sm text-gray-400 font-black">
                                        We'll send a recovery email to
                                    </label>
                                    <input placeholder="Your E-mail Address" id="email" class="bg-white text-black form-input rounded-md shadow-sm block mt-1 w-full" type="email" name="email" required autofocus>
                                </div>
                                <br>
                                <button class="bg-white hover:bg-indigo-600 hover:text-white w-full mt-4 text-center py-3 rounded-lg px-4 text-sm font-black text-indigo-800 tracking-widest">
                                    {{ __('Reset password') }}
                                </button>
                            </form>
                            <div class="flex justify-center items-center mt-2">
                                <a href="" class="text-white font-black mt-2 mb-2">I dont have access to my e-mail.</a>
                            </div>
                        </div>
                    </div>

                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="text-2xl capitalize font-black mb-4">Log In.</h1>
                    @if ($errors->any())
                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                        @if($errors->count() > 1)
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                        @else
                        <div class="font-medium text-red-600 font-black">{{$errors->first()}}</div>
                        @endif
                    </ul>
                    <br>
                    @endif

                    @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div>
                        <label class="block font-medium text-sm text-gray-400 font-black">
                            Your E-mail
                        </label>
                        <input id="email" class="form-input rounded-md shadow-sm block mt-1 w-full" type="email" name="email" required autofocus />
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-400 font-black">
                            Password
                        </label>
                        <input id="password" class="form-input rounded-md shadow-sm block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="flex justify-between mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-400 font-black">{{ __('Remember me') }}</span>
                        </label>

                    </div>
                    <button class="bg-indigo-800 w-full mt-4 text-center py-2 rounded-lg px-4 text-sm font-black text-white tracking-widest border border-white hover:border-indigo-800 hover:bg-indigo-800">
                        {{ __('Log In') }}
                    </button>
                    <div class="flex justify-center items-center">
                        <a @click="isOpen = true
                        $nextTick(() => $refs.modalCloseButton.focus())" class="cursor-pointer text-indigo-800 font-black mt-2 mb-2">Can't Login?</a>
                    </div>
                    <hr>
                </form>
                <a href="/register" class="bg-green-600 block w-full mt-3 text-center py-2 rounded-lg px-4 text-sm font-black text-white">Register</a>
            </div>
        </div>
        <div class="lg:block hidden p-10">
            <div class="mb-4 px-10 py-5 rounded-xl">

            </div>
            <div class="flex flex-col justify-center items-center">

            </div>
        </div>
    </x-authCard>
</x-guest-layout>

