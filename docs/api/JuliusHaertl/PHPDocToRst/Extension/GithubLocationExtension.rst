.. rst-class:: phpdoctorst

.. role:: php(code)
	:language: php


GithubLocationExtension
=======================


.. php:namespace:: JuliusHaertl\PHPDocToRst\Extension

.. php:class:: GithubLocationExtension


	.. rst-class:: phpdoc-description
	
		| This extension adds a link to the source at github to all elements\.
		
		| Arguments
		| 0 =\> Url to the github repo \(required\)
		| 1 =\> Path to the git repository \(required\)
		| 2 =\> Branch to link to \(default=master\)
		
	
	:Source:
		`/Extension/GithubLocationExtension.php#37 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Extension/GithubLocationExtension.php#L37>`_
	
	:Parent:
		:php:class:`JuliusHaertl\\PHPDocToRst\\Extension\\Extension`
	


Summary
-------

Methods
~~~~~~~

* :php:meth:`public prepare\(\)<JuliusHaertl\\PHPDocToRst\\Extension\\GithubLocationExtension::prepare\(\)>`
* :php:meth:`public render\($type, $builder, $element\)<JuliusHaertl\\PHPDocToRst\\Extension\\GithubLocationExtension::render\(\)>`
* :php:meth:`private getGithubLink\($file, $line, $branch\)<JuliusHaertl\\PHPDocToRst\\Extension\\GithubLocationExtension::getGithubLink\(\)>`


Properties
----------

.. php:attr:: protected static basePath

	:Source:
		`/Extension/GithubLocationExtension.php#39 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Extension/GithubLocationExtension.php#L39>`_
	


.. php:attr:: protected static githubRepo

	:Source:
		`/Extension/GithubLocationExtension.php#40 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Extension/GithubLocationExtension.php#L40>`_
	


.. php:attr:: protected static branch

	:Source:
		`/Extension/GithubLocationExtension.php#41 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Extension/GithubLocationExtension.php#L41>`_
	


Methods
-------

.. rst-class:: public

	.. php:method:: public prepare()
	
		:Source:
			`/Extension/GithubLocationExtension.php#43 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Extension/GithubLocationExtension.php#L43>`_
		
		
	
	

.. rst-class:: public

	.. php:method:: public render( $type, &$builder, $element)
	
		:Source:
			`/Extension/GithubLocationExtension.php#60 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Extension/GithubLocationExtension.php#L60>`_
		
		
		:Parameters:
			* **$type** (string)  
			* **$builder** (:any:`JuliusHaertl\\PHPDocToRst\\Builder\\FileBuilder <JuliusHaertl\\PHPDocToRst\\Builder\\FileBuilder>`)  
			* **$element** (:any:`phpDocumentor\\Reflection\\Element <phpDocumentor\\Reflection\\Element>`)  

		
	
	

.. rst-class:: private

	.. php:method:: private getGithubLink( $file, $line=1, $branch=\'master\')
	
		:Source:
			`/Extension/GithubLocationExtension.php#77 <http://github.com/abbadon1334/phpdoc-to-rst//blob/master//Extension/GithubLocationExtension.php#L77>`_
		
		
	
	

