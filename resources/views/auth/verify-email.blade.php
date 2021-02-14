<x-guest-layout>
    <x-authCard>
        <div class="h-full flex-col m-5 w-100">
            <div class="bg-white rounded-lg mb-4 p-3 shadow-lg text-md sm:text-lg text-gray-600">
                <b class="block">Hello,</b>
                <br>
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-button>
                            {{ __('Resend Verification Email') }}
                        </x-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="uppercase ml-5 underline text-sm text-white hover:text-gray-900">
                        {{ __('Logout') }}
                    </button>
                </form>
            </div>
        </div>


    </x-authCard>
</x-guest-layout>
