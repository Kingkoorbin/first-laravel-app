<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Grades') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-center">
                        <a href="{{ route('grades-add')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">Add Student Grades</a>
                    </div>
                    <h6 class="mt-4 text-2xl font-bold">Student Grades</h6><br>
                    <div class="overflow-x-auto">
                        <table class="table-auto border-collapse">
                            <thead>
                                <tr>
                                    <th class="border border-gray-500 px-4 py-2">Student Name</th>
                                    <th class="border border-gray-500 px-4 py-2">Enrolled Subject</th>
                                    <th class="border border-gray-500 px-4 py-2">Prelim</th>
                                    <th class="border border-gray-500 px-4 py-2">Midterm</th>
                                    <th class="border border-gray-500 px-4 py-2">Finals</th>
                                    <th class="border border-gray-500 px-4 py-2">Remarks</th>
                                    <th class="border border-gray-500 px-4 py-2">View</th>
                                    <th class="border border-gray-500 px-4 py-2">Edit</th>
                                    <th class="border border-gray-500 px-4 py-2">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($grades as $grad)
                                <tr>
                                    <td class="border border-gray-500 px-4 py-2">{{$grad->lastName}}, {{$grad->firstName}} {{$grad->middleName}} {{$grad->suffix}}</td>
                                    <td class="border border-gray-500 px-4 py-2">{{$grad->description}}</td>
                                    <td class="border border-gray-500 px-4 py-2">{{$grad->prelim}}</td>
                                    <td class="border border-gray-500 px-4 py-2">{{$grad->midterm}}</td>
                                    <td class="border border-gray-500 px-4 py-2">{{$grad->finals}}</td>
                                    <td class="border border-gray-500 px-4 py-2">{{$grad->Remarks}}</td>
                                    <td class="border border-gray-500 px-4 py-2">
                                        <a class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded mr-2">View</a>


                                    </td>
                                    <td class="border border-gray-500 px-4 py-2">
                                        <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                    </td>
                                    <td class="border border-gray-500 px-4 py-2">
                                        <form method="POST" onclick="return confirm('Are you sure you want to delete this record?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
