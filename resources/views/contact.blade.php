
    @if($errors->any())

        @foreach($errors->all() as $error)
            <li>{{ $error }}</li> 
        @endforeach
    @endif
    <form action="{{ route('contactstore')}}" method="post">
    <!-- version 5.2     -->
    <!-- {{csrf_field ()}} -->
    <!-- version 5.2 + -->
        @csrf
        <label for="Email">Email : </label>
        <input type="text" name="email"/>
        <input type="submit"/>
    </form>
