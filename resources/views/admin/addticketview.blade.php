{{-- @extends('layouts.app')
@section('slot')
<form action="{{ route('admin.add_ticket') }}" method="POST">@csrf
    <div class="flex">
        <input type="text" name="seats" placeholder="seats"
            class="form-input ltr:border-r-0 rtl:border-l-0 focus:!border-r rounded-none flex-1" />
        <input type="text" name="amount" placeholder="amount"
            class="form-input ltr:rounded-l-none rtl:rounded-r-none flex-1" />

        <button type="submit" class="btn btn-primary mt-6">Submit</button>
    </div>
</form>
@endsection --}}