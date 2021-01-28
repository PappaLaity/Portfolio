{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('DebutFormation', 'DebutFormation:') !!}
			{!! Form::text('DebutFormation') !!}
		</li>
		<li>
			{!! Form::label('finFormation', 'FinFormation:') !!}
			{!! Form::text('finFormation') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::label('diplome', 'Diplome:') !!}
			{!! Form::text('diplome') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}