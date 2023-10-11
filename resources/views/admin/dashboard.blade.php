<x-app-layout>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body shadow">
                <h4 class="card-subtitle">Latest Routes</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($routes as $route)
                        <tr>
                            <td>SSBC-{{ $route->id }}</td>
                            <td>{{ $route->from }}</td>
                            <td>{{ $route->to }}</td>
                            <td>₦{{ number_format($route->price) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
