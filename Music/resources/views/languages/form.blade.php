<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Language Create Form</div>

                    <div class="card-body">                       
                        <form action="{{route('language.form')}}" method="post">
                            @csrf
                             <div class="form-group">
                                 <label for="usr">Language Name:</label>
                                 <input type="text" class="form-control" name="name">
                            </div>
                    <p aling="center"><button class="btn btn-success">Save changes</button></p>
              </form>
            </div>
        </div>
        </div> 
    </div>
</div>
@endsection -->