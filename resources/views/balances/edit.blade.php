<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Balance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if($errors)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    @foreach($balances as $bal)
                    <form method="POST" action="{{ route('balances-update',['bNo' => $bal->bNo]) }}">
                        @csrf
                        @method('patch')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="xsno" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Student No.</label>
                                <input type="text" name="xsno" value="{{ $bal->sno }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600">
                            </div>
                            <div>
                                <label for="xamountDue" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Amount Due</label>
                                <input type="text" name="xamountDue" value="{{ $bal->amountDue }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600">
                            </div>
                            <div>
                                <label for="xtotalBalance" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Total Balance</label>
                                <input type="text" name="xtotalBalance" value="{{ $bal->totalBalance }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600">
                            </div>
                            <div>
                                <label for="xnotes" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Notes</label>
                                <input type="text" name="xnotes" value="{{ $bal->notes }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600">
                            </div>
                        </div>
                        <div class="flex justify-start mt-4">
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500"> Submit</button>

                        </div>
                        <div class="flex justify-end mt-4">
                            <a class="mt-4 float-left bg-blue-200 text-black font-bold py-2 px-4 rounded" href="{{route('balances')}}">Back </a>

                        </div>


                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
