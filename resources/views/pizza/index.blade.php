@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                   <ul class="list-group">
                        <a href="" class ="list-group-item list-group-item-action">View</a>
                        <a href="" class ="list-group-item list-group-item-action">Create</a>
                   </ul>    
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                   <div class=form-group>
                       <label for="name" >Name of Pizza</label>
                       <input type="text" class="form-control" name="name" placeholder="name of pizza">
                   </div>
                   <div class="form-group">
                        <label for="name" >Description of Pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-inline">
                        <label for="name" >Pizza price(₹)</label>
                        <input type="number" class="form-control" placeholder="small pizza price">
                        <input type="number" class="form-control" placeholder="medium pizza price">
                        <input type="number" class="form-control " placeholder="large pizza price">
                    </div>
                    <div class="form-group">
                        <label for="name" >Category</label>
                        <select class="form-control">
                            <option value=""></option>
                            <option value="Vegeterian">Vegeterian</option>
                            <option value="Non-vegeterian">Non-vegeterian</option>
                            <option value="Traditional">Traditional</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" class= "container mx-0">
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
