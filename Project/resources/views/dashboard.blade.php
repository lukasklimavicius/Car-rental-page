<style>
    .flex-container {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;

        justify-content: center;
        align-items: flex-start;

    }

    .flex-container > div {

        background-color: #ffffff;
        width: 30%;
        margin: 10px;
        text-align: center;
        line-height: 15px;
        font-size: 12px;
    }

    @media (max-width: 800px) {
        .flex-container {
            flex-direction: column;
            flex: 100%;
        }
    }


    #portfolio .container-fluid, #portfolio .container-sm, #portfolio .container-md, #portfolio .container-lg, #portfolio .container-xl {
        max-width: 1920px;
    }

    #portfolio .container-fluid .portfolio-box, #portfolio .container-sm .portfolio-box, #portfolio .container-md .portfolio-box, #portfolio .container-lg .portfolio-box, #portfolio .container-xl .portfolio-box {
        position: relative;
        display: block;
    }

    #portfolio .container-fluid .portfolio-box .portfolio-box-caption, #portfolio .container-sm .portfolio-box .portfolio-box-caption, #portfolio .container-md .portfolio-box .portfolio-box-caption, #portfolio .container-lg .portfolio-box .portfolio-box-caption, #portfolio .container-xl .portfolio-box .portfolio-box-caption {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 100%;
        height: 100%;
        position: absolute;
        bottom: 0;
        text-align: center;
        opacity: 0;
        color: #fff;
        background: rgba(132, 80, 232, 0.9);
        transition: opacity 0.4s ease;
        text-align: center;

    }

    #portfolio .container-fluid .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-sm .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-md .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-lg .portfolio-box .portfolio-box-caption .project-category, #portfolio .container-xl .portfolio-box .portfolio-box-caption .project-category {
        font-family: "Merriweather Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 0.85rem;
        font-weight: 600;
        text-transform: uppercase;
    }

    #portfolio .container-fluid .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-sm .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-md .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-lg .portfolio-box .portfolio-box-caption .project-name, #portfolio .container-xl .portfolio-box .portfolio-box-caption .project-name {
        font-size: 1.2rem;
    }

    #portfolio .container-fluid .portfolio-box:hover .portfolio-box-caption, #portfolio .container-sm .portfolio-box:hover .portfolio-box-caption, #portfolio .container-md .portfolio-box:hover .portfolio-box-caption, #portfolio .container-lg .portfolio-box:hover .portfolio-box-caption, #portfolio .container-xl .portfolio-box:hover .portfolio-box-caption {
        opacity: 1;
    }

    .plotis {
        width: 100%;
        margin: 3px;
    }


</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-10xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-success-message />
                </div>


                <div id="portfolio">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                            <div class="flex-container">
                                @foreach($list as $car)
                                    <div class="plotis portfolio-box">
                                        <img class="img-fluid" src="{{ $car->image }}" alt="Car photo"/>

                                        <div class="portfolio-box-caption">
                                            <div
                                                class="project-name text-white-30">{{ $car->manufacturer }} {{$car->model}}</div>
                                            <div class="project-name">{{$car->price/100}} € / day</div>
                                            <div class="project-name"><a href="{{ route('car.show', $car->id) }}">
                                                    <button
                                                        class="py-3 px-6 text-white rounded-lg bg-yellow-400 shadow-lg block md:inline-block">
                                                        More info
                                                    </button>
                                                </a></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>


</x-app-layout>
