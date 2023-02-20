@extends('layouts.app')

@section('content')
<div class="py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
      <!-- text - start -->
      <div class="mb-10 md:mb-16">
        <h2 class="text-zinc-100 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Laporan</h2>

        <form>
            <div class="flex">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-zinc-100 sr-only">Your Email</label>
                <button id="dropdown-button" data-dropdown-toggle="categories" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-zinc-100 bg-zinc-800 border-2 border-zinc-700 rounded-l-md hover:bg-zinc-700 focus:ring-4 focus:outline-none focus:ring-indigo-400" type="button">All categories <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
                <div id="categories" class="z-10 hidden bg-zinc-800 bg-gradient-to-t from-zinc-900 divide-x-2 divide-zinc-700 rounded-md shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-zinc-100 divide-y-2 divide-zinc-700" aria-labelledby="dropdown-button">
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-zinc-700">Mockups</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-zinc-700">Templates</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-zinc-700">Design</button>
                    </li>
                    <li>
                        <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-zinc-700">Logos</button>
                    </li>
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-zinc-100 bg-zinc-800 rounded-r-md border-l-zinc-700 border-l-2 border-zinc-700 focus:ring-blue-400 focus:border-blue-500" placeholder="Search Mockups, Logos, Design Templates..." required>
                    <button type="submit" class="absolute top-0 right-0 bottom-0 p-2.5 text-sm font-medium text-zinc-100 border-2 bg-zinc-800 rounded-r-md border-zinc-700 hover:bg-zinc-700 focus:ring-4 focus:outline-none focus:ring-indigo-600">
                        <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
      </div>
      <!-- text - end -->
  
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-8">
        <!-- article - start -->
          <a href="{{ Route('laporan.create') }}" class="flex flex-col gap-4 justify-center items-center bg-black bg-gradient-to-b from-zinc-800 border-2 border-zinc-700 text-zinc-400 rounded-md overflow-hidden shadow-2xl transition ease-in-out  hover:brightness-150 hover:text-zinc-400 cursor-pointer active:brightness-90 duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-plus-circle h-16 w-16" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
              </svg>
              <label class="text-center font-bold">Pengaduan baru</label>
          </a>
        <!-- article - end -->
        
        <!-- article - start -->
        <div class="flex flex-col bg-zinc-800 border-2 border-zinc-700 rounded-md overflow-hidden shadow-2xl">
          <a href="#" class="group h-48 md:h-64 block bg-zinc-800 overflow-hidden relative">
            <img src="https://images.unsplash.com/photo-1618556450991-2f1af64e8191?auto=format&q=75&fit=crop&w=1000" loading="lazy" alt="Photo by Minh Pham" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />
          </a>
  
          <div class="flex flex-col flex-1 p-4 sm:p-6">
            <h2 class="text-zinc-100 text-lg font-semibold mb-2">
              <a href="#" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">New trends in Tech</a>
            </h2>
  
            <p class="text-zinc-100 mb-8">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>
  
            <div class="flex justify-between items-end mt-auto">
              <div class="flex items-center gap-2">
                <div>
                  <span class="block text-zinc-400 text-sm">July 19, 2021</span>
                </div>
              </div>
  
              <span class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-yellow-900 text-yellow-300">On process</span>
            </div>
          </div>
        </div>
        <!-- article - end -->
        
        <!-- article - start -->
        <div class="flex flex-col bg-zinc-800 border-2 border-zinc-700 rounded-md overflow-hidden shadow-2xl">
          <a href="#" class="group h-48 md:h-64 block bg-zinc-800 overflow-hidden relative">
          </a>
  
          <div class="flex flex-col flex-1 p-4 sm:p-6">
            <h2 class="text-zinc-100 text-lg font-semibold mb-2">
              <a href="#" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">New trends in Tech</a>
            </h2>
  
            <p class="text-zinc-100 mb-8">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>
  
            <div class="flex justify-between items-end mt-auto">
              <div class="flex items-center gap-2">
                <div>
                  <span class="block text-zinc-400 text-sm">July 19, 2021</span>
                </div>
              </div>
  
              <span class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-gray-700 text-gray-300">Closed</span>
            </div>
          </div>
        </div>
        <!-- article - end -->
        
        <!-- article - start -->
        <div class="flex flex-col bg-zinc-800 border-2 border-zinc-700 rounded-md overflow-hidden shadow-2xl">
          <a href="#" class="group h-48 md:h-64 block bg-zinc-800 overflow-hidden relative">
          </a>
  
          <div class="flex flex-col flex-1 p-4 sm:p-6">
            <h2 class="text-zinc-100 text-lg font-semibold mb-2">
              <a href="#" class="hover:text-indigo-500 active:text-indigo-600 transition duration-100">New trends in Tech</a>
            </h2>
  
            <p class="text-zinc-100 mb-8">This is a section of some simple filler text, also known as placeholder text. It shares some characteristics of a real written text.</p>
  
            <div class="flex justify-between items-end mt-auto">
              <div class="flex items-center gap-2">
                <div>
                  <span class="block text-zinc-400 text-sm">July 19, 2021</span>
                </div>
              </div>
  
              <span class="text-sm font-medium mr-2 px-2.5 py-0.5 rounded bg-green-900 text-green-300">Open</span>
            </div>
          </div>
        </div>
        <!-- article - end -->
      </div>
    </div>
  </div>
@endSection