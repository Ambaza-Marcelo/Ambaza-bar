

AMBAZA BAR MANAGEMENT SYSTEM

				#AMBAZA MARCELLIN



					FONCTIONNALITES
					'''''''''''''''
			1.gestion du stock
			2.gestion des achats
			3.gestion des ventes
			3.gestion des clients
			4.gestion des depenses
			5.prise des commandes en ligne
			6.Alerte Stock
			7.Suivi du stock
			8.Etablissement d'un ticket de vente apres consommation
			9.Gestion des employees
			10.gestion des rapports
			11.Statistiques du Systeme



<h2>AKABIRYA:</h2>
		<p>-SIMPLICITE</p>
		<p>-RAPIDITE</p>
		<p>-SECURISE</p>



<h1>HOW TO INSTALL</h1>

 <h2>step 1 :</h2>
 	<p>-copy</p>
 	<p>-cd repository</p>
 	<p>-git clone </p>
 <h2>step 2 :</h2>
 	<p>-go to env.dusk.example and rename it as env.</p>
 	<p>-DB_CONNECTION=mysql</p>
	<p>-DB_HOST=127.0.0.1</p>
	<p>-DB_PORT=3306</p>
	<p>-DB_DATABASE=dbname</p>
	<p>-DB_USERNAME=root</p>
	<p>-DB_PASSWORD=</p>

 <h2>step 3 :</h2>
 	-go to database file in config folder
 	'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
        ],

        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'dbname'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
        ],

        'dusk_testing' => [
            'driver' => 'sqlite',
            'database' => database_path('database.sqlite'),
            'prefix' => '',
        ],

    ],

   step4.
    -run the following commands
    	*php artisan migrate
    	*php artisan db:seed
    	*php artisan serve


le 29/09/2021