@extends('layouts.app')

@section('content')
<div class="py-6 sm:py-8 lg:py-12">
    <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
      <!-- text - start -->
      <div class="mb-10 md:mb-16">
        <h2 class="text-zinc-100 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Sampaikan Laporan Anda</h2>
      </div>
      <!-- text - end -->
  
      <!-- form - start -->
      <form class="max-w-screen-md grid sm:grid-cols-2 gap-4 mx-auto">
        <div class="sm:col-span-2">
            <label for="head" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Judul Laporan</label>
            <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
            <input name="head" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
        </div>
        
        <div class="sm:col-span-2">
            <label for="body" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Isi Laporan</label>
            <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
            <textarea name="body" class="w-full h-64 bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2"></textarea>
        </div>
        
        <div>
            <label for="date" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Tanggal Kejadian</label>
            <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
            <input datepicker type="date" name="date" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded block px-3 py-2">
        </div>
  
        <div>
          <label for="lokasi" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Lokasi Kejadian</label>
          <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
          <select name="lokasi" id="lokasi" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded block px-3 py-2">
          </select>
        </div>
        
        <div>
            <label for="instansi" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Instansi Tujuan</label>
            <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
            <select name="instansi" id="instansi" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded block px-3 py-2">
            </select>
        </div>
  
        <div>
          <label for="category" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Kategori</label>
          <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
          <select name="category" id="category" class="w-full bg-zinc-900 text-zinc-100 border-2 border-zinc-700 focus:ring ring-indigo-300 rounded block px-3 py-2">
          </select>
        </div>

        <div class="flex flex-col justify-center w-full sm:col-span-2">
          <div >
            <label for="document" class="inline-block text-zinc-100 text-sm sm:text-base mb-2">Lampiran</label>
            <span class="text-sm font-medium px-2.5 py-0.5 rounded bg-gray-700 text-gray-300 float-right">Required</span>
          </div>
          <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-zinc-700 bg-gradient-to-t from-zinc-900 to-zinc-800 hover:brightness-125 transition ease-in-out duration-300 rounded-lg cursor-pointer">
              <div class="flex flex-col items-center justify-center pt-5 pb-6">
                  <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                  <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                  <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
              </div>
              <input id="dropzone-file" type="file" class="hidden" />
          </label>
        </div> 

        <div class="border-t-2 border-t-zinc-700 sm:col-span-2 pb-5 mt-5"></div>
  
        <div class="sm:col-span-2 flex flex-col justify-between items-center gap-3">
          <button class="inline-block w-full bg-zinc-800 hover:bg-zinc-700 border-2 border-zinc-700 active:bg-zinc-900 focus-visible:ring ring-indigo-300 text-zinc-100 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Draft</button>
          <button class="inline-block w-full bg-zinc-900 hover:bg-zinc-800 border-2 border-zinc-700 active:bg-zinc-900 focus-visible:ring ring-indigo-300 text-emerald-500 text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Submit</button>
        </div>
      </form>
      <!-- form - end -->
    </div>
  </div>
@endSection