<x-app-layout>
    <div class="py-8">
        <div class="max-w-2xl mx-auto px-4">
            <div class="p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <!-- Form for sending verification -->
                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>

                <!-- Payment form -->
                <form method="post" action="{{ route('payment.store') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <label for="item" class="block text-sm font-medium text-gray-700">Item</label>
                        <!-- Input for item name -->
                        <input id="item" name="item" type="text" class="mt-1 block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required autofocus autocomplete="off" placeholder="Enter item name">
                        <!-- Display input error messages for item -->
                        <x-input-error class="mt-2" :messages="$errors->get('item')" />
                    </div>

                    <div>
                        <label for="total" class="block text-sm font-medium text-gray-700">Total (RM)</label>
                        <!-- Input for total amount -->
                        <input id="total" name="total" type="text" class="mt-1 block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required autofocus autocomplete="off" placeholder="Enter total amount">
                        <!-- Display input error messages for total -->
                        <x-input-error class="mt-2" :messages="$errors->get('total')" />
                    </div>

                    <div>
                        <label for="method" class="block text-sm font-medium text-gray-700">Method</label>
                        <!-- Input for payment method -->
                        <input id="method" name="method" type="text" class="mt-1 block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required autofocus autocomplete="off" placeholder="Enter payment method">
                        <!-- Display input error messages for method -->
                        <x-input-error class="mt-2" :messages="$errors->get('method')" />
                    </div>

                    <div>
                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                        <!-- Input for payment status -->
                        <input id="status" name="status" type="text" class="mt-1 block w-full px-4 py-2 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" required autofocus autocomplete="off" placeholder="Enter payment status">
                        <!-- Display input error messages for status -->
                        <x-input-error class="mt-2" :messages="$errors->get('status')" />
                    </div>

                    <div class="flex items-center space-x-4">
                        <!-- Save button -->
                        <button type="submit" class="bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 text-white font-medium rounded-lg text-sm px-4 py-2 transition duration-150 ease-in-out">Save</button>
                        <!-- Cancel button -->
                        <a href="{{ route('payment.index') }}" class="text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 transition duration-150 ease-in-out">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
