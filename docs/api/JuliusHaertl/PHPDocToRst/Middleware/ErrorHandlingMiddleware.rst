.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


ErrorHandlingMiddleware
=======================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Middleware

.. rst-class::  final

.. php:class:: ErrorHandlingMiddleware


	.. rst-class:: phpdoc-description
	
		| Class ErrorHandlingMiddleware\.
		
	
	:Source:
		`/Middleware/ErrorHandlingMiddleware.php#34 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Middleware/ErrorHandlingMiddleware.php#L34>`_
	
	:Implements:
		:php:interface:`phpDocumentor\\Reflection\\Middleware\\Middleware` 
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($apiDocBuilder\)<JuliusHaertl\\PHPDocToRst\\Middleware\\ErrorHandlingMiddleware::\_\_construct\(\)>`
* :php:meth:`public execute\($command, $next\)<JuliusHaertl\\PHPDocToRst\\Middleware\\ErrorHandlingMiddleware::execute\(\)>`


Properties
----------

.. php:attr:: private static apiDocBuilder

	:Source:
		`/Middleware/ErrorHandlingMiddleware.php#36 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Middleware/ErrorHandlingMiddleware.php#L36>`_
	


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $apiDocBuilder)
	
		:Source:
			`/Middleware/ErrorHandlingMiddleware.php#38 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Middleware/ErrorHandlingMiddleware.php#L38>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public execute( $command, $next)
	
		.. rst-class:: phpdoc-description
		
			| Executes this middleware class\.
			
		
		:Source:
			`/Middleware/ErrorHandlingMiddleware.php#51 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Middleware/ErrorHandlingMiddleware.php#L51>`_
		
		
		:Parameters:
			* **$command** (:any:`phpDocumentor\\Reflection\\Middleware\\Command <phpDocumentor\\Reflection\\Middleware\\Command>`)  
			* **$next** (callable)  

		
		:Returns: object 
	
	

