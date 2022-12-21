<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Flight Search</title>

    <style>
        /* custom styles */
        body {
            padding: 4em;
            padding-top: 5px;
            background: #ffff;
            font: 13px/1.4 Geneva, 'Lucida Sans', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
        }

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
            /*text-align: center;*/
            background-color: rgba(140, 158, 204, 0.66);

        }

        #tbstyle td{
            border-bottom: 1px solid #cb2323;
        }
        .button {
            background-color: #1D3EC7FF; /* Blue */
            border: none;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            color: white;
            padding: 3px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .button:hover {background-color: rgba(15, 15, 16, 0.48)
        }

        .form-inline {
            display: flex;
            flex-flow: row wrap;
            align-items: center;
        }

        .form-inline label {
            margin: 5px 10px 5px 0;
        }

        .form-inline input {
            vertical-align: middle;
            margin: 5px 10px 5px 0;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .form-inline select {
            vertical-align: middle;
            margin: 5px 10px 5px 0;
            /*padding: 10px;*/
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .form-inline button {
            padding: 10px 20px;
            background-color: dodgerblue;
            border: 1px solid #ddd;
            color: white;
            cursor: pointer;
        }

        .form-inline button:hover {
            background-color: royalblue;
        }
        [type="date"] {
            background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
        }
        [type="date"]::-webkit-inner-spin-button {
            display: none;
        }
        [type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0;
        }

        label {
            display: block;
        }
        .input {
            border: 1px solid #c4c4c4;
            border-radius: 5px;
            background-color: #fff;
            padding: 3px 5px;
            box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
            width: 190px;
        }

        .bd-example>:last-child {
            margin-bottom: 0;
        }
        .form-select {
            display: inline-block;
            height: calc(1.5em + .75rem + 2px);
            line-height: 1.5;
            border: 1px solid #c4c4c4;
            border-radius: 5px;
            background-color: #fff;
            padding: 3px 5px;
            box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
            width: 106px;
            color: #495057;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        @media (max-width: 350px) {
            .form-inline input {
                margin: 10px 0;
            }

            .form-inline {
                flex-direction: column;
                align-items: stretch;
            }
        }
    </style>
</head>
<body>
<h2 style="text-align: center">Master Price</h2>
<hr style="border: 1px solid rgba(93,97,107,0.29);">
<div class="container" style="width:100%;">
    <div class="text-center mb-3">

        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
        <label class="btn btn-outline-primary" for="option2">Round Trip</label>

        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
        <label class="btn btn-outline-primary" for="option1">One Way</label>

        <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
        <label class="btn btn-outline-primary" for="option4">Multi City</label>
    </div>
    <div class="form-container">
        <form class="form-inline" id="form1" action="{{route('flight-info')}}">
            @csrf
            <input type="text" class="input" id="departure" placeholder="Departure" name="departure">
            <input type="text" class="input" id="arrival" placeholder="Arrival" name="arrival">
            <input type="date" class="input" name="dateofbirth">
            <select class="form-select">
                <option selected>Day-</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <select class="form-select">
                <option selected>Day+</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <select class="form-select">
                <option selected>Time</option>
                <option value="Anytime">Anytime</option>
                <option value="Midnight">Midnight</option>
                <option value="Morning">Morning</option>
            </select>
            <select class="form-select">
                <option selected>Type</option>
                <option value="ADT">ADT</option>
                <option value="CHLD">CHLD</option>
            </select>
            <select class="form-select">
                <option selected>Number</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br>
            <hr style="border: 1px solid rgba(93,97,107,0.29);">
        </form>
    </div>
    <hr style="border: 1px solid rgba(93,97,107,0.29);">
    <div style="width: 100%; display: flex; justify-content: space-between">
        <button style="margin-right: 5px;"><a style="text-decoration: none; color: #000;" href="{{route('home')}}">Reset</a></button>
        <button  style=" " class="button" form="form1" type="submit">Search</button>
    </div>
    <hr style="border: 1px solid rgba(93,97,107,0.29);">
    <div class="msg-container">
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
                            {{$flightOffer['price']}} <br> <button class="button" id="btn1">Select</button>
                        </td>
                    </tr>
                @endforeach
            @endif

            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
