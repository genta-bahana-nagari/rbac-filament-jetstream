
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div wire:poll.2000ms class="relative overflow-x-auto">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
    
                <!-- Tabel Data -->
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2">Title</th>
                            <th class="px-4 py-2">Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $index => $post)
                            <tr class="bg-white dark:bg-gray-800">
                                <td scope="row" class="text-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $post->title }}
                                </td>
                                <td scope="row" class="text-center px-6 py-4">
                                {{ $post->content }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    
            </div>  
        </div>
    </div>
</div>

