# phpdoc-to-rst

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/38b000f2f9754af9a110a93abdb710c9)](https://app.codacy.com/gh/abbadon1334/phpdoc-to-rst?utm_source=github.com&utm_medium=referral&utm_content=abbadon1334/phpdoc-to-rst&utm_campaign=Badge_Grade)
[![Build Status](https://travis-ci.org/abbadon1334/phpdoc-to-rst.svg?branch=develop)](https://travis-ci.org/abbadon1334/phpdoc-to-rst)
[![Coverage Status](https://coveralls.io/repos/github/abbadon1334/phpdoc-to-rst/badge.svg?branch=develop)](https://coveralls.io/github/abbadon1334/phpdoc-to-rst?branch=master)
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/fe2ceefd5ceb42ba8993f6cd4917b230)](https://www.codacy.com/gh/abbadon1334/phpdoc-to-rst/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=abbadon1334/phpdoc-to-rst&amp;utm_campaign=Badge_Grade)
[![Codacy Badge](https://app.codacy.com/project/badge/Coverage/fe2ceefd5ceb42ba8993f6cd4917b230)](https://www.codacy.com/gh/abbadon1334/phpdoc-to-rst/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=abbadon1334/phpdoc-to-rst&amp;utm_campaign=Badge_Coverage)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/abbadon1334/phpdoc-to-rst/badges/quality-score.png?b=develop)](https://scrutinizer-ci.com/g/abbadon1334/phpdoc-to-rst/?branch=develop)
[![Build Status](https://scrutinizer-ci.com/g/abbadon1334/phpdoc-to-rst/badges/build.png?b=develop)](https://scrutinizer-ci.com/g/abbadon1334/phpdoc-to-rst/build-status/develop)

Forked and refactor by Francesco "Abbadon1334" Danti.

Now working as intended, with good coverage. 

##Generate reStructuredText for Sphinx based documentation from PHPDoc annotations. 

This project is heavily based on [phpDocumentor/Reflection](https://github.com/phpDocumentor/Reflection)
and makes use of [sphinxcontrib-phpdomain](https://github.com/markstory/sphinxcontrib-phpdomain).

An example for the documentation output can be found in our [own documentation](http://phpdoc-to-rst.readthedocs.io/en/latest/api_docs.html)

## Quickstart

Install phpdoc-to-rst to your project directory: 
    
    composer require --dev abbadon1334/phpdoc-to-rst
    
Command line usage
-
Run the command line tool to parse the folders containing your PHP tree and render the reStructuredText files to the output directory:

    php vendor/bin/phpdoc-to-rst generate --repo-base "$PWD" --repo-github https://github.com/abbadon1334/phpdoc-to-rst -t docs/rst/ src/

Programatically usage to generate documentation rst
-
```PHP

    // your source path or multiple path to be parsed
    $src = [__DIR__.'/../src'];
    
    // destination path for the documentation
    $dst = __DIR__.'/../docs/api';
    
    $apiDocBuilder = new ApiDocBuilder($src, $dst);
    
    // DEBUG FATURES : optional
    // optional : activate verbosity
    $apiDocBuilder->setVerboseOutput(true);
    // optional : activate debug
    $apiDocBuilder->setDebugOutput(true);
    
    // EXTENSIONS : optional
        
    /**
     * Do not render classes marked with phpDoc internal tag
     * Do only render public methods/properties.
     */
    $apiDocBuilder->addExtension(PublicOnlyExtension::class);
        
    /**
     * Do not render classes marked with phpDoc internal tag
     * Do only render public methods/properties.
     */
    $apiDocBuilder->addExtension(NoPrivateExtension::class);
        
    /**
     * This extension will render a list of methods  for easy access
     * at the beginning of classes, interfaces and traits.
     */
    $apiDocBuilder->addExtension(TocExtension::class);
        
    /**
     * This extension adds a link to the source at github to all elements.
     *
     * Arguments
     * 0 => Url to the github repo (required)
     * 1 => Path to the git repository (required)
     * 2 => Branch to link to (default=master)
     */
    $apiDocBuilder->addExtension(GithubLocationExtension::class, [
        __DIR__.'/../src',
        'http://github.com/abbadon1334/phpdoc-to-rst/',
    ]);
    
    // Build documentation
    $apiDocBuilder->build();

```

