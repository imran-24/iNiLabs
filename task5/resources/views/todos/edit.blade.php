<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form class="flex flex-col  gap-x-4" action="{{ route("todos.update", $todo) }}" method="post">
                        @csrf
                        @method("PUT")
                        <div>
                            <label class="block font-medium text-sm text-gray-700"  for="name">Title:</label>
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required type="text" name="name" value="{{ $todo->title }}">
                        </div>
                        <div>
                            <label class="block font-medium text-sm text-gray-700"  for="name">Description:</label>
                            <textarea rows="5"  class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required type="text" name="description">{{$todo->description}}</textarea>    
                        </div>
                        <button class="inline-flex w-fit  items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" type="submit">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
