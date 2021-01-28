{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('debut', 'Debut:') !!}
			{!! Form::text('debut') !!}
		</li>
		<li>
			{!! Form::label('fin', 'Fin:') !!}
			{!! Form::text('fin') !!}
		</li>
		<li>
			{!! Form::label('nomEntreprise', 'NomEntreprise:') !!}
			{!! Form::text('nomEntreprise') !!}
		</li>
		<li>
			{!! Form::label('linkEntreprise', 'LinkEntreprise:') !!}
			{!! Form::text('linkEntreprise') !!}
		</li>
		<li>
			{!! Form::label('outils', 'Outils:') !!}
			{!! Form::text('outils') !!}
		</li>
		<li>
			{!! Form::label('profil', 'Profil:') !!}
			{!! Form::text('profil') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}