.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


ApiDocBuilder
=============


.. php:namespace:: JuliusHaertl\PHPDocToRst

.. rst-class::  final

.. php:class:: ApiDocBuilder


	.. rst-class:: phpdoc-description
	
		| This class is used to parse a project tree and generate rst files
		| for all of the containing PHP structures\.
		
		| Example usage is documented in examples/example\.php
		
	
	:Source:
		`/ApiDocBuilder.php#49 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L49>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($srcDir, $dstDir\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::\_\_construct\(\)>`
* :php:meth:`public build\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::build\(\)>`
* :php:meth:`private setupReflection\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::setupReflection\(\)>`
* :php:meth:`public log\($message\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::log\(\)>`
* :php:meth:`private createDirectoryStructure\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::createDirectoryStructure\(\)>`
* :php:meth:`private parseFiles\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseFiles\(\)>`
* :php:meth:`public debug\($message\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::debug\(\)>`
* :php:meth:`private buildIndexes\(\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::buildIndexes\(\)>`
* :php:meth:`public setVerboseOutput\($v\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::setVerboseOutput\(\)>`
* :php:meth:`public setDebugOutput\($v\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::setDebugOutput\(\)>`
* :php:meth:`public addExtension\($class, $arguments\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::addExtension\(\)>`
* :php:meth:`private parseInterfaces\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseInterfaces\(\)>`
* :php:meth:`private parseClasses\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseClasses\(\)>`
* :php:meth:`private parseTraits\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseTraits\(\)>`
* :php:meth:`private parseFunctions\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseFunctions\(\)>`
* :php:meth:`private parseConstants\($file\)<JuliusHaertl\\PHPDocToRst\\ApiDocBuilder::parseConstants\(\)>`


Properties
----------

.. php:attr:: private static project

	:Source:
		`/ApiDocBuilder.php#52 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L52>`_
	
	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Project <phpDocumentor\\Reflection\\Php\\Project>` 


.. php:attr:: private static docFiles

	:Source:
		`/ApiDocBuilder.php#55 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L55>`_
	
	:Type: array 


.. php:attr:: private static constants

	:Source:
		`/ApiDocBuilder.php#58 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L58>`_
	
	:Type: array 


.. php:attr:: private static functions

	:Source:
		`/ApiDocBuilder.php#61 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L61>`_
	
	:Type: array 


.. php:attr:: private static extensions

	:Source:
		`/ApiDocBuilder.php#64 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L64>`_
	
	:Type: :any:`\\JuliusHaertl\\PHPDocToRst\\Extension\\Extension\[\] <JuliusHaertl\\PHPDocToRst\\Extension\\Extension>` 


.. php:attr:: private static extensionNames

	:Source:
		`/ApiDocBuilder.php#67 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L67>`_
	
	:Type: string[] 


.. php:attr:: private static extensionArguments

	:Source:
		`/ApiDocBuilder.php#70 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L70>`_
	
	:Type: array[] 


.. php:attr:: private static srcDir

	:Source:
		`/ApiDocBuilder.php#73 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L73>`_
	
	:Type: string[] 


.. php:attr:: private static dstDir

	:Source:
		`/ApiDocBuilder.php#76 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L76>`_
	
	:Type: string 


.. php:attr:: private static verboseOutput

	:Source:
		`/ApiDocBuilder.php#79 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L79>`_
	
	:Type: bool 


.. php:attr:: private static debugOutput

	:Source:
		`/ApiDocBuilder.php#82 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L82>`_
	
	:Type: bool 


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $srcDir, $dstDir)
	
		.. rst-class:: phpdoc-description
		
			| ApiDocBuilder constructor\.
			
		
		:Source:
			`/ApiDocBuilder.php#90 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L90>`_
		
		
		:Parameters:
			* **$srcDir** (string[])  array of paths that should be analysed
			* **$dstDir** (string)  path where the output documentation should be stored

		
	
	

.. rst-class:: public

	.. php:method:: public build()
	
		.. rst-class:: phpdoc-description
		
			| Run this to build the documentation\.
			
		
		:Source:
			`/ApiDocBuilder.php#99 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L99>`_
		
		
	
	

.. rst-class:: private

	.. php:method:: private setupReflection()
	
		:Source:
			`/ApiDocBuilder.php#112 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L112>`_
		
		
		:Throws: :any:`\\Exception <Exception>` 
	
	

.. rst-class:: public

	.. php:method:: public log( $message)
	
		.. rst-class:: phpdoc-description
		
			| Log a message\.
			
		
		:Source:
			`/ApiDocBuilder.php#168 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L168>`_
		
		
		:Parameters:
			* **$message** (string)  Message to be logged

		
	
	

.. rst-class:: private

	.. php:method:: private createDirectoryStructure()
	
		.. rst-class:: phpdoc-description
		
			| Create directory structure for the rst output\.
			
		
		:Source:
			`/ApiDocBuilder.php#180 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L180>`_
		
		
		:Throws: :any:`\\JuliusHaertl\\PHPDocToRst\\WriteException <JuliusHaertl\\PHPDocToRst\\WriteException>` 
	
	

.. rst-class:: private

	.. php:method:: private parseFiles()
	
		:Source:
			`/ApiDocBuilder.php#193 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L193>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public debug( $message)
	
		.. rst-class:: phpdoc-description
		
			| Log a debug message\.
			
		
		:Source:
			`/ApiDocBuilder.php#220 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L220>`_
		
		
		:Parameters:
			* **$message** (string)  Message to be logged

		
	
	

.. rst-class:: private

	.. php:method:: private buildIndexes()
	
		:Source:
			`/ApiDocBuilder.php#227 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L227>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public setVerboseOutput( $v)
	
		.. rst-class:: phpdoc-description
		
			| Enable verbose logging output\.
			
		
		:Source:
			`/ApiDocBuilder.php#265 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L265>`_
		
		
		:Parameters:
			* **$v** (bool)  Set to true to enable

		
	
	

.. rst-class:: public

	.. php:method:: public setDebugOutput( $v)
	
		.. rst-class:: phpdoc-description
		
			| Enable debug logging output\.
			
		
		:Source:
			`/ApiDocBuilder.php#275 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L275>`_
		
		
		:Parameters:
			* **$v** (bool)  Set to true to enable

		
	
	

.. rst-class:: public

	.. php:method:: public addExtension( $class, $arguments=\[\])
	
		:Source:
			`/ApiDocBuilder.php#285 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L285>`_
		
		
		:Parameters:
			* **$class** (string)  name of the extension class

		
		:Throws: :any:`\\Exception <Exception>` 
	
	

.. rst-class:: private

	.. php:method:: private parseInterfaces( $file)
	
		:Source:
			`/ApiDocBuilder.php#294 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L294>`_
		
		
		:Parameters:
			* **$file** (:any:`phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>`)  

		
	
	

.. rst-class:: private

	.. php:method:: private parseClasses( $file)
	
		:Source:
			`/ApiDocBuilder.php#314 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L314>`_
		
		
		:Parameters:
			* **$file** (:any:`phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>`)  

		
	
	

.. rst-class:: private

	.. php:method:: private parseTraits( $file)
	
		:Source:
			`/ApiDocBuilder.php#334 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L334>`_
		
		
		:Parameters:
			* **$file** (:any:`phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>`)  

		
	
	

.. rst-class:: private

	.. php:method:: private parseFunctions( $file)
	
		:Source:
			`/ApiDocBuilder.php#354 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L354>`_
		
		
		:Parameters:
			* **$file** (:any:`phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>`)  

		
	
	

.. rst-class:: private

	.. php:method:: private parseConstants( $file)
	
		:Source:
			`/ApiDocBuilder.php#370 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//ApiDocBuilder.php#L370>`_
		
		
		:Parameters:
			* **$file** (:any:`phpDocumentor\\Reflection\\Php\\File <phpDocumentor\\Reflection\\Php\\File>`)  

		
	
	

