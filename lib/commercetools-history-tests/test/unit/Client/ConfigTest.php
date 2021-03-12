<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\History\Test\Client;

use Commercetools\History\Client\Config;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testDefaultUri()
    {
        $c = new Config();
        $expectedUri = "https://history.europe-west1.gcp.commercetools.com";
        self::assertSame($expectedUri, $c->getApiUri());
        self::assertSame($expectedUri, $c->getOptions()[Config::OPT_BASE_URI]);
    }

    public function testBaseUri()
    {
        $c = new Config([], "baseUri");
        self::assertSame("baseUri", $c->getApiUri());
        self::assertSame("baseUri", $c->getOptions()[Config::OPT_BASE_URI]);
    }

    public function testOptionsBaseUri()
    {
        $c = new Config([Config::OPT_BASE_URI => "optBaseUri"], "baseUri");
        self::assertSame("baseUri", $c->getApiUri());
        self::assertSame("optBaseUri", $c->getOptions()[Config::OPT_BASE_URI]);
    }
}
