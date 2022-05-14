@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div class="container-fluid">
        <div class="row">
          <div class="kanan">
          <form action="/admin/accept/{{ $event->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf 
            
            
                <input type="hidden" class="fc-sc1 form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter your event title"
                value="{{$event->title }}">
                {{-- <input type="hidden" class="" name="title" id="title" placeholder="Enter your event title"
                value="{{ $eventType }}">
                            --}}
                           

                              {{-- <select name="eventType"  class="dropdown-menu"  aria-labelledby="dropdownMenuButton1">
                                @foreach ($eventTypes as $eventType)
                                  @if (old('eventType') ==  $eventType->id)
                                  <option value="{{ $eventType->id }}"selected>{{ $eventType->name }}</option>
                                  
                                  @else
                                  <option value="{{ $eventType->id }}" >{{ $eventType->name }}</option>
                                  
                                  @endif
                                @endforeach
                              </select> --}}

                      <input type="hidden" value="{{ $event->desc }}"  class="fc-sc3 form-control @error('desc') is-invalid @enderror" name="desc" id="#" 
                             >
                        </div>
                          <input type="hidden" name="date" class="datepicker form-control @error('date') is-invalid @enderror" 
                          value="{{ $event->date }}" placeholder="DD-MM-YYYY">
                  
                        <input type="hidden" name="image" value="{{ $event->image }}">

                        
                    
                              <input type="hidden" value="{{ $event->speaker }}" name="speaker" class="fc-sc3 form-control @error('speaker') is-invalid @enderror" 
                              name="speaker" id="#">
                             
          
                            <input type="hidden" name="price" class="fc-sc5 form-control @error('price') is-invalid @enderror" 
                            name="price" id="#" value="{{ $event->price}}">
                           
                     
                            <div class="col-sm-12">
                              <button class="btn btn-register">Register your event</button>
                             </div>
                  </div>
               </div>

              </form>
              
          </div>
        </div>
      </div>

   
@endsection