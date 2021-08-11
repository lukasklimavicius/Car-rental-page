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


                <div class="table w-full p-2">
                    <table class="w-full border">
                        <thead>
                        <tr class="bg-gray-50 border-b">

                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    <b>Customer name</b>
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Customer email
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Customer phone number
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Car make and model
                                </div>
                            </th>
                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Reservation start
                                </div>
                            </th>

                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Reservation finish
                                </div>
                            </th>

                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Total sum
                                </div>
                            </th>

                            <th class="p-2 border-r cursor-pointer text-sm font-thin text-gray-500">
                                <div class="flex items-center justify-center">
                                    Status
                                </div>
                            </th>
                        </tr>
                        </thead>
                        <tbody>


                        @foreach($infoOfUser as $custinfo)

                        <tr class="bg-gray-100 text-center border-b text-sm text-gray-600">
                            <td class="p-2 border-r">{{ $custinfo->name }}</td>
                            <td class="p-2 border-r">{{ $custinfo->email }}</td>
                            <td class="p-2 border-r">{{ $custinfo->phone_number }}</td>

                               <td class="p-2 border-r">{{ $custinfo->manufacturer }} {{ $custinfo->model }}</td>
                               <td class="p-2 border-r">{{ $custinfo->start_date}}</td>
                               <td class="p-2 border-r">{{ $custinfo->finish_date}}</td>
                               <td class="p-2 border-r">{{ $custinfo->total_sum / 100}} €</td>
                               <td class="p-2 border-r">{{ $custinfo->status}}</td>



                        </tr>

                        @endforeach



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


                </div>
            </div>
        </div>
    </div>

</x-app-layout>
