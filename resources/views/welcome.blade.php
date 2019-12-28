@extends('layout')
@section('main')
    <div class="flex flex-col">
        <div class="w-full flex-shrink-0 flex justify-center items-center py-5 px-5 lg:px-0">
            <form action="{{route('todo.store')}}" method="post" class="lg:w-1/3 w-full mx-auto">
                @csrf
                <input name="name" class="w-full text-center text-3xl lg:text-5xl font-normal px-4 py-2 bg-transparent focus:outline-none"
                type="text" placeholder="Enter your todo">
            </form>
        </div>
        <div class="flex-1">
            <div class="w-1/2 mx-auto">
                @foreach($todos as $todo)
                    @if($loop->first)
                    <div class="bg-gray-100 text-blue-800 px-4 py-4 rounded-lg flex items-center">
                        <div class="w-6 text-center">
                            <input class="" type="radio" />
                        </div>
                        <div class="text-left px-3 flex-1 truncate">
                            <h2 class="truncate">{{$todo->name}}</h2>
                        </div>
                        <div class="w-16 flex items-center justify-center">
                            <form method="post" class="flex items-center justify-center" action="{{route('todo.destroy',['todo'=>$todo->id])}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-center font-bold text-xl inline-block mr-2 focus:outline-none">
                                    X
                                </button>
                            </form>
                            <a href="" class="text-center inline-block">
                                <svg class="w-6 h-6 fill-current text-blue-800" xmlns="http://www.w3.org/2000/svg">
                                    <path class="heroicon-ui" d="M6.3 12.3l10-10a1 1 0 011.4 0l4 4a1 1 0 010 1.4l-10 10a1 1 0 01-.7.3H7a1 1 0 01-1-1v-4a1 1 0 01.3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 012 0v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2h6a1 1 0 010 2H4v14h14v-6z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @else
                    <div class="bg-gray-100 text-blue-800 px-4 py-4 rounded-lg flex items-center mt-4">
                        <div class="w-6 text-center">
                            <input class="" type="radio" />
                        </div>
                        <div class="text-left px-3 flex-1 truncate">
                            <h2 class="truncate">{{$todo->name}}</h2>
                        </div>
                        <div class="w-16 flex items-center justify-center">
                            <form method="post" class="flex items-center justify-center" action="{{route('todo.destroy',['todo'=>$todo->id])}}">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="text-center font-bold text-xl inline-block mr-2 focus:outline-none">
                                   X
                                </button>

                            </form>

                            <a class="text-center inline-block">
                                <svg class="w-6 h-6 fill-current text-blue-800" xmlns="http://www.w3.org/2000/svg">
                                    <path class="heroicon-ui" d="M6.3 12.3l10-10a1 1 0 011.4 0l4 4a1 1 0 010 1.4l-10 10a1 1 0 01-.7.3H7a1 1 0 01-1-1v-4a1 1 0 01.3-.7zM8 16h2.59l9-9L17 4.41l-9 9V16zm10-2a1 1 0 012 0v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6c0-1.1.9-2 2-2h6a1 1 0 010 2H4v14h14v-6z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection
