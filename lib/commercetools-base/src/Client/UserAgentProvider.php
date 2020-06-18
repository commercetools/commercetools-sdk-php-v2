<?php


declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Client;

use GuzzleHttp\ClientInterface;

class UserAgentProvider
{
    /**
      * @psalm-var string
      * @readonly
      */
    private $userAgent;
    
    public function __construct(string $suffix = null)
    {
        if (defined('\GuzzleHttp\ClientInterface::MAJOR_VERSION')) {
            $clientVersion = (string) constant(ClientInterface::class . '::MAJOR_VERSION');
        } else {
            $clientVersion = (string) constant(ClientInterface::class . '::VERSION');
        }
        $userAgent = 'commercetools-sdk';

        $userAgent .= ' (GuzzleHttp/' . $clientVersion;
        if (extension_loaded('curl') && function_exists('curl_version')) {
            $userAgent .= '; curl/' . (string) \curl_version()['version'];
        }
        $userAgent .= ') PHP/' . PHP_VERSION;
        if (!is_null($suffix)) {
            $userAgent .= ' ' . $suffix;
        }
        $this->userAgent = $userAgent;
    }
    
    public function getUserAgent(): string
    {
        return $this->userAgent;
    }
}
