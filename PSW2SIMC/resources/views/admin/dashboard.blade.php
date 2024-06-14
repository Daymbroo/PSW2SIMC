<x-app-layout>
    <style>
        body {
            background-color: #121212; /* Dark background color for the entire page */
            color: #ffffff; /* Light text color for readability */
        }
        .min-h-screen {
            background-color: #121212; /* Dark background for the minimum height screen class */
        }
        .bg-white {
            background-color: #1e1e1e; /* Dark background for the container */
        }
        .text-gray-800 {
            color: #ffffff; /* Adjust text color for header */
        }
        .text-gray-900 {
            color: #e0e0e0; /* Adjust text color for main content */
        }
        a {
            color: #1e90ff; /* Adjust link color for better visibility */
        }
        .shadow-sm {
            box-shadow: none; /* Remove shadow to prevent any unintended light effects */
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Messages For Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1>Messages</h1>
                    <ul>
                        @foreach($messages as $message)
                            <li>
                                <strong>Name:</strong> {{ $message->name }}<br>
                                <strong>Email:</strong> {{ $message->email }}<br>
                                <strong>Contact Information:</strong> {{ $message->contact_information }}<br>
                                <strong>Message:</strong> {{ $message->message }}<br>
                                <strong>Created At:</strong> {{ $message->created_at }}
                            </li>
                            <br>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
