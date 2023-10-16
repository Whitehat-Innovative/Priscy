<x-app-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body shadow">
                <h4 class="card-subtitle">Tickets</h4>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>User</th>
                            <th>Origin</th>
                            <th>Destination</th>
                            <th>Price</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tickets as $ticket)
                        <tr>
                            <td>{{ $ticket->reference }}</td>
                            <td>{{ $ticket->user->name }}</td>
                            <td>{{ $ticket->route->from }}</td>
                            <td>{{ $ticket->route->to }}</td>
                            <td>₦{{ number_format($ticket->amount) }}</td>
                            <td>{{ \Carbon\Carbon::parse($ticket->date_time)->format('d M Y, h:ia') }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
         <div class="col-md-6">
            <div class="card card-body shadow">
                <h4 class="card-subtitle">Routes</h4>
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
         <div class="col-md-6">
            <div class="card card-body shadow">
                <h4 class="card-subtitle">Users</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone_number }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
