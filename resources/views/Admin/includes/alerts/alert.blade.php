<div style="background-color: red; color: #fff">
    @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
      </ul>
  @endif
</div>