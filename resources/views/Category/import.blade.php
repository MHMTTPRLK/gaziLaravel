<form action="{{route('kategori.import')}}" method="post"  enctype="multipart/form-data">
    @csrf
    File Select:<input type="file" name="file"><br>

    <input type="submit" class="btn btn-success" value="Import">
</form>
