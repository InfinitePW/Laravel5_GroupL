<div class="right-menu">
    {!! Form::open(['route' => 'searchCategory', 'method' => 'GET']) !!}
        <label>Category Search</label><br>
        {!! Form::text('q', null, array('placeholder' => 'Enter your key...')) !!}
        {!! Form::submit('GO') !!}<br>
        <tr>
            <label>Type: </label>
            <td>
                {!! 
                    Form::select('type', [
                        'id' => 'ID',
                        'title' => 'TITLE',
                        'description' => 'DESCRIPTION',
                        'type' => 'TYPE',
                        'image' => 'IMAGE'
                    ], null, array('style' => 'color: black;'))
                !!}
            </td>
        </tr>
    {!! Form::close() !!}
</div>