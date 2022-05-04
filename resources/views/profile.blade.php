<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>
			Заявки ЛК
		</title>
		
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="/css/qwerty.css">
		<style>
		.Left{
			grid-column-start: 1;
			grid-column-end: 2;
			margin-left: 5vw;
			margin-top: 2vh;
margin-right: 10vw;
/*border-radius: 30px 0 0 30px;*/
overflow-y: scroll;
height:69vh;
border: 1px solid #CDCDCD;
font-family: 'Gardens';
font-size: 18px;
border-radius:20px;
			
		}
		
		.Right{
			grid-column-start: 2;
grid-column-end: 3;
margin-left: 2vw;
margin-top: 2vh;
margin-right: 10vw;
overflow-y: scroll;
height:69vh;
border: 1px solid #CDCDCD;
font-family: 'Gardens';
font-size: 18px;
border-radius:20px;
		}
		.stroke {
			margin-left: -1vw;
		}
		.nav-container {
			margin-left: 10vw;
		}
		
		.for_form {
			border: 1px solid #CDCDCD;
			width: 90%;
			margin-left: 5%;
			margin-right: 5%;
			margin-top: 1.5%;
			height:69vh;
			border-radius:20px;
			padding-top: 3vh;
		}
		form {
			margin-left: 5%;	
		}
		
		.form_grid{
			display: grid;
			grid-template-columns: 1fr 1fr;
		}
		
		fieldset {
		}
		
		*, *:before, *:after {
			box-sizing: border-box;
		}
		
		.bady {
			grid-template-columns: 1fr;
		}
		
		input, textarea, select {
			/* Убедимся, что все поля имеют одинаковые настройки шрифта
			По умолчанию в textarea используется моноширинный шрифт */
			font: 1em sans-serif;

			/* Определим размер полей */
			width: 300px;
			box-sizing: border-box;
		
			/* Стилизуем границы полей */
			border: 1px solid #999;
			
			padding: 10px;
			margin:20px 0; // add top and bottom margin
			border:0;
			box-shadow:0 0 15px 4px rgba(0,0,0,0.1);
			border-radius:20px;
		}

		input:focus, textarea:focus, select:focus {
			/* Дополнительная подсветка для элементов в фокусе */
			border-color: #000;
		}

		textarea {
			/* Выравним многострочные текстовые поля с их текстами-подсказками */
			vertical-align: top;

			/* Предоставим пространство для ввода текста */
			height: 5em;
		}
		label {
			font-family: 'Gardens'; 
			font-size:18px;
			/* Определим размер и выравнивание */
			display: inline-block;
			width: 20%;
			text-align: left;
		}

		.form_right label {
			width: 35%;
		}

		#hp{
		margin: -60px 100px 100px 0px;	
		}

		</style>
	</head>

	<body class = "Grid">
	
		<div class = "hat" >
			
			<div class = "mops">
				<a href = "/">
					<img src = "/images/petrsu.png" width = "55" height = "55" alt = "symbol" id = "img_1">
				</a>
			</div>
			
			<div class = "stroke">
				
				<div class = "PetrSU">
					ПетрГУ
				</div>
						
				<div class = "Sn">
					Социальный навигатор
				</div>
			</div>
			
			<div class = "nav">
				<div class = "nav-container">
					<ul>
						<li id = "Main"><a href="./">Главная страница</a></li>
						<li id = "Students"><a href="#">Студентам</a>
							<ul>
								<li><a href="./Navi1">Запись к врачу</a></li>
								<li><a href="./href">Полезные ресурсы</a></li>
								<li><a href="./buildings">Оснащение корпусов ПетрГУ</a></li>
								<li><a href="./profile">Заявки админа</a></li>
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class = "bady">
			<div class = "Left">
				<p id = "nameLeft">
					Заявки на мероприятия

					<a class="button" style= "padding-left: 15vh", href="./table_forAdmin_vol">Просмотр</a>

				</p>
				 
				 <div>
				 @foreach ($activity as $act)
				 	
					<div>
						
						<div>
							<h2>{{$act->activity_description}}</h2>
						@if ($act->activity_time !="")
						    <p>{{$act->activity_time}}
						@endif

						@if ($act->activity_location !="")
						   {{$act->activity_location}}</br>
						    </p>
						</div>
						@endif
						<p>Волонтёры:</p>
						<div>
							@php
						    $i = 0
						    @endphp
							@foreach($appl as $app)
							@if ($act->id_activites == $app->id_activites)
							@php
						    $i = $i+1;
						    @endphp
				<p>{{$i}}. {{$app->volonteer_name}},тел.{{$app->volonteer_email}} </br>
					
				</p>
				@endif
				@endforeach

			    <p> 
					Количество поданных заявок: {{$i}}

				</p>
			    </div>

			   
					</div>
				
			@endforeach
			</div>
			</div>
		
			
			<div class = "Right">
			
				<p id = "nameRight">
					Заявки к специалистам
					<a class="button" style= "padding-left: 15vh",  href="./table_forAdmin_doc">Просмотр</a>
				</p>
				
				<div>

				@foreach ($doctors_meet as $doc)
				 	
					<div>
						
						<div>
							<h2>{{$doc->doctor_name}}</h2>
						    <p>{{$doc->doctor_speciality}}, {{$doc->doctor_job}}</br>
						    </p>
						</div>
						
						<p>Даты посещения:</p>
						<div>
							@php
						    $i = 0
						    @endphp

							@foreach($doct_appl->sortBy('visit_time') as $doc_app)
							@if ($doc->id_doctor == $doc_app->id_doctor)
							@php
						    $i = $i+1;
						    @endphp
                         
				<p>{{$i}}. <b>{{$doc_app->visit_time->format('d.m:')}}</b></br>
               {{$doc_app->visit_time->format('H:i')}} {{$doc_app->student_name}}, тел.{{$doc_app->student_email}} </br>
					
				</p>
				@endif
				@endforeach

			    <p> 
					Количество поданных заявок: {{$i}}

				</p>
			    </div>

					</div>
				
			@endforeach
			</div>
				
			</div>
		</div>
	</div>
		
		<div class = "footer">
			<div class = "number">
				8*********9 - Copyright
			</div>
			
			<div class = "copy">
				Copyright &#169;2021
			</div>
		</div>
		
	</body>

</html>