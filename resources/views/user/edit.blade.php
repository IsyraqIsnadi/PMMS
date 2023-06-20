<x-app-layout>
    <div class='py-12'>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class='p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg'>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('user.update', $user->id) }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
        <div>
            <x-input-label for="staff_id" :value="__('Staff ID')" />
            <x-text-input id="staff_id" name="staff_id" type="text" class="mt-1 block w-full" value="{{ old('staff_id', $user->staff_id) }}" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('staff_id')" />
        </div>
        <div>
            <x-input-label for="name" :value="__('name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{ old('name', $user->name) }}" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="email" :value="__('email')" />
            <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" value="{{ old('email', $user->email) }}"  required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
        </div>
        <div>
            <x-input-label for="matric_id" :value="__('matric ID')" />
            <x-text-input id="matric_id" name="matric_id" type="text" class="mt-1 block w-full" value="{{ old('matric_id', $user->matric_id) }}" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('matric_id')" />
        </div>
        <div>
            <x-input-label for="phone_number" :value="__('phone number')" />
            <x-text-input id="phone_number" name="phone_number" type="text" class="mt-1 block w-full" value="{{ old('phone_number', $user->phone_number) }}"  required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('phone_number')" />
        </div>
        <div>
            <x-input-label for="gender" :value="__('gender')" />
            <x-text-input id="gender" name="gender" type="text" class="mt-1 block w-full" value="{{ old('gender', $user->gender) }}" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('gender')" />
        </div>
        <div>
            <x-input-label for="year" :value="__('year')" />
            <x-text-input id="year" name="year" type="text" class="mt-1 block w-full" value="{{ old('year', $user->year) }}" required autofocus autocomplete="task" />
            <x-input-error class="mt-2" :messages="$errors->get('year')" />
        </div>
        <div>
            <x-input-label for="program" :value="__('program')" />
            <x-text-input id="program" name="program" type="text" class="mt-1 block w-full" value="{{ old('program', $user->program) }}" required autofocus autocomplete="task" />
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