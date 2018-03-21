<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Client;

class Config
{
    const API_URI = 'https://api.sphere.io';
    const AUTH_URI = 'https://auth.sphere.io/oauth/token';

    const OPT_BASE_URI = 'base_uri';
    const OPT_AUTH_URI = 'auth_uri';
    const OPT_CACHE_DIR = 'cacheDir';
    const OPT_CREDENTIALS = 'credentials';
    const OPT_CLIENT_OPTIONS = 'options';

    /**
     * @var string
     */
    private $apiUrl;

    /**
     * @var string
     */
    private $authUrl;

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var string
     */
    private $cacheDir;

    /**
     * @var array
     */
    private $clientOptions;

    /**
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->apiUrl = isset($config[self::OPT_BASE_URI]) ? $config[self::OPT_BASE_URI] : static::API_URI;
        $this->authUrl = isset($config[self::OPT_AUTH_URI]) ? $config[self::OPT_AUTH_URI] : static::AUTH_URI;
        $this->cacheDir = isset($config[self::OPT_CACHE_DIR]) ? $config[self::OPT_CACHE_DIR] : getcwd();
        $this->credentials = new Credentials();
        if (isset($config[self::OPT_CREDENTIALS])) {
            if ($config[self::OPT_CREDENTIALS] instanceof Credentials) {
                $this->credentials = $config[self::OPT_CREDENTIALS];
            } elseif(is_array($config[self::OPT_CREDENTIALS])) {
                $this->credentials = new Credentials($config[self::OPT_CREDENTIALS]);
            }
        }
        $this->clientOptions = isset($config[self::OPT_CLIENT_OPTIONS]) && is_array($config[self::OPT_CLIENT_OPTIONS]) ?
            $config[self::OPT_CLIENT_OPTIONS] : [];
    }

    /**
     * @return string
     */
    public function getApiUrl(): string
    {
        return $this->apiUrl;
    }

    /**
     * @param string $apiUrl
     * @return Config
     */
    public function setApiUrl(string $apiUrl): Config
    {
        $this->apiUrl = $apiUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthUrl(): string
    {
        return $this->authUrl;
    }

    /**
     * @param string $authUrl
     * @return Config
     */
    public function setAuthUrl($authUrl): Config
    {
        $this->authUrl = $authUrl;
        return $this;
    }

    /**
     * @return Credentials
     */
    public function getCredentials(): Credentials
    {
        return $this->credentials;
    }

    /**
     * @param Credentials $credentials
     * @return Config
     */
    public function setCredentials(Credentials $credentials): Config
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return array
     */
    public function getClientOptions(): array
    {
        return $this->clientOptions;
    }

    /**
     * @param $options
     * @return Config
     */
    public function setClientOptions(array $options): Config
    {
        $this->clientOptions = $options;
        return $this;
    }

    /**
     * @return string
     */
    public function getCacheDir(): string
    {
        return $this->cacheDir;
    }

    /**
     * @param string $cacheDir
     * @return Config
     */
    public function setCacheDir($cacheDir): Config
    {
        $this->cacheDir = $cacheDir;
        return $this;
    }

    public function getOptions(): array
    {
        return array_merge(
            [self::OPT_BASE_URI => $this->getApiUrl()],
            $this->clientOptions
        );
    }
}
