<x-guest-layout>
    <x-authCard>
        <div class="bg-white" x-data={isOpen:false}>
            <div class="p-2 md:p-8">
                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                @livewire('register')
            </div>
        </div>
    </x-authCard>
</x-guest-layout>
