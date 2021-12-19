<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
	 
	//ПРОШУ, ПРОЧТИТЕ, ПРЕЖДЕ ЧЕМ УСТАНОВИТЬ ФАЙЛ README!
    public function up()
    {
		//1
        DB::table('tblactivities')->insert(
			[
				'activity_time' => '2021-12-01',
				'activity_description' => 'Мероприятие 1',
				'activity_location' => 'Парк "Зеленые избы"',
				'necessary_help' => 'Волонтеры',
				'number_of_vacansion' => '6'
			]
		);
        
		//2
		DB::table('tblactivities')->insert(
			[
				'activity_time' => '2021-12-05',
				'activity_description' => 'Мероприятие 2',
				'activity_location' => 'Площадь Кирова',
				'necessary_help' => 'Волонтеры 2',
				'number_of_vacansion' => '3'
			]
		);
		
		//3
		DB::table('tblactivities')->insert(
			[
				'activity_time' => '2021-12-04',
				'activity_description' => 'Мероприятие 3',
				'activity_location' => 'Где-то',
				'necessary_help' => 'Кто-то',
				'number_of_vacansion' => '0'
			]
		);
		
		DB::table('tblads')->insert(
			[
				'ad_title' => 'Косатка',
				'ad_text' => 'Нашел косатку недалеко от военной базы. У  себя не могу содержать. Просьба хозяина откликнуться.',
				'ad_status' => '1'
			]
		);
        
		DB::table('tblads')->insert(
			[
				'ad_title' => 'Кот',
				'ad_text' => 'Потерял рыжего кота в парке. Просьба не возвращать!',
				'ad_status' => '1'
			]
		);
		
		DB::table('tblcontent')->insert(
			['page_title' => 'Полезные ссылки',
			 'page_status' => true,
			 'content' => '<body class = "Grid">
	
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
								<li><a href="./1">Полезные ресурсы</a></li>
								<li><a href="./2">Оснащение корпусов ПетрГУ</a></li>
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<fieldset class = "mane">
			<legend class = "lega">&nbsp;Полезные ресурсы&nbsp;</legend>
		</fieldset>
		
		<div class = "footer">
			<div class = "number">
				8*********9 - Copyright
			</div>
			
			<div class = "copy">
				Copyright &#169;2021
			</div>
		</div>
		
	</body>',
			 'date_create' => '2021-12-07',
			 'category' => 'static',
			 'scripts' => '<link rel="stylesheet" href="/css/qwerty.css">'
			 ]
		);
		
		DB::table('tblcontent')->insert(
			['page_title' => 'Оснащение корпусов ПетрГУ',
			 'page_status' => true,
			 'content' => '<body class = "Grid">
	
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
								<li><a href="./1">Полезные ресурсы</a></li>
								<li><a href="./2">Оснащение корпусов ПетрГУ</a></li>
							</ul>
							
						</li>
						<li id = "Volonts"><a href="./Navi2">Волонтерам</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class = "bady">
		<div class = "for_form" style="margin-top:-100px">
			<form action="#" name="my_form" id="form">
			
			<p style="margin-left:0px; margin-top:10Svh; font-family: 'Gardens'; font-size:30px;"><b>Первый корпус ПетрГУ</b></p>
			
			<div class = "form_grid" style = "margin-top: 10vh;">
			
			<div class = "form_left" style = "">
			
			<div>
				<label for="phone">Телефон.................88142711053</label>
			</div>
			
			<div>
				<label for="address">Адрес....................г.Петрозаводск,ул.Анохина,д.20</label>
			</div>
			
			<div style="margin-top: 10vh; white-space: nowrap;">
				<label for="desc">Описание оснащения</label>
				
	
			</div>
			
			
			</div>
			
			<div class = "form_right" style = "margin-left:-5vw;">
			
			<div>
				<img src="/images/building1.jpg" align="right" style="width: 350px; height: 350px" id="hp">
			</div>
			
			</div>
		</form>
		</div>
		</div>
		
		<div class = "bady">
		<div class = "for_form">
			<form action="#" name="my_form" id="form">
			
			<p style="margin-left:0px; margin-top:-4Svh; font-family: 'Gardens'; font-size:30px;"><b>Второй корпус ПетрГУ</b></p>
			
			<div class = "form_grid" style = "margin-top: 10vh;">
			
			<div class = "form_left" style = "">
			
			<div>
				<label for="phone">Телефон.................88142711053</label>
			</div>
			
			<div>
				<label for="address">Адрес....................г.Петрозаводск,ул.Анохина,д.20</label>
			</div>
			
			<div style="margin-top: 10vh; white-space: nowrap;">
				<label for="desc">Описание оснащения</label>
				
	
			</div>
			
			
			</div>
			
			<div class = "form_right" style = "margin-left:-5vw;">
			
			<div>
				<img src="/images/building2.jpg" align="right" style="width: 350px; height: 350px" id='hp'>
			</div>
			
			</div>
		</form>
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
		
	</body>',
			 'date_create' => '2021-12-14',
			 'category' => 'static',
			 'scripts' => '<link rel="stylesheet" href="/css/qwerty.css">
		<style>
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
			font-family: "Gardens"; 
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

		</style>'
			 ]
		);
		
		DB::table('tbldoctors')->insert(
			[
				'doctor_name' => 'Новикова Сафина Констаниновна',
				'doctor_speciality' => 'Терапевт',
				'doctor_phone_number' => '890094323564',
				'doctor_job' => 'ул. Райлено, д. 64, каб. 22'
			]
		);
		
		DB::table('tbldoctors')->insert(
			[
				'doctor_name' => 'Туров Демьян Викторович',
				'doctor_speciality' => 'Психиатр',
				'doctor_email' => 'turov123@gmail.com',
				'doctor_job' => 'ул. Райлено, д. 64, каб. 34'
			]
		);
		
		DB::table('tblnews')->insert(
			[
				'news_title' => 'Древняя спячка',
				'news_text' => 'На юге Северного полюса во льдах ученые обнаружили живого дракона в глубокой спячке. От комментариев пока что отказываются.',
				'news_status' => 1,
				'news_date_of_creation' => '2021-12-13'
			]
		);
		
		DB::table('tblnews')->insert(
			[
				'news_title' => 'Милые хищники',
				'news_text' => 'Ученые выяснили, что касатки могут делиться едой друг с другом во время дефицита еды. ',
				'news_status' => 1,
				'news_date_of_creation' => '2021-12-13'
			]
		);
		
		DB::table('tblnews')->insert(
			[
				'news_title' => 'Воровки',
				'news_text' => 'Дельфины проникли через сетку на военную базу и украли деактивированную бомбу.',
				'news_status' => 1,
				'news_date_of_creation' => '2021-12-13'
			]
		);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		DB::table('tblactivities')->where('activity_description', '=' ,'Мероприятие 1')->delete();
		DB::table('tblactivities')->where('activity_description', '=' ,'Мероприятие 2')->delete();
		DB::table('tblactivities')->where('activity_description', '=' ,'Мероприятие 3')->delete();

		DB::table('tblads')->where('ad_title', '=' ,'Кот')->delete();
		DB::table('tblads')->where('ad_title', '=' ,'Косатка')->delete();
		
		DB::table('tblContent')->where('page_title', '=' ,'Полезные ссылки')->delete();
		DB::table('tblContent')->where('page_title', '=' ,'Оснащение корпусов ПетрГУ')->delete();
		
		DB::table('tbldoctors')->where('doctor_name', '=' ,'Новикова Сафина Констаниновна')->delete();
		DB::table('tbldoctors')->where('doctor_name', '=' ,'Туров Демьян Викторович')->delete();
		
		DB::table('tblnews')->where('news_title', '=' ,'Древняя спячка')->delete();
		DB::table('tblnews')->where('news_title', '=' ,'Милые хищники')->delete();
		DB::table('tblnews')->where('news_title', '=' ,'Воровки')->delete();
    }
}
