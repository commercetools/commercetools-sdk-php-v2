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
class ResourceByProjectKeyCustomers extends ApiResource
{
    /**
     * @psalm-param array<string, string> $args
     */
    public function __construct(array $args = [], ?ClientInterface $client = null)
    {
        parent::__construct('/{projectKey}/customers', $args, $client);
    }

    /**
     */
    public function withPasswordToken(?string $passwordToken = null): ResourceByProjectKeyCustomersPasswordTokenByPasswordToken
    {
        $args = $this->getArgs();
        if (!is_null($passwordToken)) {
            $args['passwordToken'] = $passwordToken;
        }

        return new ResourceByProjectKeyCustomersPasswordTokenByPasswordToken($args, $this->getClient());
    }
    /**
     */
    public function withEmailToken(?string $emailToken = null): ResourceByProjectKeyCustomersEmailTokenByEmailToken
    {
        $args = $this->getArgs();
        if (!is_null($emailToken)) {
            $args['emailToken'] = $emailToken;
        }

        return new ResourceByProjectKeyCustomersEmailTokenByEmailToken($args, $this->getClient());
    }
    /**
     */
    public function emailToken(): ResourceByProjectKeyCustomersEmailToken
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersEmailToken($args, $this->getClient());
    }
    /**
     */
    public function emailConfirm(): ResourceByProjectKeyCustomersEmailConfirm
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersEmailConfirm($args, $this->getClient());
    }
    /**
     */
    public function password(): ResourceByProjectKeyCustomersPassword
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersPassword($args, $this->getClient());
    }
    /**
     */
    public function passwordReset(): ResourceByProjectKeyCustomersPasswordReset
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersPasswordReset($args, $this->getClient());
    }
    /**
     */
    public function passwordToken(): ResourceByProjectKeyCustomersPasswordToken
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersPasswordToken($args, $this->getClient());
    }
    /**
     */
    public function withKey(?string $key = null): ResourceByProjectKeyCustomersKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($key)) {
            $args['key'] = $key;
        }

        return new ResourceByProjectKeyCustomersKeyByKey($args, $this->getClient());
    }
    /**
     */
    public function withId(?string $ID = null): ResourceByProjectKeyCustomersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCustomersByID($args, $this->getClient());
    }
    /**
     */
    public function search(): ResourceByProjectKeyCustomersSearch
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersSearch($args, $this->getClient());
    }
    /**
     */
    public function searchIndexingStatus(): ResourceByProjectKeyCustomersSearchIndexingStatus
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersSearchIndexingStatus($args, $this->getClient());
    }

    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function get($body = null, array $headers = []): ByProjectKeyCustomersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersGet($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?object|array|string $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function head($body = null, array $headers = []): ByProjectKeyCustomersHead
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersHead($args['projectKey'], $body, $headers, $this->getClient());
    }
    /**
     * @psalm-param ?CustomerDraft $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     */
    public function post(?CustomerDraft $body = null, array $headers = []): ByProjectKeyCustomersPost
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersPost($args['projectKey'], $body, $headers, $this->getClient());
    }
}
