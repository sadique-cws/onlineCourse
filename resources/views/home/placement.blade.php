@extends('layouts.base')

@section('content')

<section class="dark:bg-teal-900 bg-teal-300 dark:text-white text-black md:py-7 md:px-24 p-4 md:mt-20 mt-14">
    <div class="container mx-auto flex flex-col gap-2">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1">
            <li class="inline-flex items-center">
                <a href="{{ route('homepage') }}"
                    class="inline-flex items-center text-sm font-medium text-black dark:text-slate-50 dark:hover:text-white">
                    <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center ">
                    <svg class="w-3 h-3 dark:text-gray-100 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="{{ route('placements') }}"
                        class="ml-1 text-sm font-medium text-black hover:text-slate-50 md:ml-2 dark:text-slate-50 dark:hover:text-white">Achievement</a>
                </div>
            </li>


        </ol>
    </nav>
        <h1 class="text-4xl font-bold">Our Students</h1>
        
        
    </div>
</section>
<section class="text-gray-600 body-font">
    <div class="container md:px-16  md:py-5 mx-auto p-5">
      <div class="grid grid-cols-1 md:grid-cols-2 -m-2 gap-3">
        
        @foreach ($newplacements as $item)
            
        <div class="w-full">
            <div class="h-full flex dark:border-slate-800 border shadow rounded-sm sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left dark:text-slate-200">
              <img alt="team" class="flex-shrink-0 md:w-32 md:h-32 object-center object-cover sm:mb-0 mb-4 w-full" src="{{ $item->user->picture ? asset("public/".$item->user->picture) : 'public/img/default.jpg' }}">
              <div class="flex-grow sm:pl-8 p-4">
                <h2 class="title-font font-medium text-lg dark:text-white text-gray-900">{{ $item->user->name }}</h2>
                <h3 class="text-gray-500 mb-1">{{ $item->role }}</h3>
                <p class="mb-2 font-semibold text-sm">Company: <span class="text-blue-800">{{ $item->company_name }}</span></p>
                <p class="mb-4 text-xs">{{ $item->description }}</p>
              </div>
            </div>
          </div>

        @endforeach
        
        @foreach ($placements as $item)
            
        <div class="w-full">
            <div class="h-full flex dark:text-slate-200 dark:border-slate-800 border shadow rounded-sm sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
              <img alt="team" class="flex-shrink-0 md:w-32 md:h-32 w-full h-96 bg-top object-cover sm:mb-0 mb-4 w-full" src="{{ asset('public/img/placement/'.$item->image) }}">
              <div class="flex-grow sm:pl-8 p-4">
                <h2 class="title-font font-medium text-xl dark:text-white text-gray-900">{{ $item->name }}</h2>
                <h3 class="dark:text-gray-300 text-gray-500 text-sm mb-1">{{ $item->role }}</h3>
                <p class="mb-2 font-semibold text-sm">Company: <span class="dark:text-slate-100 text-blue-800">{{ $item->company_name }}</span></p>
                <p class="mb-4 text-xs">{{ $item->description }}</p>
              </div>
            </div>
          </div>

        @endforeach
    
      </div>
    </div>
  </section>
@endsection
