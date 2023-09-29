<x-app-layout>
    <x-slot name="header">
        <div class="fixed-top">
            <x-navigation />
        </div>
    </x-slot>

    <section>
    {{-- model start here  --}}
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="{{ route('postData') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">

                        <div class="form-group">
                          <label>Title</label>
                          <input type="text" name="title" class="form-control" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Enter content"></textarea>
                          </div>

                          <div class="form-group">
                            <label>Image</label>
                            <input type="text" name="image" class="form-control" placeholder="Enter image link">
                          </div>

                        <button type="submit" class="btn btn-primary mt-2">Submit</button>

                </div>
            </form>
            </div>
            </div>
        </div>
        {{-- model end here  --}}
        <div class='row d-flex justify-content-center mx-4'>
            <div class='fw-bold col-3'>
                <h1 class="fw-bold mb-0">Your <br>dashboard </h1>
                <p>Let's see how far you made it.</p>
                <input type="image" src="{{ asset('/assets/archived-button.svg') }}" class='btn-primary mb-1 ms-auto' />
                <input type="image" src="{{ asset('/assets/create-button.svg') }}" class='btn-primary mb-1 ms-auto' data-toggle="modal" data-target="#exampleModal" />
        {{-- pop model start here  --}}

    <!-- Button trigger modal -->
        {{-- <input type="image" src="{{ asset('/assets/create-button.svg') }}" class='btn-primary mb-1 ms-auto' data-toggle="modal" data-target="#exampleModal" /> --}}
        
        <!-- Modal -->
        

    {{-- pop model end here  --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
        <x-dashboard-table :posts='$postDatas' />
    </section>
</x-app-layout>