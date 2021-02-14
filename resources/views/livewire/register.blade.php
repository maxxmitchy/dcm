<form method="POST" wire:submit.prevent="store">
    @csrf
    <h1 class="text-2xl capitalize font-black mb-4">Sign In.</h1>
    <div class="grid md:grid-cols-2 gap-3">
        <div>
            <label class="text-sm sm:text-baseblock font-black text-gray-400" for="name" value="{{ __('Name') }}">Name</label>
            <input wire:model.lazy="name" id="name" class="form-input rounded-md shadow-sm block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" />
            @error('name') <span class="block text-sm mt-1 text-red-600">{{$message}}</span> @enderror
        </div>

        <div class="">
            <label class="text-sm sm:text-baseblock font-black text-gray-400" for="email" value="{{ __('Email') }}">Email</label>
            <input wire:model.lazy="email" id="email" class="form-input rounded-md shadow-sm block mt-1 w-full" type="email" name="email" :value="old('email')" />
            @error('email') <span class="text-sm mt-1 text-red-600">{{$message}}</span> @enderror
        </div>
    </div>

    <div class="grid md:grid-cols-2 gap-3">
        <div class="mt-4">
            <label class="text-sm sm:text-baseblock font-black text-gray-400" for="password" value="{{ __('Password') }}">Password</label>
            <input wire:model.lazy="password" id="password" class="form-input rounded-md shadow-sm block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
            @error('password') <span class="block text-sm mt-1 text-red-600">{{$message}}</span> @enderror
        </div>

        <div class="mt-4">
            <label class="text-sm sm:text-baseblock font-black text-gray-400" for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
            <input wire:model.lazy="password_confirmation" id="password_confirmation" class="form-input rounded-md shadow-sm block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" />
            @error('password_confirmation') <span class="block text-sm mt-1 text-red-600">{{$message}}</span> @enderror
        </div>
    </div>

    <div class="flex justify-between mt-4">
        <label class="block font-black text-gray-500" for="remember_me" class="flex items-center">
            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
            <span class="ml-2 text-sm text-gray-400 font-black">{{ __('By creating an account, you agree to our') }} <a href="" class="">terms of use</a> and our <a href="">privacy policy</a></span>
        </label>

    </div>

    <button class="bg-indigo-800 w-full mt-4 text-center py-3 rounded-lg px-4 text-sm font-black text-white uppercase tracking-widest border border-white hover:border-indigo-800 hover:bg-indigo-800">
        {{ __('Register') }}
    </button>
</form>
