<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Todos') }}
            </h2>
            <a class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150" href="{{ route("todos.create") }}">Create</a>    
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        @foreach ($todos as $todo)
                            <div class="flex flex-col gap-3 p-4 border rounded-lg shadow-md bg-white">
                                <div class="text-lg font-semibold text-blue-600">
                                    <a href="#">{{ $todo->title }}</a>
                                    <p class="text-sm text-black">{{ $todo->description }}</p>
                                </div>
                                <div class="flex justify-between items-center mt-2">
                                    <div class="flex space-x-2">
                                        <x-secondary-button>
                                            <a href="{{ route('todos.edit', $todo) }}" class="text-sm">Edit</a>
                                        </x-secondary-button>
                                        <form action="{{ route('todos.destroy', $todo) }}" method="post" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button type="submit" class="text-sm" onclick="return confirm('Are you sure?')">
                                                Delete
                                            </x-danger-button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</x-app-layout>
