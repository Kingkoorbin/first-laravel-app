<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Students Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h6 class="text-lg font-bold">Errors Encountered</h6><br /><br />
                    @if($errors)
                    <ul class="list-disc list-inside">
                        @foreach($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    @foreach($studentinfo as $stuinfo)
                    <form method="POST" action="{{ route('students-update',['stuno' => $stuinfo->sno]) }}">
                        @csrf
                        @method('patch')
                        <div></div>
                        <div class="flex flex-col items-start">
                            <label for="ID Number" class="text-sm font-medium text-gray-700 dark:text-gray-200">ID Number</label>
                            <div class="mt-1">
                                <input type="text" name="xidNo" value="{{$stuinfo->idNo}}" class="px-4 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600" />
                            </div>
                        </div><br />
                        <div class="flex flex-col items-start">
                            <label for="First Name" class="text-sm font-medium text-gray-700 dark:text-gray-200">First Name</label>
                            <div class="mt-1">
                                <input type="text" name="xfirstName" value="{{$stuinfo->firstName}}" class="px-4 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600" />
                            </div>
                        </div><br />
                        <div class="flex flex-col items-start">
                            <label for="Middle Name" class="text-sm font-medium text-gray-700 dark:text-gray-200">Middle Name</label>
                            <div class="mt-1">
                                <input type="text" name="xmiddleName" value="{{$stuinfo->middleName}}" class="px-4 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600" />
                            </div>
                        </div><br />
                        <div class="flex flex-col items-start">
                            <label for="Last Name" class="text-sm font-medium text-gray-700 dark:text-gray-200">Last Name</label>
                            <div class="mt-1">
                                <input type="text" name="xlastName" value="{{$stuinfo->lastName}}" class="px-4 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600" />
                            </div>
                        </div><br />
                        <div class="flex flex-col items-start">
                            <label for="Suffix" class="text-sm font-medium text-gray-700 dark:text-gray-200">Suffix</label>
                            <div>
                                <input type="text" name="xsuffix" value="{{$stuinfo->suffix}}" class="px-4 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600" />
                            </div>
                        </div><br />
                        <div class="flex flex-col items-start">
                            <label for="Course" class="text-sm font-medium text-gray-700 dark:text-gray-200">Course</label>
                            <div>
                                <input type="text" name="xcourse" value="{{$stuinfo->course}}" class="px-4 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600" />
                            </div>
                        </div><br />
                        <div class="flex flex-col items-start">
                            <label for="Year" class="text-sm font-medium text-gray-700 dark:text-gray-200">Year</label>
                            <div>
                                <input type="number" min="1" max="4" name="xyear" value="{{$stuinfo->year}}" class="px-4 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600" />
                            </div>
                        </div><br />
                        <div class="flex flex-col items-start">
                            <label for="birthDate" class="text-sm font-medium text-gray-700 dark:text-gray-200">Birth Date</label>
                            <div>
                                <input type="date" name="xbirthDate" value="{{$stuinfo->birthDate}}" class="px-4 py-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-600" />
                            </div>
                        </div><br />
                        <div class="flex flex-col items-start">
                            <label for="gender" class="text-sm font-medium text-gray-700 dark:text-gray-200">Gender</label>
                            <div class="mt-1">
                                <select name="xgender" id="gender" class="block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div><br />
                        <div class="flex justify-start mt-4">
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-md hover:bg-indigo-500"> Submit</button>

                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
