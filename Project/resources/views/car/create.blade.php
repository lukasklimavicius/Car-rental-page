<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-3">
            {{ __('Lorem ipsum') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>

                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                        <x-success-message />
                        <form action="{{ route('car.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="testbox">
                                <div class="banner">
                                    <h1>Please fill all fields!</h1>
                                </div>
                                <div class="item">
                                    <p>Car</p>
                                    <div class="name-item">
                                        <input type="text" name="manufacturer" placeholder="Make"/>
                                        <input type="text" name="model" placeholder="Model"/>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Year</p>
                                    <input type="number" name="year"/>
                                </div>
                                <div class="item">
                                    <p>Transmission</p>
                                    <select name="transmission">

                                        <option value="Manual">Manual</option>
                                        <option value="Automatic">Automatic</option>
                                        <option value="Semi-automatic">Semi-automatic</option>
                                        <option value="CVT">CVT</option>

                                    </select>
                                </div>
                                <div class="item">
                                    <p>Photo</p>
                                    <input type="file" id="photos" name="image">
                                </div>
                                <div class="item">
                                    <p>Description</p>
                                    <input type="text" name="description"></input>
                                </div>
                                <div class="item">
                                    <p>Price / day</p>
                                    <input type="number" name="price"/>
                                </div>
                                <div class="item">
                                    <p>Available from</p>
                                    <input type="date" name="start_date"/>
                                </div>
                                <div class="item">
                                    <p>Available to</p>
                                    <input type="date" name="finish_date"/>
                                </div>
                                <button type="submit" class="py-3 px-6 text-white rounded-lg bg-green-400 shadow-lg block md:inline-block">Add vehicle</button>
{{--                                <input type="submit" value="Add vehicle">--}}
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



