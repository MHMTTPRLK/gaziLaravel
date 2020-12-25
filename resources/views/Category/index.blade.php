<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<form method="post" action="{{route('category.save')}}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputEmail4">Category Name</label>
            <input type="text" class="form-control" id="inputEmail4" name="category_name" placeholder=" Category Name">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>
