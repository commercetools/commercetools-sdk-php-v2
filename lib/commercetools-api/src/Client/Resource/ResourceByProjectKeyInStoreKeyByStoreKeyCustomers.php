<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerDraft;
use Commercetools\Client\ApiResource;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\UploadedFileInterface;

/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomers extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/in-store/key={storeKey}/customers', $args, $client);
    }

    /**
     */
    public function withPasswordToken(string $passwordToken = null): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken
    {
        $args = $this->getArgs();
        if (!is_null($passwordToken)) {
            $args['passwordToken'] = $passwordToken;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordTokenByPasswordToken($args, $this->getClient());
    }
    /**
     */
    public function withEmailToken(string $emailToken = null): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailToken
    {
        $args = $this->getArgs();
        if (!is_null($emailToken)) {
            $args['emailToken'] = $emailToken;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailTokenByEmailToken($args, $this->getClient());
    }
    /**
     */
    public function emailToken(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailToken($args, $this->getClient());
    }
    /**
     */
    public function emailConfirm(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersEmailConfirm($args, $this->getClient());
    }
    /**
     */
    public function password(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPassword($args, $this->getClient());
    }
    /**
     */
    public function passwordReset(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordReset
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordReset($args, $this->getClient());
    }
    /**
     */
    public function passwordToken(): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersPasswordToken($args, $this->getClient());
    }
    /**
     */
    public function withKey(string $key = null): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(string $ID = null): ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyInStoreKeyByStoreKeyCustomersByID($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersGet($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CustomerDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerDraft $body = null, array $headers = []): ByProjectKeyInStoreKeyByStoreKeyCustomersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyInStoreKeyByStoreKeyCustomersPost($args['projectKey'], $args['storeKey'], $body, $headers, $this->getClient());
    }
}
