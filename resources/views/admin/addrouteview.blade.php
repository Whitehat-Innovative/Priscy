@extends('layouts.app')
@section('slot')
<div class="max-w-[30rem] w-full bg-white shadow-[4px_6px_10px_-3px_#bfc9d4] rounded border border-[#e0e6ed] dark:border-[#1b2e4b] dark:bg-[#191e3a] dark:shadow-none">
    <div class="p-5 flex items-center flex-col sm:flex-row">
        <div class="mb-5 w-20 h-20 rounded-full overflow-hidden">
            <img src="/travelassets/images/profile-34.jpeg" alt="image" class="w-full h-full object-cover" />
        </div>
        <div class="flex-1 ltr:sm:pl-5 rtl:sm:pr-5 text-center sm:text-left">
            <h5 class="text-[#3b3f5c] text-[15px] font-semibold mb-2 dark:text-white-light">Luke Ivory</h5>
            <p class="mb-2 text-white-dark">Manager</p>
            <span class="badge bg-primary rounded-full">4.5</span>
            <p class="font-semibold text-white-dark mt-4 sm:mt-8">Maecenas nec mi vel lacus condimentum rhoncus dignissim egestas orci. Integer blandit porta placerat. Vestibulum in ultricies.</p>
        </div>
    </div>
</div>
@endsection
