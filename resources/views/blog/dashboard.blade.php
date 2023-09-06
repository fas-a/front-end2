<x-app-layout>
    <x-slot name="header">
        <div class="fixed-top">
            <x-navigation />
        </div>
    </x-slot>

    <section>
        <div class='row d-flex justify-content-center mx-4'>
            <div class='fw-bold col-3'>
                <h1 class="fw-bold mb-0">Your <br>dashboard </h1>
                <p>Let's see how far you made it.</p>
                <input type="image" src="{{ asset('/assets/archived-button.svg') }}" class='btn-primary mb-1 ms-auto' />
                <input type="image" src="{{ asset('/assets/create-button.svg') }}" class='btn-primary mb-1 ms-auto' />
            </div>
            <div class="col-4">
            <x-dashboard-card :value="'1.234.567'">
                Total post you've created
            </x-dashboard-card>
            </div>
            <div class="col-4">
                <x-dashboard-card :value="'1.234.567'">
                    Total posts you've archived
                </x-dashboard-card>
            </div>
        </div>
    </section>
    <section>
        <div class='row justify-content-center mx-4 mt-5'>
            <div class='col-4'>
                <x-search-box />
            </div>
            <div class='col-5'>
                <hr class="mt-3 mb-4">
            </div>
            <div class='col-2 mt-2'>
                <h5>
                    <b>All of your posts</b>
                </h5>
            </div>
        </div>
    </section>
    <section class="d-flex justify-content-center mx-5">
        <x-dashboard-table :posts='$posts' />
    </section>
</x-app-layout>