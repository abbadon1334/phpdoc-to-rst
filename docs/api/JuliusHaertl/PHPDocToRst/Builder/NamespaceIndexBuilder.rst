.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


NamespaceIndexBuilder
=====================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. php:class:: NamespaceIndexBuilder


	.. rst-class:: phpdoc-description
	
		| This class will build an index for each namespace\.
		
		| It contains a toc for child namespaces, classes, traits, interfaces and functions\.
		
	
	:Source:
		`/Builder/NamespaceIndexBuilder.php#34 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L34>`_
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Builder\\PhpDomainBuilder`
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public \_\_construct\($extensions, $namespaces, $current, $functions, $constants\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::\_\_construct\(\)>`
* :php:meth:`private findChildNamespaces\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::findChildNamespaces\(\)>`
* :php:meth:`public render\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::render\(\)>`
* :php:meth:`protected addIndex\($type\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::addIndex\(\)>`
* :php:meth:`private shouldRenderIndex\($type, $element\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::shouldRenderIndex\(\)>`
* :php:meth:`private getElementList\($type\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::getElementList\(\)>`
* :php:meth:`private getHeaderForType\($type\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::getHeaderForType\(\)>`
* :php:meth:`private addElementTocEntry\($entry\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::addElementTocEntry\(\)>`
* :php:meth:`private addFunctions\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\NamespaceIndexBuilder::addFunctions\(\)>`


Constants
---------

.. php:const:: RENDER_INDEX_NAMESPACE = 0

	:Source:
		`/Builder/NamespaceIndexBuilder.php#36 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L36>`_
	


.. php:const:: RENDER_INDEX_CLASSES = 1

	:Source:
		`/Builder/NamespaceIndexBuilder.php#37 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L37>`_
	


.. php:const:: RENDER_INDEX_TRAITS = 2

	:Source:
		`/Builder/NamespaceIndexBuilder.php#38 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L38>`_
	


.. php:const:: RENDER_INDEX_INTERFACES = 3

	:Source:
		`/Builder/NamespaceIndexBuilder.php#39 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L39>`_
	


.. php:const:: RENDER_INDEX_FUNCTIONS = 4

	:Source:
		`/Builder/NamespaceIndexBuilder.php#40 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L40>`_
	


.. php:const:: RENDER_INDEX_CONSTANTS = 5

	:Source:
		`/Builder/NamespaceIndexBuilder.php#41 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L41>`_
	


Properties
----------

.. php:attr:: private static currentNamespace

	:Source:
		`/Builder/NamespaceIndexBuilder.php#44 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L44>`_
	
	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Namespace\_ <phpDocumentor\\Reflection\\Php\\Namespace\_>` 


.. php:attr:: private static namespaces

	:Source:
		`/Builder/NamespaceIndexBuilder.php#47 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L47>`_
	
	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Namespace\_\[\] <phpDocumentor\\Reflection\\Php\\Namespace\_>` 


.. php:attr:: private static childNamespaces

	:Source:
		`/Builder/NamespaceIndexBuilder.php#50 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L50>`_
	
	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Namespace\_\[\] <phpDocumentor\\Reflection\\Php\\Namespace\_>` 


.. php:attr:: private static functions

	:Source:
		`/Builder/NamespaceIndexBuilder.php#53 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L53>`_
	
	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Function\_\[\] <phpDocumentor\\Reflection\\Php\\Function\_>` 


.. php:attr:: private static constants

	:Source:
		`/Builder/NamespaceIndexBuilder.php#56 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L56>`_
	
	:Type: :any:`\\phpDocumentor\\Reflection\\Php\\Constant\[\] <phpDocumentor\\Reflection\\Php\\Constant>` 


Methods
-------

.. rst-class:: public

	.. php:method:: public __construct( $extensions, $namespaces, $current, $functions, $constants)
	
		:Source:
			`/Builder/NamespaceIndexBuilder.php#58 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L58>`_
		
		
	
	

.. rst-class:: private

	.. php:method:: private findChildNamespaces()
	
		.. rst-class:: phpdoc-description
		
			| Find child namespaces for current namespace\.
			
		
		:Source:
			`/Builder/NamespaceIndexBuilder.php#71 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L71>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public render()
	
		:Source:
			`/Builder/NamespaceIndexBuilder.php#93 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L93>`_
		
		
	
	

.. rst-class:: protected

	.. php:method:: protected addIndex( $type)
	
		:Source:
			`/Builder/NamespaceIndexBuilder.php#119 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L119>`_
		
		
	
	

.. rst-class:: private

	.. php:method:: private shouldRenderIndex( $type, $element=null)
	
		:Source:
			`/Builder/NamespaceIndexBuilder.php#142 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L142>`_
		
		
	
	

.. rst-class:: private

	.. php:method:: private getElementList( $type)
	
		:Source:
			`/Builder/NamespaceIndexBuilder.php#161 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L161>`_
		
		
		:Parameters:
			* **$type** (int)  

		
		:Returns: array 
	
	

.. rst-class:: private

	.. php:method:: private getHeaderForType( $type)
	
		:Source:
			`/Builder/NamespaceIndexBuilder.php#188 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L188>`_
		
		
	
	

.. rst-class:: private

	.. php:method:: private addElementTocEntry( $entry)
	
		:Source:
			`/Builder/NamespaceIndexBuilder.php#201 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L201>`_
		
		
	
	

.. rst-class:: private

	.. php:method:: private addFunctions()
	
		:Source:
			`/Builder/NamespaceIndexBuilder.php#213 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/NamespaceIndexBuilder.php#L213>`_
		
		
	
	

