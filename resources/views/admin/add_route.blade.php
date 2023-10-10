@extends('layouts.app')
@section('slot')
    <!-- multiple inputs -->
    <form action="{{ route('admin.add_route') }}" method="POST">@csrf
        <div class="flex">
            <input type="text" name="from" placeholder="from"
                class="form-input ltr:border-r-0 rtl:border-l-0 focus:!border-r rounded-none flex-1" />
            <input type="text" name="to" placeholder="to"
                class="form-input ltr:rounded-l-none rtl:rounded-r-none flex-1" />
            <input type="text" name="price" placeholder="price"
                class="form-input ltr:rounded-l-none rtl:rounded-r-none flex-1" />

            <button type="submit" class="btn btn-primary mt-6">Submit</button>
        </div>
    </form>
@endsection
