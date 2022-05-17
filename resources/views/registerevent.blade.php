@extends('layouts.registerevent') {{-- ini memanggil file main yang di dalam layout --}}
@section('registerevent')
    <div class="container-fluid">
        <div class="row">
            <div class="kiri">
                <div class="text-kiri">
                    <h1 class="h1-kiri">Promote with Us!</h1>
                    <center>
                        <h2 style="padding-top: 28px;">Active</h2>
                        <h2 style="padding-left: 345px;">Productive</h2>
                    </center>
                </div>
                <div>
                    <img src="/source/img/hero.png" class="img-hero" style="">
                </div>
            </div>

            <div class="kanan">
                <form action="/RegisterEvent" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="text-kanan">
                        <h2 class="h2-kanan">Register your Event</h2>
                        <h3 class="h3-kanan">Holla! you can promote your event with us</h3>
                    </div>
                    <div class="container-fluid" style="padding-top: 31px;">
                        <div class="row">
                            <!-- Section 1 -->
                            <div class="col-sm-6">
                                <div class="form-event">
                                    <label for="#" class="form-label">
                                        <h2 class="h2-form">Event Title</h2>
                                    </label>
                                    <input type="text" class="fc-sc1 form-control @error('title') is-invalid @enderror"
                                        name="title" id="title" placeholder="Enter your event title">
                                    @error('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="drop-event">
                                    <h2 class="h2-form" style="padding-bottom: 10px; padding-left: 35px;">Event Theme
                                    </h2>
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                        style="margin-left: 35px;" data-bs-toggle="dropdown" aria-expanded="false">
                                        Select Theme
                                    </button>
                                    <select name="eventType" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        @foreach ($eventTypes as $eventType)
                                            @if (old('eventType') == $eventType->id)
                                                <option value="{{ $eventType->id }}" selected>{{ $eventType->name }}
                                                </option>
                                            @else
                                                <option value="{{ $eventType->id }}">{{ $eventType->name }}</option>
                                            @endif
                                        @endforeach


                                        {{-- <option value="Tech"> Tech </option>
                                <option value="Sport"> Sport </option>
                                <option value="Social"> Social </option> --}}
                                    </select>
                                </div>
                            </div>
                            <!-- Section 1 -->
                            <hr class="garis">
                            <!-- Section 2 -->
                            <div>
                                <h2 class="h2-form" style="padding-bottom: 10px; padding-left: 0px;">Event Theme</h2>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        {{-- <input type="checkbox" class="form-check-input" id="paid" name="hobby" /> --}}
                                        <p class="text-card">
                                            <input type="checkbox" class="checkbox" name='eventTheme[]' value="paid">
                                            <b>Paid</b>
                                        </p>
                                        {{-- <b class="status-card">Paid</b> --}}

                                        {{-- <label class="form-check-label" for="paid">
                                            <div class="row text-card" style="margin-left: 10px;">

                                                {{-- <div class="col status-card">Paid</div>
                                        <div class="col info-card">online</div> 
                                            </div>
                                        </label> --}}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <p class="text-card">
                                            <input type="checkbox" class="checkbox" name='eventTheme[]'
                                                value="online">
                                            <b>Online</b>
                                        </p>
                                        {{-- <input type="checkbox" name='colour[]' value="Red"> paid <br/> --}}
                                        {{-- <label class="form-check-label" for="paid">
                                            <div class="row text-card" style="margin-left: 10px;">

                                                <div class="col info-card">offline</div>
                                            </div>
                                        </label> --}}
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <p class="text-card">
                                            <input type="checkbox" class="checkbox" name='eventTheme[]' value="free">
                                            <b>Free</b>
                                        </p>

                                        {{-- <label class="form-check-label" for="paid">
                                            <div class="row text-card" style="margin-left: 10px;">
                                                <div class="col status-card-2">Free</div>
                                                <div class="col info-card">online</div>
                                            </div>
                                        </label> --}}
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-check">
                                        <p class="text-card">
                                            <input type="checkbox" class="checkbox" name='eventTheme[]'
                                                value="Offline">
                                            <b>Offline</b>
                                        </p>

                                        {{-- <label class="form-check-label" for="paid">
                                            <div class="row text-card" style="margin-left: 10px;">
                                                <div class="col status-card-2">Free</div>
                                                <div class="col info-card">offline</div>
                                            </div>
                                        </label> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Section 2 -->
                            <hr class="garis-2">
                            <!-- Section 3 -->
                            <div class="col-sm-6">
                                <div class="form-description">
                                    <label for="#" class="form-label">
                                        <h2 class="h2-form">Event Description</h2>
                                    </label>
                                    <textarea type="text" class="fc-sc3 form-control @error('desc') is-invalid @enderror" name="desc" id="#"
                                        placeholder="Drop the description of your event"></textarea>
                                    @error('desc')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="h2-form" style="padding-bottom: 9px; padding-left: 35px;">Date</h2>
                                <div class="input-group">
                                    <i class="bi bi-calendar-date input-group-text"></i>
                                    <input type="date" name="date"
                                        class="datepicker form-control @error('date') is-invalid @enderror"
                                        placeholder="DD-MM-YYYY">
                                    @error('date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <h2 class="h2-form" style="padding-bottom: 5px; padding-left: 35px;">Phone Number
                                </h2>
                                <div class="input-group">
                                    <i class="bi bi-telephone input-group-text"></i>
                                    <input type="number"
                                        class="datepicker form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                        placeholder="08XXXXXXXXXX">
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- Section 3 -->
                            <hr class="garis-2">
                            <!-- Section 4 -->
                            <div>
                                <h2 class="h2-form" style="padding-top: 19px; padding-left: 0px;">Brochure</h2>
                                <div class="row" style="padding-left: 113px;">
                                    {{-- <img class="img-preview img-fluid mb-3 col-sm-5">
                          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()"> --}}
                                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image"
                                        name="image">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="col-sm-2">
                                        {{-- <a href="#"><button class="btn btn-form-1">Upload</button></a> --}}
                                    </div>
                                    {{-- <div class="col-sm-2">
                            <a href="#"><button class="btn btn-form-2">Delete</button></a>
                          </div> --}}
                                </div>
                            </div>
                            <!-- Section 4 -->
                            <hr class="garis-2" style="margin-top: 25px;">
                            <!-- Section 5 -->
                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="form-description">
                                        <label for="#" class="form-label">
                                            <h2 class="h2-form">Speaker</h2>
                                        </label>
                                        <textarea type="text" name="speaker" class="fc-sc3 form-control @error('speaker') is-invalid @enderror" name="speaker"
                                            id="#" placeholder="Please insert event speaker with list"></textarea>
                                        @error('speaker')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-event">
                                        <label for="#" class="form-label">
                                            <h2 class="h2-form">Price (in rupiah)</h2>
                                        </label>
                                        <input type="number" name="price"
                                            class="fc-sc5 form-control @error('price') is-invalid @enderror" name="price"
                                            id="#" placeholder="Rp">
                                        @error('price')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Section 5 -->
                            <hr class="garis-2" style="margin-bottom: 64px;">
                            <div class="col-sm-12">
                                <button class="btn btn-register">Register your event</button>
                            </div>
                            <img class="img-preview img-fluid mb-3 col-sm-5">

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    {{-- <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
          fetch("/dashboard/post/checkSlug?title=" + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)

        });

        // untuk mematikan fitur file upload nya trix editor
        document.addEventListener('trix-file-accept', function(e){
          e.preventDefault();
        })


        //untuk menampilkan image preview
        function previewImage(){
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent){
            imgPreview.src = oFREvent.target.result;
          }

        }
    </script> --}}
@endsection
