@extends('layouts.base')

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
                <div class="grid md:grid-cols-2 gap-8 grid-cols-1">
                    <!-- Course Card -->
                    @foreach ($courses as $item)
                        <a href="{{route('viewCourse', [$item->category->cat_slug,$item->slug])}}"
                            class="flex transition hover:-translate-y-1 hover:scale-105 flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 hover:shadow-lg">
                            <img class="object-cover w-full rounded-t-lg h-fit md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                                src="{{ asset('public/images/' . $item->image) }}" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <h5 class="mb-1 text-lg truncate font-bold tracking-tight text-gray-900 dark:text-white">
                                    {{ $item->title }}</h5>
                                <!--<div class="flex items-center my-1">-->
                                <!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"-->
                                <!--        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">-->
                                <!--        <title>First star</title>-->
                                <!--        <path-->
                                <!--            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">-->
                                <!--        </path>-->
                                <!--    </svg>-->
                                <!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"-->
                                <!--        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">-->
                                <!--        <title>Second star</title>-->
                                <!--        <path-->
                                <!--            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">-->
                                <!--        </path>-->
                                <!--    </svg>-->
                                <!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"-->
                                <!--        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">-->
                                <!--        <title>Third star</title>-->
                                <!--        <path-->
                                <!--            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">-->
                                <!--        </path>-->
                                <!--    </svg>-->
                                <!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"-->
                                <!--        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">-->
                                <!--        <title>Fourth star</title>-->
                                <!--        <path-->
                                <!--            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">-->
                                <!--        </path>-->
                                <!--    </svg>-->
                                <!--    <svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor"-->
                                <!--        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">-->
                                <!--        <title>Fifth star</title>-->
                                <!--        <path-->
                                <!--            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">-->
                                <!--        </path>-->
                                <!--    </svg>-->
                                <!--    <span-->
                                <!--        class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>-->
                                <!--</div>-->
                                
                                <p class="mb-3 font-normal text-sm text-gray-700 dark:text-gray-400 line-clamp-3">{{$item->description}}</p>
                                    <div class="flex items-center justify-between">
                                        <span class="text-3xl font-bold  dark:text-white">
                                            <span class="text-slate-800 dark:text-slate-100">₹{{ $item->discount_fees }}</span>
                                            <span class="text-slate-400 dark:text-slate-200 text-sm line-through">₹{{ $item->fees }}</span>
                                        </span>

                                    </div>
                            </div>
                        </a>
                    @endforeach

                    <!-- Repeat the Course Card HTML for more courses -->

                </div>
        </section>

@endsection
