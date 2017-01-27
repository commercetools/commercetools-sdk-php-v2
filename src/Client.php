<?php
declare(strict_types=1);

namespace Commercetools\Raml;

use Cache\Adapter\Filesystem\FilesystemCachePool;
use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem;
use League\OAuth2\Client\Provider\AbstractProvider;
use Psr\Cache\CacheItemPoolInterface;

class Client extends HttpClient {

    public function __construct(
        array $config = [],
        AbstractProvider $oauthProvider = null,
        CacheItemPoolInterface $cache = null,
        LoggerInterface $logger = null,
        MessageFormatter $formatter = null
    ) {
        if (!isset($config['handler'])) {
            $config['handler'] = HandlerStack::create();
        }
        if (!isset($config['credentials'])) {
            $config['credentials'] = [];
        }
        if (is_null($cache)) {
            if (isset($config['cacheDir'])) {
                $cacheDir = $config['cacheDir'];
            } else {
                $cacheDir = getcwd();
            }
             
            $filesystemAdapter = new Local($cacheDir);
            $filesystem        = new Filesystem($filesystemAdapter);
            $cache = new FilesystemCachePool($filesystem);
        }

        /**
         * Configure client for security scheme oauth_2_0
         */
        $config['handler']->push(
            Middleware::mapRequest(
                $this->getHandler(
                    'oauth_2_0',
                    $config,
                    'https://auth.sphere.io/oauth/token',
                    'https://auth.sphere.io/oauth/token',
                    $cache,
                    $oauthProvider
                )
            ),
            'oauth_2_0'
        );

        if ($logger instanceof LoggerInterface) {
            if (is_null($formatter)) {
                $formatter = new MessageFormatter();
            }
            $config['handler']->push(
                Middleware::log($logger, $formatter),
                'logger'
            );
        }
        parent::__construct($config);
    }
    
    private function getHandler($name, $config, $accessTokenUrl, $authorizeUrl, CacheItemPoolInterface $cache, AbstractProvider $provider = null): OAuth2Handler {
        $credentials = isset($config['credentials'][$name]) ? $config['credentials'][$name] : $config['credentials'];
        if (isset($config['providers'][$name])) {
            $provider = $config['providers'][$name];
        }
        if (is_null($provider)) {
            $provider = new TokenProvider(
                array_merge(
                    [
                        'urlAccessToken' => $accessTokenUrl,
                        'urlAuthorize' => $authorizeUrl,
                    ],
                    $credentials
                )
            );
        }
        return new OAuth2Handler($name, $provider, $cache);
    }
}

