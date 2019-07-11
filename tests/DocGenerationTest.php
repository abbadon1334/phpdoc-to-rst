<?php

namespace JuliusHaertl\PHPDocToRst\Test;

use JuliusHaertl\PHPDocToRst\ApiDocBuilder;
use JuliusHaertl\PHPDocToRst\Extension\GithubLocationExtension;
use JuliusHaertl\PHPDocToRst\Extension\InterfaceImplementors;
use JuliusHaertl\PHPDocToRst\Extension\NoPrivateExtension;
use JuliusHaertl\PHPDocToRst\Extension\PublicOnlyExtension;
use JuliusHaertl\PHPDocToRst\Extension\TocExtension;
use PHPUnit_Framework_TestCase;

class DocGenerationTest extends PHPUnit_Framework_TestCase
{
    public function testBuildDocumentation()
    {
        $src = [__DIR__.'/../src'];
        $dst = __DIR__.'/../docs/api';

        $apiDocBuilder = new ApiDocBuilder($src, $dst);
        $apiDocBuilder->setVerboseOutput(true);
        $apiDocBuilder->setDebugOutput(true);
        $apiDocBuilder->addExtension(InterfaceImplementors::class);
        $apiDocBuilder->build();
    }

    public function testDocumentingSelf()
    {
        $src = [__DIR__.'/../src'];
        $dst = __DIR__.'/../tests/self-doc';

        $apiDocBuilder = new ApiDocBuilder($src, $dst);
        $apiDocBuilder->setVerboseOutput(true);
        $apiDocBuilder->setDebugOutput(true);
        $apiDocBuilder->addExtension(InterfaceImplementors::class);
        $apiDocBuilder->build();
    }

    public function testDocumentingPSR()
    {
        $src = [__DIR__.'/../vendor/psr'];
        $dst = __DIR__.'/../tests/psr-doc';

        $apiDocBuilder = new ApiDocBuilder($src, $dst);
        $apiDocBuilder->setVerboseOutput(true);
        $apiDocBuilder->setDebugOutput(true);
        $apiDocBuilder->addExtension(InterfaceImplementors::class);
        $apiDocBuilder->build();
    }

    public function testDocumentingDocumentor()
    {
        $src = [__DIR__.'/../vendor/phpdocumentor'];
        $dst = __DIR__.'/../tests/documentor-doc';

        $apiDocBuilder = new ApiDocBuilder($src, $dst);
        $apiDocBuilder->setVerboseOutput(true);
        $apiDocBuilder->setDebugOutput(true);
        $apiDocBuilder->addExtension(InterfaceImplementors::class);
        $apiDocBuilder->build();
    }

    public function testDocumentingWithExtension()
    {
        $src = [__DIR__.'/../src'];
        $dst = __DIR__.'/../tests/self-doc';

        $apiDocBuilder = new ApiDocBuilder($src, $dst);
        $apiDocBuilder->setVerboseOutput(true);
        $apiDocBuilder->setDebugOutput(true);
        $apiDocBuilder->addExtension(PublicOnlyExtension::class);
        $apiDocBuilder->addExtension(NoPrivateExtension::class);
        $apiDocBuilder->addExtension(TocExtension::class);
        $apiDocBuilder->addExtension(InterfaceImplementors::class);
        $apiDocBuilder->addExtension(GithubLocationExtension::class, [
            'http://github.com/abbadon1334',
            'phpdoc-to-rst',
            'master',
        ]);
        $apiDocBuilder->build();
    }
}
