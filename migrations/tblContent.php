<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create_tblContent extends Migration
{
    /**
     * Запустить миграцию.
     *
     * @return void
     */
    public function up()
    {
		/**
		 * Таблица: tblContent - таблица, содержащая контент страниц сайта
		 * Атрибуты:
		 * 
		 *id_page (PK) - идентификатор страницы сайта
		 *page_title - заголовок страницы
		 *page_status - статус страницы (размещена ли она на сайте (1) или нет (0))
		 *content - контент страницы (html код страницы)
		 *date_create - дата и время создания
		 *category - категория
		 *scripts - скрипты
		 
		 */
        Schema::create('tblContent', function (Blueprint $table) {
            $table->increments('id_page')->autoIncrement();
            $table->string('page_title');
			$table->boolean('page_status');
			$table->text('content');
			$table->dateTime('date_create');
			$table->string('category');
			$table->text('scripts');
						
            $table->timestamps();
        });
    }
}
?>
