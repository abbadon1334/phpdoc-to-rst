.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


RstBuilder
==========


.. php:namespace:: JuliusHaertl\PHPDocToRst\Builder

.. php:class:: RstBuilder


	.. rst-class:: phpdoc-description
	
		| Helper class to build reStructuredText files\.
		
	
	:Source:
		`/Builder/RstBuilder.php#26 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L26>`_
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public getContent\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::getContent\(\)>`
* :php:meth:`public addFieldList\($key, $value\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addFieldList\(\)>`
* :php:meth:`public addLine\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addLine\(\)>`
* :php:meth:`public add\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::add\(\)>`
* :php:meth:`public static escape\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::escape\(\)>`
* :php:meth:`public unindent\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::unindent\(\)>`
* :php:meth:`public addMultiline\($text, $blockIndent\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addMultiline\(\)>`
* :php:meth:`public indent\(\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::indent\(\)>`
* :php:meth:`public addH1\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addH1\(\)>`
* :php:meth:`public addH2\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addH2\(\)>`
* :php:meth:`public addH3\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addH3\(\)>`
* :php:meth:`public addMultilineWithoutRendering\($text\)<JuliusHaertl\\PHPDocToRst\\Builder\\RstBuilder::addMultilineWithoutRendering\(\)>`


Properties
----------

.. php:attr:: protected static content

	:Source:
		`/Builder/RstBuilder.php#29 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L29>`_
	
	:Type: string 


.. php:attr:: private static indentLevel

	:Source:
		`/Builder/RstBuilder.php#30 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L30>`_
	


Methods
-------

.. rst-class:: public

	.. php:method:: public getContent()
	
		:Source:
			`/Builder/RstBuilder.php#32 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L32>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addFieldList( $key, $value)
	
		:Source:
			`/Builder/RstBuilder.php#37 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L37>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addLine( $text=\'\')
	
		:Source:
			`/Builder/RstBuilder.php#45 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L45>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public add( $text)
	
		:Source:
			`/Builder/RstBuilder.php#52 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L52>`_
		
		
	
	

.. rst-class:: public static

	.. php:method:: public static escape( $text)
	
		:Source:
			`/Builder/RstBuilder.php#59 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L59>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public unindent()
	
		:Source:
			`/Builder/RstBuilder.php#67 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L67>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addMultiline( $text=\'\', $blockIndent=false)
	
		:Source:
			`/Builder/RstBuilder.php#75 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L75>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public indent()
	
		:Source:
			`/Builder/RstBuilder.php#92 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L92>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addH1( $text)
	
		:Source:
			`/Builder/RstBuilder.php#104 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L104>`_
		
		
		:Parameters:
			* **$text** (string)  

		
		:Returns: $this 
	
	

.. rst-class:: public

	.. php:method:: public addH2( $text)
	
		:Source:
			`/Builder/RstBuilder.php#112 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L112>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addH3( $text)
	
		:Source:
			`/Builder/RstBuilder.php#120 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L120>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public addMultilineWithoutRendering( $text)
	
		:Source:
			`/Builder/RstBuilder.php#128 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Builder/RstBuilder.php#L128>`_
		
		
	
	

