<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('car.create')}}">
                        <button type="button" class="bg-green-300 border-green-600 border-b p-4 m-4 rounded">Add new
                            vehicle
                        </button>
                    </a>
                </div>


                <div id="portfolio">
                    <div class="container-fluid p-0">

                        @foreach($list as $car)

                            <div><h2>{{ $car->manufacturer }} {{$car->model}}</h2></div>
                            <div><img src="{{ $car->image }}" alt="car photo" width="300"></div>
                            <a href={{ route('car.edit', $car->id) }}><button class="space-x-20 py-3 px-6 text-white rounded-lg bg-yellow-400 shadow-lg block md:inline-block">Edit   </button></a>

                            <form action="{{ route('car.destroy', ['car' => $car->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
{{--                                <input type="submit" value="Delete car">--}}
                                <button type="submit" class="space-x-20 py-3 px-6 text-white rounded-lg bg-red-500 shadow-lg block md:inline-block">Delete</button>
                            </form>

                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </div>



</x-app-layout>
