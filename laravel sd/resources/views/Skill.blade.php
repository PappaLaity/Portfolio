{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('outil', 'Outil:') !!}
			{!! Form::text('outil') !!}
		</li>
		<li>
			{!! Form::label('version', 'Version:') !!}
			{!! Form::text('version') !!}
		</li>
		<li>
			{!! Form::label('language', 'Language:') !!}
			{!! Form::text('language') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}