<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company Manager') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <form action="{{route('form.company.store')}}" method="post" id="companyForm">
                        @csrf
                        <x-admin.form />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/plugin/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/jquery.form.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/plugin/js/company-manager.js') }}"></script>
</x-app-layout>
