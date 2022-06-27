@extends('frontend.master')
@section('content')

<section class="template">
    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="card text-center card-template">
                  
                    <div class="card-header card-parent-header">
                      Pilih Template CV Anda
                    </div>
            
                    @csrf
                    <div class="card-body">
                      <div class="row row-cols-1 row-cols-md-4 ">
                        
                      @foreach ($templates as $template)
                      <div class="col">
                          <div class="card mb-3">
                            <img width="100%" height="100%" src="{{asset($template->image)}}" class="card-img-top" alt="...">
                              <button class="btn d-md-block btn-pilih" onclick="getIdTemplate(this)" data-id="{{$template->id}}">Pilih</button>
                          </div>
                      </div>
                    @endforeach
                      </div>
                      </div>
                    <div class="card-footer card-parent-footer">
                      CV-in
                    </div>
                  
                  
                  </div>
            </div>
        </div>
        
    </div>
</section>

<script>
  function getIdTemplate(e){
    let template_id =  e.getAttribute('data-id');
    $.ajax({
      url: "{{route('template.pilih')}}",
      method: 'post',
      data : {
        "_token": "{{ csrf_token() }}",
        "template_id": template_id
        },
    success: function(data) {
      window.location.href = "{{route('template.form')}}";
    },
    error: function(data){
        alert("fail");
    }
    });
    
  }
</script>
@endsection