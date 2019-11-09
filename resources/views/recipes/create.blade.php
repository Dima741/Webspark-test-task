@extends('layouts.app')

@section('content')
    <form>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="название рецепта">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"></label>
            <textarea class="form-control" rows="3" placeholder="описание"></textarea>

        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection


