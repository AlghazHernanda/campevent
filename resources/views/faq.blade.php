@extends('layouts.main') {{-- ini memanggil file main yang di dalam layout --}}
@section('container')
<div>
    <div style="text-align:center; margin-bottom: 20px; margin-top: 89px;">
        <div class="col-sm-12">
            <h1 style="color:  #ad8b73;">Frequently Asked Question</h1>
        </div>
    </div>
</div>

<div>
    <div style="text-align:center;">
        <div class="col-sm-12">
            <h3 style="color:  #bfbfbf;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus hendrerit sit ipsum</h3>
            <h3 style="color:  #bfbfbf;">imperdiet mauris pharetra viverra. </h3>
        </div>
    </div>
</div>

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          How can i buy a ticket?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus hendrerit sit ipsum imperdiet mauris pharetra viverra.
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          How can i buy a ticket?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" >
        <div class="accordion-body">
          lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus hendrerit sit ipsum imperdiet mauris pharetra viverra.
        </div>
      </div>
    </div>
    
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          How can i buy a ticket?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus hendrerit sit ipsum imperdiet mauris pharetra viverra.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          How can i buy a ticket?
        </button>
      </h2>
      <div id="collapseFour" class="accordion-collapse collapse" >
        <div class="accordion-body">
          lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus hendrerit sit ipsum imperdiet mauris pharetra viverra.
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="headingFive">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          How can i buy a ticket?
        </button>
      </h2>
      <div id="collapseFive" class="accordion-collapse collapse" >
        <div class="accordion-body">
          lorem ipsum dolor sit amet, consectetur adipiscing elit. Cursus hendrerit sit ipsum imperdiet mauris pharetra viverra.
        </div>
      </div>
    </div>
  </div>
@endsection