<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }

    .bigicon {
        font-size: 35px;
        color: #36A0FF;
    }

</style>
<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="photo"><img src="{{$image}}" alt="Car photo" width="300px"/></div>

                </div>

                <div class="table w-full p-2">
                    <table class="w-full border">
                        <thead>
                        <tr class="bg-gray-50 border-b">

                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    <b>Make and model</b>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Year of manufacture
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Transmission type
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Short description
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Available
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Price per day
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">

                            <td class="p-2 border-r">{{$manufacturer}} {{$model}}</td>
                            <td class="p-2 border-r">{{$year ?? ''}}</td>
                            <td class="p-2 border-r">{{$transmission ?? ''}}</td>
                            <td class="p-2 border-r">{{$description ?? ''}}</td>
                            <td class="p-2 border-r">From {{$start_date ?? ''}} to {{$finish_date ?? ''}}</td>
                            <td class="p-2 border-r">{{$price / 100 ?? ''}} €</td>

                        </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-12 border border-success">
                <div class="well well-sm">
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <x-success-message />
                    <form class="form-horizontal" action="{{route('reservation.store')}}" method="POST">
                        @csrf
                        <fieldset>
                            <legend class="text-center header">Contact owner of the car</legend>

                            <div class="form-group d-flex justify-content-center">
                                <div class="col-md-2">
                                    <input id="name" name="name" type="text" placeholder="Your name"
                                           class="form-control">
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">

                                <div class="col-md-2">
                                    <input id="email" name="email" type="text" placeholder="Your e-mail"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-center">

                                <div class="col-md-2">
                                    <input id="phone" name="phone" type="text" placeholder="Your phone number"
                                           class="form-control">
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-center">

                                <div class="col-md-2">
                                    <input id="start_date" name="start_date" type="date" placeholder="From" class="form-control" min="{{$start_date}}">
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">

                                <div class="col-md-2">
                                    <input id="finish_date" name="finish_date" type="date" placeholder="To" class="form-control" max="{{$finish_date}}">
                                </div>
                            </div>
                            <input type="hidden" name="owner_id" value="{{$owner__id}}">
                            <input type="hidden" name="cars_id" value="{{$id}}">
                            <input type="hidden" name="price" value="{{$price}}">
                            <input type="hidden" name="manufacturer" value="{{$manufacturer}}">
                            <input type="hidden" name="model" value="{{$model}}">


                            <div class="form-group d-flex justify-content-center">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
