@extends('layouts/main')

@section('content')

<div id="_container">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Compagnia</th>
            <th scope="col">Stazione di partenza</th>
            <th scope="col">Stazione di arrivo</th>
            <th scope="col">Data</th>
            <th scope="col">Orario partenza</th>
            <th scope="col">Orario arrivo</th>
            <th scope="col">Ritardo</th>
            <th scope="col">Prezzo</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
            <tr>
                <td>{{$train->company}}</td>
                <td>{{$train->departure_station}}</td>
                <td>{{$train->arrival_station}}</td>
                <td class="center">{{$train->departure_date}}</td>
                <td class="center">{{$train->departure_hour}}</td>
                <td class="center">{{$train->arrival_hour}}</td>
                <td class="center">{{$train->is_on_time ? 'Si' : 'No'}}</td>
                <td class="center">{{$train->ticket_price}} €</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
    
@endsection