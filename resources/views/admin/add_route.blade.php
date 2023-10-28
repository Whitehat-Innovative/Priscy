<x-app-layout>
    <x-slot name="title">Add Route</x-slot>
    <div class="row">
        <div class="col-xl-8">
            <div class="card h-auto">
                <div class="card-body">
                    {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

                    <form action="{{ route('admin.add_route') }}" method="POST"> @csrf
                        <div class="mb-3 ">
                            <label class="form-label">From</label>
                            <input type="text"  name="from" required class="form-control">
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Destination</label>
                                <input type="text" required name="to" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 ">
                            <label class="form-label">No. of seats</label>
                            <input type="number"  name="seats" required class="form-control">
                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label">Price per seat (N)</label>
                                <input type="number" required name="price" class="form-control">
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">Add Route</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
