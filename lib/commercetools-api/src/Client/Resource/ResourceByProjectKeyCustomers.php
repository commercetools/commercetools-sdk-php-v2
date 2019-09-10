<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Client\Resource;

use Commercetools\Api\Models\Customer\CustomerDraft;
use Commercetools\Client\ApiResource;

/** @psalm-suppress PropertyNotSetInConstructor */
class ResourceByProjectKeyCustomers extends ApiResource
{
    /**
     * @psalm-param scalar $passwordToken
     *
     * @param null|mixed $passwordToken
     */
    public function withPasswordToken($passwordToken = null): ResourceByProjectKeyCustomersPasswordTokenByPasswordToken
    {
        $args = $this->getArgs();
        if (!is_null($passwordToken)) {
            $args['passwordToken'] = $passwordToken;
        }

        return new ResourceByProjectKeyCustomersPasswordTokenByPasswordToken($this->getUri().'/password-token={passwordToken}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $emailToken
     *
     * @param null|mixed $emailToken
     */
    public function withEmailToken($emailToken = null): ResourceByProjectKeyCustomersEmailTokenByEmailToken
    {
        $args = $this->getArgs();
        if (!is_null($emailToken)) {
            $args['emailToken'] = $emailToken;
        }

        return new ResourceByProjectKeyCustomersEmailTokenByEmailToken($this->getUri().'/email-token={emailToken}', $args, $this->getClient());
    }

    public function emailToken(): ResourceByProjectKeyCustomersEmailToken
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersEmailToken($this->getUri().'/email-token', $args, $this->getClient());
    }

    public function email(): ResourceByProjectKeyCustomersEmail
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersEmail($this->getUri().'/email', $args, $this->getClient());
    }

    public function password(): ResourceByProjectKeyCustomersPassword
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersPassword($this->getUri().'/password', $args, $this->getClient());
    }

    public function passwordToken(): ResourceByProjectKeyCustomersPasswordToken
    {
        $args = $this->getArgs();

        return new ResourceByProjectKeyCustomersPasswordToken($this->getUri().'/password-token', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withKey($ID = null): ResourceByProjectKeyCustomersKeyByKey
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCustomersKeyByKey($this->getUri().'/key={key}', $args, $this->getClient());
    }

    /**
     * @psalm-param scalar $ID
     *
     * @param null|mixed $ID
     */
    public function withId($ID = null): ResourceByProjectKeyCustomersByID
    {
        $args = $this->getArgs();
        if (!is_null($ID)) {
            $args['ID'] = $ID;
        }

        return new ResourceByProjectKeyCustomersByID($this->getUri().'/{ID}', $args, $this->getClient());
    }

    /**
     * @psalm-param ?object $body
     * @psalm-param array<string, scalar|scalar[]> $headers
     *
     * @param null|mixed $body
     */
    public function get($body = null, array $headers = []): ByProjectKeyCustomersGet
    {
        $args = $this->getArgs();

        return new ByProjectKeyCustomersGet($args['projectKey'], $body, $headers, $this->getClient());
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
