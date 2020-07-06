<html>
<head>
    <title>Contact us page</title>
</head>
<body>

<h1> Contact us </h1>

<form method="POST" action="{{route('contact.send')}}">
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="text" name="username">



    <input type="submit" name="submit"/>

</form>

<table border="1" style="width: 100%">
    <tr>
        <td>ID</td>
        <td>Name</td>
    </tr>

    @if(count($contacts) > 0)
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->username}}</td>
        </tr>
        @endforeach
        @else
    <p>No contact found</p>
        @endif
</table>
</body>
</html>
