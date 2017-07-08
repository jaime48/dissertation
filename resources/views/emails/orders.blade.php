<html>
<body>


<form name="info" id="info" method="post" action="react">
    name:<input type="text" name="name" id="name"><br>
    age:<input type="text" name="age" id="age"><br>
    start_date:<input type="text" name="start_date" id="start_date">

    <input type="text" name="_token" value="{{csrf_token()}}">
    <button type="submit">submit</button>
</form>

<div>This is the email.</div>
</body>
</html>
<div>
    Orders number: {{ $orders }}
</div>
@if(count($errors)>0)
    @foreach($errors->all() as $value)
        <li>{{$value}}</li>
    @endforeach
@endif