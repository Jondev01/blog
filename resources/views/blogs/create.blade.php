<h2>Erstellen Sie jetzt Ihren Blog!</h2>
    {{ Form::open(array('action' => 'BlogsController@store', 'enctype' => 'multipart/form-data')) }}
        <div class="form-group">
            {{ Form::label('title', 'Titel des Blogs') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Mein Blog']) }}
        </div>
        <div class="form-group">
            {{ Form::label('sub_title', 'Untertitel des Blogs') }}
            {{ Form::text('sub_title', '', ['class' => 'form-control', 'placeholder' => 'Dies ist ein Blog über mich']) }}
        </div>
        <div class="form-group">
            {{ Form::label('author', 'Autor/in des Blogs') }}
            {{ Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Blogger99']) }}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Beschreibung') }}
            {{ Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Mein Name ist Max und ich schreibe gerne Blogs']) }}
        </div>
        <div class="form-group">
                {{ Form::label('image', 'Fügen Sie ein Profilbild hinzu.') }}
            {{ Form::file('image') }}
        </div>
        {{  Form::submit('Blog erstellen', ['class' => 'btn btn-primary']) }}
    {{  Form::close() }}