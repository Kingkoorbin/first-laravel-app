<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student Information') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('add-student') }}">Add Student Information</a>
                    <h6>List of Students</h6>
                    <table class="border-separate border-spacing-5">
                        <thead>
                            <tr>
                            <th>ID No.</th>
                            <th>Full Name</th>
                            <th>Course & Year</th>
                            <th>Birth Date</th>
                            <th>Gender</th>
                            <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
