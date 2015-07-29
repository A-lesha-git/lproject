<div class="form-group">
  {!! Form::label('title', 'title: ',['id'=>'title','foo'=>'bar']) !!}
  {!! Form::text('title') !!}
</div>
<div class="form-group">
  {!! Form::label('name', 'Name: ',['id'=>'name','foo'=>'bar']) !!}
  {!! Form::text('name') !!}
</div>
<div class="form-group">
  {!! Form::label('desc', 'Description: ',['id'=>'desc']) !!}  
  {!! Form::textarea('desc') !!}  
</div>
<div class="form-group">
  {!! Form::label('created_at', 'Created at: ',['id'=>'created_at']) !!}  
  {!! Form::input('date','published_at',date('Y-m-d'), ['class'=>'form-controll']) !!}
</div>
 <div class="form-group">
  {!! Form::submit('edit',['class'=>'btn btn-primary form-control']) !!}  
</div>   