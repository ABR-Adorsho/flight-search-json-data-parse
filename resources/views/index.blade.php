<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />

    <title>Flight Search</title>

    @vite('resources/css/app.css')

    <style>
        #tbstyle {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #tbstyle td, #tbstyle th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #tbstyle tr:nth-child(even){background-color: #f2f2f2;}
        #tbstyle tr:nth-child(odd){background-color: rgba(140, 158, 204, 0.66);}

        #tbstyle tr:hover {background-color: #ddd;}

        #tbstyle th {
            padding-top: 12px;
            padding-bottom: 12px;
            background-color: rgba(140, 158, 204, 0.66);

        }
        #tbstyle td{
            border-bottom: 1px solid #cb2323;
        }
    </style>

</head>
<body>
<h2 class="my-6 text-2xl font-bold" style="text-align: center;">Master Price</h2>
<hr style="border: 1px solid rgba(93,97,107,0.29);">


<div class="container mx-auto  px-4">
    <style>
        li a {
            text-decoration: none;
            color:#888;
        }

        .segmented-control {
            display: inline-block;
            border: 1px solid #1d3ec7;
            border-radius: 8px;
            overflow: hidden;
        }
        .segmented-control__item {
            float: left;
            list-style-type: none;
        }
        .segmented-control__input {
            position: absolute;
            visibility: hidden;
        }
        .segmented-control__label {
            display: block;
            padding: 1em 4em;
            margin: -1px 0;
            border-left: 1px solid #ddd;
            text-align: center;
            cursor: pointer;
        }
        .segmented-control__item:first-child .segmented-control__label {
            border-left-width: 0;
        }
        .segmented-control__label:hover {
            background: #fafafa;
        }
        .segmented-control__input:checked + .segmented-control__label {
            background: #1d3ec7;
            color: #ffffff;
            font-weight: 600;
        }
    </style>

    <div>
        <ul class="segmented-control my-2">
            <li class="segmented-control__item">
                <a href="#"><input class="segmented-control__input" type="radio" value="1" name="option" id="option-1">
                    <label class="segmented-control__label" for="option-1">Round Trip</label></a>
            </li>
            <li class="segmented-control__item">
                <a href="#"><input class="segmented-control__input" type="radio" value="2" name="option" id="option-2" checked >
                    <label class="segmented-control__label" for="option-2">One Way</label></a>
            </li>
            <li class="segmented-control__item">
                <a href="#"><input class="segmented-control__input" type="radio" value="3" name="option" id="option-3" >
                    <label class="segmented-control__label" for="option-3">Multi City</label></a>
            </li>
        </ul>
    </div>

    <hr style="border: 1px solid rgba(93,97,107,0.29);">

    <form class="max-w-full my-2 py-4" id="form1" action="{{route('flight-info')}}">
        @csrf
        <div class="flex flex-wrap -mx-2 mb-2">
            <div class="w-full md:w-fit px-1 mb-4">
                <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="From">
            </div>
            <div class="w-full md:w-fit px-1 mb-4 ">
                <input class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="To">
            </div>
            <div class="w-full md:w-fit px-1 mb-4">
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input datepicker datepicker-autohide type="text" class="appearance-none block w-full  text-gray-700 border border-gray-200 rounded py-3 px-9 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Select date">
                </div>

            </div>
            <div class="w-full md:w-fit px-1 mb-4 ">
                <div class="relative">
                    <select class="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option selected>Day-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>
            <div class="w-full md:w-fit px-1 mb-4 ">
                <div class="relative">
                    <select class="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option selected>Day+</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>

                </div>
            </div>
            <div class="w-full md:w-fit px-1 mb-4 ">
                <div class="relative">
                    <select class="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option selected>Time</option>
                        <option value="Anytime">Anytime</option>
                        <option value="Midnight">Midnight</option>
                        <option value="Morning">Morning</option>
                    </select>

                </div>
            </div>
            <div class="w-full md:w-fit px-1 mb-4 ">
                <div class="relative">
                    <select class="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option selected>Type</option>
                        <option value="ADT">ADT</option>
                        <option value="CHLD">CHLD</option>
                    </select>

                </div>
            </div>
            <div class="w-full md:w-fit px-1 mb-4 ">
                <div class="relative">
                    <select class="block appearance-none w-full  border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option selected>Person</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>

                </div>
            </div>
        </div>
    </form>
    <form id="form2" area-hidden="true" style="display: none; margin: 0; padding: 0;" action="{{route('home')}}"></form>
    <hr style="border: 1px solid rgba(93,97,107,0.29);" class="mb-2">
    <div class="grid grid-cols-6 gap-4">
        <div class="col-end-8 col-span-1 ...">
            <button type="submit" form="form2" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
                Reset
            </button>
        </div>
        <div class="col-end-10 col-span-2 ...">
            <button type="submit" form="form1" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Search</button>
        </div>
    </div>
    <hr style="border: 1px solid rgba(93,97,107,0.29);">

    <div class="msg-container mt-2">
        @if(!(empty($data)))
            {{ $data['message'] }}
        @endif
    </div>

    <div class="table-container" style="padding-top: 20px">
        <table id="tbstyle">
            <tbody>
            <tr>
                <th>Flight</th>
                <th>Aircraft</th>
                <th>Class</th>
                <th>Fare</th>
                <th>Route</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Duration</th>
                <th>Price</th>
            </tr>
            @if(!(empty($data)))
                @foreach($data['flightOffer'] as $flightOffer)
                    <tr>
                        <td>
                            @foreach($flightOffer['itineraries'] as $itinerarie)
                                @foreach($itinerarie['segments'] as $segment)
                                    {{ $segment['carrierCode'].'  '.$segment['aircraft'] }} <br>
                                @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($flightOffer['itineraries'] as $itinerarie)
                                @foreach($itinerarie['segments'] as $segment)
                                    {{ $segment['flightNumber'] }} <br>
                                @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($flightOffer['class'] as $class)
                                @foreach($class as $value)
                                    {{$value}} <br>
                                @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($flightOffer['fareBasis'] as $fareBasis)
                                @foreach($fareBasis as $value)
                                    {{$value}} <br>
                                @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($flightOffer['itineraries'] as $itinerarie)
                                @foreach($itinerarie['segments'] as $segment)
                                    {{ $segment['departure']['iataCode'].' - '.$segment['arrival']['iataCode'] }} <br>
                                @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($flightOffer['itineraries'] as $itinerarie)
                                @foreach($itinerarie['segments'] as $segment)
                                    {{ $segment['departure']['at'] }}<br>
                                @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($flightOffer['itineraries'] as $itinerarie)
                                @foreach($itinerarie['segments'] as $segment)
                                    {{ $segment['arrival']['at'] }}<br>
                                @endforeach
                            @endforeach
                        </td>
                        <td>
                            @foreach($flightOffer['itineraries'] as $itinerarie)
                                {{ $itinerarie['duration'] }}<br>
                            @endforeach
                        </td>
                        <td>
                            {{$flightOffer['price']}} <br> <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Select</button>
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>
</div>

<script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>
<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>

</body>
</html>
