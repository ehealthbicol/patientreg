<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body class="dark:bg-gray-900">
    <h1 class="text-5xl font-extrabold dark:text-white">Patient List</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div> 
        <form class="max-w-md mx-auto" action="{{route('search')}}" method="POST"> 
            @csrf 
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" name="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Patient Name" />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        <br><br>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Lastname
                </th>
                <th scope="col" class="px-6 py-3">
                    Firstname
                </th>
                <th scope="col" class="px-6 py-3">
                    Middlename
                </th>
                <th scope="col" class="px-6 py-3">
                    Birthday
                </th>
                <th scope="col" class="px-6 py-3">
                    Age
                </th>
                <th scope="col" class="px-6 py-3">
                    Contact
                </th>
                <th scope="col" class="px-6 py-3">
                    Chief Complaint
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($patients as $key => $patient )
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$key+1}}
                    </th>
                    <td class="px-6 py-4">
                        {{$patient->lname}}
                    </td>
                    <td class="px-6 py-4">
                        {{$patient->fname}}
                    </td>
                    <td class="px-6 py-4">
                        {{$patient->mname}}
                    </td>
                    <td class="px-6 py-4">
                        {{$patient->bdate}}
                    </td>
                    <td class="px-6 py-4">
                        {{$patient->age}}
                    </td>
                    <td class="px-6 py-4">
                        {{$patient->contact}}
                    </td>
                    <td class="px-6 py-4">
                        {{$patient->complaint}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('patients.view', ['patient' => $patient])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                        <a href="{{route('patients.edit', ['patient' => $patient])}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        <form method="post" action="{{route('patients.delete', ['patient'=>$patient])}}">
                            @csrf
                            @method('delete')
                            <input type='submit' class="font-medium text-blue-600 dark:text-blue-500 hover:underline" value='Delete' />
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br><br>
    <a href="{{route('patients.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add new Patient</a>
</body>
</html>
