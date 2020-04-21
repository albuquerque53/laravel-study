<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="picture"/>
    <input type="submit" value="Upload Image" name="submit"/>
</form>