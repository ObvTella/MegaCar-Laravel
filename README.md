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
	
## ARTISAN
`php artisan make:controller [nomeController]`  
- Crea un nuovo controller