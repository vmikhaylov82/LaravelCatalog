Laravel Catalog 

Используемые технологии:  
Laravel 10  
php 8.1  
Postgresql  
Docker  
  
Ендпоинты для тестирования в postman:

/api/  
описание: вывод всего каталога   
тип запроса: get    

/api/item/id   
описание: вывод отдельного товара    
тип запроса: get    
вместо id необходимо подставить id товара (тип integer)    

/api/saveComment 
описание: сохранение отзыва    
тип запроса: post    
переменные в raw json:     	
- goods_id - идентификатор товара (тип integer)    
- comment - текст отзыва (тип string)    
пример:    
{    
    "goods_id": 1,    
    "comment": "Прикольно"    
}    
	  
/api/indexWithParams  
описание: вывод каталога с параметрами фильтрации  
тип запроса: get  
переменные в raw json:   	 
- costFrom - цена от (тип enteger)  
- costTo - цена до (тип string)  
- matrix - тип матрицы экрана - массив значений: "Super AMOLED", "Super Retina XDR", "AMOLED", "IPS"  
- diagonal - диагональ экрана - массив значений: "6.1", "6.6", "6.67", "6.7", "6.78", "6.8"  
пример:  
{  
    "costFrom": 20000,  
    "matrix": [  
		"AMOLED",  
		"Super Retina XDR"  
    	]  
    "diagonal": [  
		"6.1",  
		"6.6",  
		"6.67",  
		"6.7",  
		"6.78",  
		"6.8"  
    	]  
}  

Дополнительно:
- база данных (товары и комментарии) инициализируется используя сидеры;
- для каталога товаров предусмотрена пагинация и фильтрация по цене, типу матрицы, диагонали экрана;
- для отдельного товара можно создавать отзывы, которые выводятся списком на странице данного товара.

Для запуска проекта необходимо:  
1. в консоле перейти в директорию, куда будет скачиваться репозиторий  
2. скачать удаленный репозиторий   
	git clone https://github.com/vmikhaylov82/LaravelCatalog.git  
3. перейти в папку LaravelCatalog и запустить docker-compose  
	docker-compose up -d  
4. загрузить зависимости проекта:  
	docker exec -it php bash  
	cd html  
	composer install  
5. создать миграции и сидеры:  
	php artisan migrate  
	php artisan db:seed  
6. запустить проект:    
	перейти в браузере на localhost  

