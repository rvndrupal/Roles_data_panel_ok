<div class="row">

    <div class="col-md-9">
        <div class="from-group {{ $errors->has('name') ? 'has-error': '' }}">    
            {!! Form::label('name','Nombre del Producto') !!}
            
            {!! Form::text('name', null, ['class' => 'form-control']) !!}   

            {{--  {!! $errors->first('name','<span class="alert-danger">:message</span>') !!}  funciona--}}
            
        </div>

        <div class="from-group {{ $errors->has('description') ? 'has-error': '' }}">    
                {!! Form::label('description','Descripción del Producto') !!}
                
                {!! Form::textarea('description', null, ['class' => 'form-control ', 'id'=>'editor1']) !!}   

                 {!! $errors->first('description','<span class="alert-danger">:message</span>') !!}  
                
        </div>


    </div>

    <div class="col-md-3">
       

        <div class="from-group">    
                {!! Form::label('created_at','Fecha de Publicación') !!}
                
                {!! Form::date('created_at', null, ['class' => 'form-control']) !!}   

                {!! $errors->first('created_at','<span class=" alert-danger">El campo fecha es Obligatorio</span>') !!}  
                
        </div>
        <hr>
        <div class="from-group">    
                
                {!! Form::submit('Guardar', ['class' => 'btn btn-block btn-primary']) !!}   
                
        </div>
    </div>

    
</div>




