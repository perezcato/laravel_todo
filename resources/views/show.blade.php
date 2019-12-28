@extends('layout')

@section('main')
    <div class="wrapper">
        <div class="w-1/3 mx-auto py-6 relative">
            <div class="flex">
                <a class="mr-2" href="#">
                    <svg class="w-6 h-6 fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg">
                        <path class="heroicon-ui" d="M6.3 12.3l10-10a1 1 0 011.4 0l4 4a1 1 0 010 1.4l-10 10a1 1 0 01-.7.3H7a1 1 0 01-1-1v-4a1 1 0 01.3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 012 0v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2h6a1 1 0 010 2H4v14h14v-6z"/>
                    </svg>
                </a>
                <a class="" href="#">
                    <svg class="w-6 h-6 fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg">
                        <path class="heroicon-ui" d="M6.3 12.3l10-10a1 1 0 011.4 0l4 4a1 1 0 010 1.4l-10 10a1 1 0 01-.7.3H7a1 1 0 01-1-1v-4a1 1 0 01.3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 012 0v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2h6a1 1 0 010 2H4v14h14v-6z"/>
                    </svg>
                </a>
            </div>

            <input class="w-full mt-3 text-xl text-gray-100
             rounded-lg px-4 py-3 bg-blue-900
             appearance-none focus:outline-none focus:shadow-outline" type="text" disabled value="this is the task">
            <textarea class="w-full block h-48 leading-none mt-3 text-left rounded-lg px-4 py-3 appearance-none
             bg-blue-900 focus:outline-none focus:shadow-outline " name="description" disabled>
            </textarea>
        </div>
    </div>
@endsection
