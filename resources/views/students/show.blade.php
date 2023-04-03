<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">

                    <h6>List of Students</h6><br />
                    <table class="table-auto border border-gray-800">
                        <thead>
                            <tr>
                            <th class="px-4 py-2 border border-gray-800">ID No.</th>
                            <th class="px-4 py-2 border border-gray-800">Full Name</th>
                            <th class="px-4 py-2 border border-gray-800">Course & Year</th>
                            <th class="px-4 py-2 border border-gray-800">Birth Date</th>
                            <th class="px-4 py-2 border border-gray-800">Gender</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($studentinfo as $stuinfo)
                                <tr>
                                    <td class="px-4 py-2 border border-gray-800">{{ $stuinfo->idNo }}</td>
                                    <td class="px-4 py-2 border border-gray-800">{{ $stuinfo->firstName }}  {{ $stuinfo->middleName }} {{ $stuinfo->lastName }}</td>
                                    <td class="px-4 py-2 border border-gray-800">{{ $stuinfo->course }} - {{ $stuinfo->year }}</td>
                                    <td class="px-4 py-2 border border-gray-800">{{ date("F j, Y", strtotime($stuinfo->birthDate)) }}</td>
                                    <td class="px-4 py-2 border border-gray-800">{{ $stuinfo->gender }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="mt-4 float-left bg-blue-200 text-black font-bold py-2 px-4 rounded" href="{{ route('students') }}">Back</a>
                    <br /><br /><br />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
