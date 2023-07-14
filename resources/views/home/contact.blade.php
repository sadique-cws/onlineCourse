@extends('layouts.base')

@section('content')

<section class="dark:bg-teal-900 bg-teal-300  dark:text-white text-black md:py-7 md:px-24 p-5 md:mt-20 mt-16">
    <div class="container mx-auto flex flex-col gap-2">
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
                    <a href="{{ route('contact') }}"
                        class="ml-1 text-sm font-medium dark:text-gray-100 md:ml-2 dark:text-slate-50 dark:hover:text-white">Contact</a>
                </div>
            </li>


        </ol>
    </nav>
        <h1 class="text-4xl font-bold">Contact Us</h1>


    </div>
</section>
<div class="bg-gray-100 py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <p class="mt-4 text-lg leading-7 text-gray-600">
        We would love to hear from you! Get in touch with us using the contact information below.
      </p>
      <div class="mt-8">
        <h3 class="text-xl leading-6 font-medium text-gray-900">Address:</h3>
        <p class="mt-4 text-lg leading-7 text-gray-600">
          Near Dog Hospital, Ramavtar Market, Gandhinagar, Madhubani, Purnea, Bihar, India - 854301
        </p>
      </div>
      <div class="mt-8">
        <h3 class="text-xl leading-6 font-medium text-gray-900">Phone:</h3>
        <p class="mt-4 text-lg leading-7 text-gray-600">
          +91 9546805580
        </p>
      </div>
      <div class="mt-8">
        <h3 class="text-xl leading-6 font-medium text-gray-900">Email:</h3>
        <p class="mt-4 text-lg leading-7 text-gray-600">
          cwspurnea@gmail.com
        </p>
      </div>
      <div class="mt-8">
        <h3 class="text-xl leading-6 font-medium text-gray-900">Office Hours:</h3>
        <p class="mt-4 text-lg leading-7 text-gray-600">
          Monday - Friday: 7:00 AM - 6:00 PM
        </p>
      </div>
    </div>
  </div>



@endsection
