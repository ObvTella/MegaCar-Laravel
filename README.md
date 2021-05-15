# LARAVEL
E' il fratello piu' grande di Lumen.  
Offre:
* PHP Framework open source
* MVC
* Security
* Speed

# Setup:
` php artisan serve `

[localhost:8000](localhost:8000)

# Wiki
* MVC
	* Model  `app\Models\`  
	Usano il controller per interagire con il database
	* Controller  `app\Http\Controllers\`  
	Come si comporta l'applicazione. Comunicano con il database per ricevere dati richiesti dai modelli da inserire nelle viste
	* View `app\resources\views\`  
	Pagine html / css / javascript. Output finale
* vendor  
	* Contiene le librerie e i file essenziali per Laravel
* blade.php  
	* Template html con richiamo a Laravel {{ funzione() }}
* mix  
	* Compila css, scss, bubble, javascript e altro  
	* `npm run dev` o `npm run watch` (node.js)
* SCSS  
	* CSS migliorato
* Migrations  
	* GIT per il database
	* `php artisan migrate`
		* `migrate:drop`
		* `migrate:refresh`
		* `migrate:status`
* Factory
	* Riempono il database per testing  
* Eloquent  
	* ORM (Object relation method), piano di astrazione del database, 1 interfaccia per + database  
## ARTISAN
- Crea un nuovo controller  
`php artisan make:controller [nomeController]`  
- Crea un nuovo modello e la migration  
`php artisan make:model [nomeModel] -m`  
- Esegue operazioni delle migration sul database  
`php artisan migrate`
- Crea una nuova factory  
`php artisan make::factory [nomeFactory] --model=[nomeModel]`

