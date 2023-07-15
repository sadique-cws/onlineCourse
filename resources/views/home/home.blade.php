@extends('layouts.base')

@section('css')
    <style>
        .c-card img {
	 transition: transform 0.3s ease-in-out;
}
 .c-card:hover img {
	 transform: scale(1.05);
}
 
    </style>
@endsection

@section('content')

        <section class="bg-teal-200 dark:bg-slate-700 text-slate-900 dark:text-slate-100 md:py-36 md:px-24 p-5 mt-14">
            <div class="container mx-auto flex flex-col gap-2">
                <h1 class="text-4xl font-bold">Learn New Skills with Our Courses</h1>
                <p class="text-lg">Upgrade your knowledge and advance your career with our comprehensive online courses.
                </p>
                <button data-drawer-target="drawer-disable-body-scrolling" data-drawer-show="drawer-disable-body-scrolling" data-drawer-body-scrolling="false" aria-controls="drawer-disable-body-scrolling"  class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-3 px-6 rounded-full w-48 text-center">Browse
                    Courses</button>
            </div>
        </section>

 <!-- drawer component -->
        <!-- Courses Section -->
        <section class="p-5 md:px-12 bg-slate-100 dark:bg-slate-600">
                <h2 class="text-2xl font-bold mb-2 dark:text-slate-50">Popular Courses</h2>
                    <!-- Course Card -->
                    <div class="antialiased text-gray-900 font-sans p-6">
                        <div class="container mx-auto">
                          <div class="flex flex-wrap -mx-4">
                            @foreach ($courses as $item)
                            <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                              <a href="{{route('viewCourse', [$item->category->cat_slug,$item->slug])}}" class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                              <div class="relative pb-56 overflow-hidden">
                                <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('public/images/' . $item->image) }}" alt="">
                              </div>
                              <div class="p-4">
                                <span class="inline-block px-2 py-1 leading-none bg-teal-200 text-teal-800 rounded-full font-semibold uppercase tracking-wide text-xs">{{ $item->category->cat_title }}</span>
                                <h2 class="my-2  font-bold truncate">{{ $item->title }}</h2>
                                <p class="text-sm line-clamp-3">{{ $item->description }}</p>
                                <div class="mt-3 flex items-center">
                                  <span class="text-sm font-semibold">₹</span>&nbsp;<span class="font-bold text-xl">{{ $item->discount_fees }}</span>&nbsp;<span class="text-sm text-slate-400 font-semibold line-through">₹{{ $item->fees }}</span>
                                </div>
                              </div>
                              <div class="p-4 border-t border-b text-xs text-gray-700">
                                <span class="flex items-center mb-1">
                                  <i class="far fa-clock fa-fw mr-2 text-gray-900"></i> {{ $item->duration }} Weeks
                                </span>
                                <span class="flex items-center">
                                  <i class="far fa-address-card fa-fw text-gray-900 mr-2"></i> Offline Class
                                </span>        
                              </div>
                              {{-- <div class="p-4 flex items-center text-sm text-gray-600"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-yellow-500"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current text-gray-400"><path d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z"></path></svg><span class="ml-2">34 Bewertungen</span></div> --}}
                            </a>
                            </div>
                                  
                            @endforeach
                      
                          </div>
                        </div>
                      </div>

                    <!-- Repeat the Course Card HTML for more courses -->

        </section>

@endsection
