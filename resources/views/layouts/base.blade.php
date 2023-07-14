<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title'){{ env('app_name') }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css"  rel="stylesheet" />
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
        <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="dark:bg-slate-700">
   @include('includes.header')
    @section('content')
        @show

      


       @include("includes.drawer")
       @include("includes.footer")
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>
</html>
