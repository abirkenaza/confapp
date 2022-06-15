<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mes Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-White border-b border-gray-200">
                    This article will be submitted in 
                    {{$conf->title}}
                    <form action="/article/store" method="POST" enctype="multipart/form-data">    
                        @csrf
                        <div class="mt-5 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <label for="title" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Title</label>
                            <input tabindex="0" type="text" id="title" name="title" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="title of the article" />
                        </div>

                        <div class="mt-5 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <label for="description" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">Description</label>
                            <textarea tabindex="0" rows="3" id="description" name="description" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="description of the article" ></textarea>
                        </div>

                        <div class="mb-5 mt-5 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
                            <label for="file" class="pb-2 text-sm font-bold text-gray-800 dark:text-gray-100">File</label>
                            <input tabindex="0" type="file" id="file" name="file" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="article's file" />
                        </div>
                        
                        <input type="text" name="confId" id="confId" value="{{$conf->id}}" hidden>

                        <button type="submit" style="background-color: #0F45FF; /* Bleu */
  border: none;
  color: white;
  padding: 10px 28px;
  margin:10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;"
                        
                        >Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
