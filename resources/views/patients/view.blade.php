<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <title>Document</title>
</head>
<body class="dark:bg-gray-900">

    <h1 class="text-5xl font-extrabold dark:text-white">Patient Record</h1><br><br>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}} </li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('patients.view', ['patient' => $patient->id])}}">
        @csrf
        @method('put')
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="lname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">LastName</label>
                    <input type="text" id="lname" name="lname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lastname" value="{{$patient->lname}}" required />
                </div>
                <div>
                    <label for="fname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Firstname</label>
                    <input type="text" id="fname" name="fname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Firstname" value="{{$patient->fname}}"required />
                </div>
                <div>
                    <label for="mname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middlename</label>
                    <input type="text" id="mname" name="mname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Middlename" value="{{$patient->mname}}" required />
                </div>  
                <div>
                    <label for="bdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Birthday</label>
                    <input type="date" id="bdate" name="bdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Birthday" value="{{$patient->bdate}}" required />
                </div>
                <div>
                    <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age</label>
                    <input type="text" id="age" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="age" value="{{$patient->age}}" required />
                </div>
                <div>
                    <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact Number</label>
                    <input type="integer" id="contact" name="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" value="{{$patient->contact}}" required />
                </div>
            <div class="mb-6">
                <label for="complaint" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chief Complaint</label>
                <input type="text" id="complaint" name="complaint" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="chief complaint" value="{{$patient->complaint}}" required />
            </div> 
        </div>
        <a href="{{route('patients.index')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Patient List</a>
</form>
</body>
</html>