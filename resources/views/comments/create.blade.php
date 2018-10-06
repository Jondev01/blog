<h2>Schreiben Sie einen Kommentar</h2>
    {{ Form::open(array('action' => 'CommentsController@store')) }}
        <div class="form-group">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Text') }}
            {{ Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Text']) }}
        </div>
        {{ Form::hidden('post_id', $post_id) }}
        {{  Form::submit('Senden', ['class' => 'btn btn-primary']) }}
    {{  Form::close() }}