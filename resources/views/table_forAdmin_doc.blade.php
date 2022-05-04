<!DOCTYPE html>
<html lang = "ru">
	<head>
		<title>
			Оснащение ПетрГУ
		</title>
		
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="/css/qwerty.css">
		<style>
/* Стили таблицы (IKSWEB) */
table.iksweb{text-decoration: none;border-collapse:collapse;width:100%;text-align:center;}
table.iksweb th{font-weight:normal;font-size:14px; color:#000000;background-color:#ffffff;}
table.iksweb td{font-size:13px;color:#000000;}
table.iksweb td,table.iksweb th{white-space:pre-wrap;padding:10px 5px;line-height:13px;vertical-align: middle;border: 2px solid #c9c9c9;}
table.iksweb tr:hover{background-color:#f9fafb}
table.iksweb tr:hover td{color:#000000;cursor:default;}
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
			
<div style="margin-top: 5%">
		<table class="iksweb">
	<tbody>
		<tr>
			<th colspan="11">Заявки к специалистам</th>
		</tr>
		<tr>
			<td>Специалист №</td>
			<td>Дата</td>
			<td>ФИО</td>
			<td>Курс</td>
			<td>Институт</td>
			<td>Группа</td>
			<td>Телефон</td>
			<td>Почта</td>
			<td>Дата создания заявки</td>
			<td>Дата редактирования заявки</td>
			<td>Edit | Delete</td>
		</tr>
		@foreach ($doct_appl as $app)
		<tr>
			<td>{{$app->id_doctor}}</td>
			<td>{{$app->visit_time}}</td>
			<td>{{$app->student_name}}</td>
			<td>{{$app->course}}</td>
			<td>{{$app->institute}}</td>
			<td>{{$app->group}}</td>
			<td>{{$app->student_phone_number}}</td>
			<td>{{$app->student_email}}</td>
			<td>{{$app->created_at}}</td>
			<td>{{$app->updated_at}}</td>
			<td></td>
		</tr>
		@endforeach
		
	</tbody>
</table>

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