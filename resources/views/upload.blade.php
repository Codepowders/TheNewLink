<form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
  <label>select image to upload:</label>
  <input type="file" name="file" id="file">
  <input type="submit" value="Upload" name="submit">
  <input type="hidden" value="{{ csrf_token() }}" name="_token">
</form>
