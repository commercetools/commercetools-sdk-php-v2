<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Client;

class Credentials
{
    const CLIENT_ID = 'clientId';
    const CLIENT_SECRET = 'clientSecret';
    const SCOPE = 'scope';

    /**
     * @var string
     */
    private $clientId;

    /**
     * @var string
     */
    private $clientSecret;

    private $scope;

    /**
     * @param array credentials
     */
    public function __construct(array $credentials = [])
    {
        $this->clientId = isset($credentials[self::CLIENT_ID]) ? $credentials[self::CLIENT_ID] : null;
        $this->clientSecret = isset($credentials[self::CLIENT_SECRET]) ? $credentials[self::CLIENT_SECRET] : null;
        $this->scope = isset($credentials[self::SCOPE]) ? $credentials[self::SCOPE] : null;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     * @return Credentials
     */
    public function setClientId(string $clientId): Credentials
    {
        $this->clientId = $clientId;
        return $this;
    }

    /**
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     * @return Credentials
     */
    public function setClientSecret($clientSecret): Credentials
    {
        $this->clientSecret = $clientSecret;
        return $this;
    }

    public function toArray(): array
    {
        $options = [
            self::CLIENT_ID => $this->clientId,
            self::CLIENT_SECRET => $this->clientSecret
        ];
        if (!is_null($this->scope)) {
            $options[self::SCOPE] = $this->scope;
        }
        return $options;
    }
}
