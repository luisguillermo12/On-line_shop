@if (count($errors))
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <span class="glyphicon glyphicon-hand-right"></span> <strong> Error</strong>
      <hr class="message-inner-separator">
      <ul>
        @foreach ($errors->all() as $error)
          <li> {{ $error }} </li>
        @endforeach
      </ul>
    </div>
@endif
