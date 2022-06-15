<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes Revisions') }}
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                
                
            </div>
        </div> --}}
        @foreach($revisions as $revision)
        <div class="bg-white max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-x-auto">
                <table class="w-full whitespace-nowrap">
                    <tbody>
                        <tr tabindex="0" class="focus:outline-none text-sm leading-none text-gray-600 dark:text-gray-200   h-16">
                            <td class="w-1/3">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 bg-gray-700 rounded-sm flex items-center justify-center">
                                        <p class="text-xs font-bold leading-3 text-white">{{$revision->article->file_extension}}</p>
                                    </div>
                                    <div class="pl-2">
                                        <p class="text-sm font-medium leading-none text-gray-800 dark:text-white ">{{$revision->article->title}}</p>
                                        <p class="text-xs leading-3 text-gray-600 dark:text-gray-200   mt-2">submited in {{$revision->article->conferance->title}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="w-1/6 pl-16">
                                <a href="/articles/{{$revision->article->filename}}" target="_blank"><i class="fa fa-file pl-5"></i></a>
                            </td>
                            <td class="w-1/6 pl-16">
                                <p>#{{$revision->article->conferance->domaine}}</p>
                            </td>
                            <td>
                                @if($revision->rated)
                                <p><span>Note donné: {{$revision->rate}}</span>  
                                    <span class="ml-5">Note Général: {{$revision->note_global}}</span> </p> 
                                @else 
                                <div>
                                    <form method="POST" action="/revision/rate/{{$revision->id}}">  
                                        @csrf                 
                                    <x-input id="note" class="w-1/2"
                                                    type="number"
                                                    name="note" placeholder="Note" required />  

                                                    <x-button class="ml-4">
                                                        {{ __('Submit') }}
                                                    </x-button>
                                    </form>
                                    
                                </div>
                                @endif

                                
                            </td>
                           
                            <td>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @endforeach
    </div>
</x-app-layout>
