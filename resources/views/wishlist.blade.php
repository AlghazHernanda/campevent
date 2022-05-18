@extends('layouts.wishlist') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
    <div>
        <h2 class="h2-wl">Wishlist Event</h2>
        <h3 class="h3-wl">Find your saved event and get ready to attend the event</h3>
    </div>
    <div class="row" style="padding-top: 38px;">
        @foreach ($loveWishlist as $love)
        @foreach ($events as $event)
        {{-- && $event->id == $loveWishlist->event_id && auth()->user()->id = $loveWishlist->user_id --}}
            @if ($event->status === 'accepted' && $event->id == $love->event_id)
                <div class="col">
                    <div class="card">loveWishlist
                        <div class="photo">
                            <img src="" class="ifest" alt=" " />
                            {{-- {{ asset('storage/' . $event->image) }} --}}
                            <div>
                                <img src="Vector-2.png" class="love" alt=" " />
                            </div>
                            <div class="row text-card">
                                @for ($i = 0; $i < 2; $i++)
                                    <div class="col status-card">{{ $event->eventTheme[$i] }}</div>
                                    {{-- <div class="col status-card">{{ $event->eventTheme[1]}}</div> --}}
                                @endfor
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm">
                                    <p class="bi bi-calendar-date">{{ $event->date }}</p>
                                </div>
                                <div class="col-sm">
                                    <p class="bi bi-person-circle"> {{ $event->author->fullname }} </p>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <a href="#"><button class="btn btn-card">See Details</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        @endforeach

        {{-- <div class="col">
                  <div class="card">
                    <div class="photo">
                      <img src="ifest.png" class="ifest" alt=" "/>
                      <div>
                        <img src="Vector-2.png" class="love" alt=" "/>
                      </div>
                      <div class="row text-card">
                        <div class="col status-card">Paid</div>
                        <div class="col info-card">online</div>
                      </div>
                    </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm">
                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                          </div>
                          <div class="col-sm">
                            <p class="bi bi-person-circle"> Roisyal </p>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <a href="#"><button class="btn btn-card">See Details</button></a>
                        </div>
                      </div>
                  </div>
                </div>
    
                <div class="col">
                  <div class="card">
                    <div class="photo">
                      <img src="ifest.png" class="ifest" alt=" "/>
                      <div>
                        <img src="Vector-2.png" class="love" alt=" "/>
                      </div>
                      <div class="row text-card">
                        <div class="col status-card">Paid</div>
                        <div class="col info-card">online</div>
                      </div>
                    </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm">
                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                          </div>
                          <div class="col-sm">
                            <p class="bi bi-person-circle"> Roisyal </p>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <a href="#"><button class="btn btn-card">See Details</button></a>
                        </div>
                      </div>
                  </div>
                </div>
    
                <div class="col">
                  <div class="card">
                    <div class="photo">
                      <img src="ifest.png" class="ifest" alt=" "/>
                      <div>
                        <img src="Vector-2.png" class="love" alt=" "/>
                      </div>
                      <div class="row text-card">
                        <div class="col status-card">Paid</div>
                        <div class="col info-card">online</div>
                      </div>
                    </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm">
                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                          </div>
                          <div class="col-sm">
                            <p class="bi bi-person-circle"> Roisyal </p>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <a href="#"><button class="btn btn-card">See Details</button></a>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="row" style="padding-top: 73px;">
                <div class="col">
                  <div class="card">
                    <div class="photo">
                      <img src="ifest.png" class="ifest" alt=" "/>
                      <div>
                        <img src="Vector-2.png" class="love" alt=" "/>
                      </div>
                      <div class="row text-card">
                        <div class="col status-card">Paid</div>
                        <div class="col info-card">online</div>
                      </div>
                    </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm">
                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                          </div>
                          <div class="col-sm">
                            <p class="bi bi-person-circle"> Roisyal </p>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <a href="#"><button class="btn btn-card">See Details</button></a>
                        </div>
                      </div>
                  </div>
                </div>
    
                <div class="col">
                  <div class="card">
                    <div class="photo">
                      <img src="ifest.png" class="ifest" alt=" "/>
                      <div>
                        <img src="Vector-2.png" class="love" alt=" "/>
                      </div>
                      <div class="row text-card">
                        <div class="col status-card">Paid</div>
                        <div class="col info-card">online</div>
                      </div>
                    </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm">
                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                          </div>
                          <div class="col-sm">
                            <p class="bi bi-person-circle"> Roisyal </p>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <a href="#"><button class="btn btn-card">See Details</button></a>
                        </div>
                      </div>
                  </div>
                </div>
    
                <div class="col">
                  <div class="card">
                    <div class="photo">
                      <img src="ifest.png" class="ifest" alt=" "/>
                      <div>
                        <img src="Vector-2.png" class="love" alt=" "/>
                      </div>
                      <div class="row text-card">
                        <div class="col status-card">Paid</div>
                        <div class="col info-card">online</div>
                      </div>
                    </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm">
                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                          </div>
                          <div class="col-sm">
                            <p class="bi bi-person-circle"> Roisyal </p>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <a href="#"><button class="btn btn-card">See Details</button></a>
                        </div>
                      </div>
                  </div>
                </div>
    
                <div class="col">
                  <div class="card">
                    <div class="photo">
                      <img src="ifest.png" class="ifest" alt=" "/>
                      <div>
                        <img src="Vector-2.png" class="love" alt=" "/>
                      </div>
                      <div class="row text-card">
                        <div class="col status-card">Paid</div>
                        <div class="col info-card">online</div>
                      </div>
                    </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-sm">
                            <p class="bi bi-calendar-date"> 29 Oct 2021 </p>
                          </div>
                          <div class="col-sm">
                            <p class="bi bi-person-circle"> Roisyal </p>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <a href="#"><button class="btn btn-card">See Details</button></a>
                        </div>
                      </div>
                  </div>
                </div> --}}
    </div>
    <div class="center" style="padding-top: 63px; padding-bottom: 64px;">
        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
    </div>
@endsection
