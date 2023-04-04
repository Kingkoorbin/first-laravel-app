<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Balances') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h6>Errors Encountered:</h6>
                    @if($errors)
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <br /><br>
                    <form method="POST" action="{{ route('balances-store') }}">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col">
                                <label for="Select Student" class="font-bold">Select Student:</label>
                                @foreach ($studentinfo as $stuinfo)
                                <select name="xsno" class="border border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent">
                                    <option value="{{ $stuinfo->sno }}">{{$stuinfo->idNo}} - {{$stuinfo->lastName}}, {{$stuinfo->firstName}} {{$stuinfo->middleName}} {{$stuinfo->suffix}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label for="amountDue" class="font-bold">Amount Due:</label>
                                <input type="text" name="xamountDue" value="{{ old('xamountDue') }}" class="border border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" />
                            </div>
                            <div class="flex flex-col">
                                <label for="totalBalance" class="font-bold">Total Balance:</label>
                                <input type="text" name="xtotalBalance" value="{{ old('xtotalBalance') }}" class="border border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" />
                            </div>
                            <div class="flex flex-col">
                                <label for="Notes" class="font-bold">Notes:</label>
                                <input type="text" name="xnotes" value="{{ old('xnotes') }}" class="border border-gray-300 px-2 py-1 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent" />
                            </div>
                        </div>
                        <br> <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500">Add</button><br>

                        <a class="mt-4 float-left bg-blue-200 text-black font-bold py-2 px-4 mb-5 rounded" href="{{route('balances')}}"> Back </a><br />
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
