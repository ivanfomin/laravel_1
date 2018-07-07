
<form action="{{route('storeForm')}}" method="post">
    <input type="text" name="field">
    <br>
    <button type="submit">Submit</button>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>