<x-app-layout>
     <x-slot name="title">
        Routes
    </x-slot>

    <div class="row">
        @foreach($routes as $route)
            <div class="col-md-4">
                <div class="card card-body shadow text-center">
                    <h5>{{ $route->from }}</h5>
                    <h6><i class="ti-arrow-down"></i> </h6>
                    <h5>{{ $route->to }}</h5>
                    <h4>₦{{ number_format($route->price) }}</h4>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
