<x-app-layout>
    <div class='py-12'>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class='p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg'>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('user.store') }}" class="mt-6 space-y-6">

        @csrf
        <div>
            <x-input-label for="staff_id" :value="__('Staff ID')" />
            <x-text-input id="staff_id" name="total" type="text" class="mt-1 block w-full" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('staff_id')" />
        </div>
        <div>
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" name="method" type="text" class="mt-1 block w-full" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="email" :value="__('email')" />
            <x-text-input id="email" name="status" type="text" class="mt-1 block w-full" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <div>
            <x-input-label for="matric_id" :value="__('matric ID')" />
            <x-text-input id="matric_id" name="total" type="text" class="mt-1 block w-full" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('matric_id')" />
        </div>
        <div>
            <x-input-label for="phonenumber" :value="__('phone number')" />
            <x-text-input id="phonenumber" name="status" type="text" class="mt-1 block w-full" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>
        <div>
            <x-input-label for="gender" :value="__('gender')" />
            <x-text-input id="gender" name="status" type="text" class="mt-1 block w-full" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
        </div>
        <div>
            <x-input-label for="year" :value="__('year')" />
            <x-text-input id="year" name="status" type="text" class="mt-1 block w-full" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('year')" />
        </div>
        <div>
            <x-input-label for="program" :value="__('program')" />
            <x-text-input id="program" name="status" type="text" class="mt-1 block w-full" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('program')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Update') }}</x-primary-button>
            <a href="{{ route('user.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Cancel</a>
        </div>
    </form>
            </div>
        </div>
    </div>
</x-app-layout>