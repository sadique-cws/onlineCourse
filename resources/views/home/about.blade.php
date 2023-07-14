@extends('layouts.base')

@section('content')

<section class="bg-teal-300 dark:bg-teal-900 dark:text-white text-black md:py-7 md:px-24 p-5 border dark:border-0 md:mt-20 mt-14">
    <div class="container mx-auto flex flex-col gap-1">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1">
            <li class="inline-flex items-center">
                <a href="{{ route('homepage') }}"
                    class="inline-flex items-center text-sm font-medium dark:text-gray-100 dark:text-slate-50 dark:hover:text-white">
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
                    <a href="{{ route('about') }}"
                        class="ml-1 text-sm font-medium dark:text-gray-100 md:ml-2 dark:text-slate-50 dark:hover:text-white">About</a>
                </div>
            </li>


        </ol>
    </nav>

        <h1 class="md:text-4xl text-2xl font-bold">About Us</h1>


    </div>
</section>
<div class="bg-gray-100 dark:bg-gray-800 py-8 dark:text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl leading-9 font-extrabold text-gray-900  dark:text-white">
       Purnea's Premier Programming Institute!
      </h2>
      <p class="mt-4 text-lg leading-7 text-gray-600  dark:text-white">
        At Code with Sadiq, we take pride in being the most popular programming language class in Purnea, Bihar. Our institute is dedicated to providing high-quality education and training in various programming languages to aspiring individuals who want to embark on a successful journey in the world of coding.
      </p>
      <div class="mt-8">
        <h3 class="text-xl leading-6 font-medium text-gray-900  dark:text-white">Our Mission:</h3>
        <p class="mt-4 text-lg leading-7 text-gray-600  dark:text-white">
          At Code with Sadiq, our mission is to empower students with comprehensive programming knowledge and skills that are essential for success in today's digital age. We strive to create a stimulating and inclusive learning environment where students can explore their passion for coding and acquire the expertise needed to thrive in the ever-evolving tech industry.
        </p>
      </div>
      <div class="mt-8">
        <h3 class="text-xl leading-6 font-medium text-gray-900  dark:text-white">Why Choose Us?</h3>
        <ul class="mt-4 text-lg leading-7 text-gray-600  dark:text-white list-disc pl-6">
          <li class="mt-2">Experienced and Dedicated Instructors</li>
          <li class="mt-2">Comprehensive Curriculum</li>
          <li class="mt-2">Hands-on Projects and Practical Assignments</li>
          <li class="mt-2">Small Class Sizes</li>
          <li class="mt-2">Industry-Relevant Skills</li>
          <li class="mt-2">Placement Assistance</li>
          <li class="mt-2">Supportive Learning Environment</li>
        </ul>
      </div>
      <div class="mt-8">
        <p class="text-lg leading-7 text-gray-600  dark:text-white">
          Whether you are a student aiming to kickstart your coding journey or a professional seeking to upskill, Code with Sadiq is here to support your aspirations. Join us today and unlock the door to endless possibilities in the exciting world of programming.
        </p>
        <p class="mt-4 text-lg leading-7 text-gray-600  dark:text-white">
          Enroll now and let Code with Sadiq be your trusted partner on your path to programming excellence.
        </p>
      </div>
    </div>
  </div>


@endsection
