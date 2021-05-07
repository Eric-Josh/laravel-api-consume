@extends('layouts.app')

@section('content')

<div class="row mb-3">
    <div class="col-lg-12 margin-tb">
        <div class="text-center">
            <h2>Geo IP location</h2>
            <form action="{{ route('geolocateip') }}">
                <input type="text" name="ipaddress" value="{{ request()->query('ipaddress') }}" required />
                <button type="submit" class="btn btn-success" >Fetch</button>
            </form>

            <div>
                @if($responseBody)
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <th>IP</th>
                        <td>{{ $responseBody->ip }}</td>
                    </tr>
                    <tr>
                        <th>Continent Code</th>
                        <td>{{ $responseBody->continent_code }}</td>
                    </tr>
                    <tr>
                        <th>{{ 'Country Flag' }}</th>
                        <td><img height="30px" src="{{  $responseBody->country_flag }}" alt=""></td>
                    </tr>
                    </tbody>
                </table>
                @endif
            </div>
            
        </div>
    </div>
</div>


@endsection