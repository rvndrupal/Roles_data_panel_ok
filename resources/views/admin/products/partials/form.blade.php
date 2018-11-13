<div class="row">

    <div class="col-md-9">
        <div class="from-group">    
            {!! Form::label('name','Nombre del Producto') !!}
            
            {!! Form::text('name', null, ['class' => 'form-control']) !!}   
            
        </div>

        <div class="from-group">    
                {!! Form::label('description','Descripción del Producto') !!}
                
                {!! Form::textarea('description', null, ['class' => 'form-control ', 'id'=>'editor1']) !!}   
                
        </div>


    </div>

    <div class="col-md-3">
       

        <div class="from-group">    
                {!! Form::label('created_at','Fecha de Publicación') !!}
                
                {!! Form::date('created_at', null, ['class' => 'form-control']) !!}   
                
        </div>
        <hr>
        <div class="from-group">    
                
                {!! Form::submit('Guardar', ['class' => 'btn btn-block btn-primary']) !!}   
                
        </div>
    </div>

    
</div>




