<x-app-layout>
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                
            </div>
        </div> --}}
        
        <div class="container w-full flex justify-center mx-auto">
            <div class="flex flex-col">
                <div class="w-full">
                    <div class="border-b border-gray-200 shadow">
                        <table>
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Article
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Conferance
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Date
                                    </th>
                                    <th class="px-6 py-2 text-xs text-gray-500">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach($articles as $article)
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        {{$article->title}}  
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-900">
                                            {{$article->conferance->title}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                            Shared on {{$article->created_at}}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <a href="/articles/{{$article->filename}}" target="_blank"><i class="fa fa-file pl-5"></i></a>
                                        <a href="/articles/delete/{{$article->id}}"><i class="fa fa-trash pl-5"></i></a>                      
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
