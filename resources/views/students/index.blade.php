<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Information') }}
        </h2>
    </x-slot>
<div class="py-12 flex justify-center items-center">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <div class="flex justify-center">
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4" href="{{ route('add-student') }}">Add Student Information</a>
                </div>

                <h6 class="mt-4 text-2xl font-bold">{{ __('List of Students') }}</h6><br>
                <table class="table-auto border-collapse">
                    <thead>
                        <tr>
                            <th class="border border-gray-500 px-4 py-2">{{ __('ID No.') }}</th>
                            <th class="border border-gray-500 px-4 py-2">{{ __('Full Name') }}</th>
                            <th class="border border-gray-500 px-4 py-2">{{ __('Course & Year') }}</th>
                            <th class="border border-gray-500 px-4 py-2">{{ __('Birth Date') }}</th>
                            <th class="border border-gray-500 px-4 py-2">{{ __('Gender') }}</th>
                            <th class="mr-2"></th>
                            <th class="border border-gray-500 px-4 py-2">{{ __('View') }}</th>
                            <th class="border border-gray-500 px-4 py-2">{{ __('Edit') }}</th>
                            <th class="border border-gray-500 px-4 py-2">{{ __('Delete') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studentinfo as $stuinfo)
                            <tr>
                                <td class="border border-gray-500 px-4 py-2">{{ $stuinfo->idNo }}</td>
                                <td class="border border-gray-500 px-4 py-2">{{ $stuinfo->firstName }}  {{ $stuinfo->middleName }} {{ $stuinfo->lastName }}</td>
                                <td class="border border-gray-500 px-4 py-2">{{ $stuinfo->course }} - {{ $stuinfo->year }}</td>
                                <td class="border border-gray-500 px-4 py-2">{{ date("F j, Y", strtotime($stuinfo->birthDate)) }}</td>
                                <td class="border border-gray-500 px-4 py-2">{{ $stuinfo->gender }}</td>
                                <td class="mr-2"></td>
                                <td class="border border-gray-500 px-4 py-2">
                                    <a class="bg-teal-500 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded mr-2" href="{{ route('students-show', ['stuno' => $stuinfo->sno]) }}">{{ __('View') }}</a>
                                </td>
                                <td class="border border-gray-500 px-4 py-2">
                                <a class="bg-violet-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2" href= "{{route('students-edit', ['stuno' => $stuinfo->sno]) }}">{{ __('Edit') }}</a>
                                </td>
                                <td class="border border-gray-500 px-4 py-2">
                                <form method="POST" action = "{{ route('students-delete', ['stuno' => $stuinfo->sno ])  }}" onclick="return confirm('Are you sure you want to delete this record?')">@csrf
                                    @method('delete')
                                <button class=" bg-red-200 hover:bg-red-300 text-white font-bold py-2 px-4 rounded mr-2" type="submit" >{{ __('Delete') }}</button>
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
