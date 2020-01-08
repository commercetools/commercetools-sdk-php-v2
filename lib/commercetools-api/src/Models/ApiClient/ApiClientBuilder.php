<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<ApiClient>
 */
final class ApiClientBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $scope;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastUsedAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $deleteAt;

    /**
     * @var ?string
     */
    private $secret;

    /**
     * <p>The unique ID of the API client.
     * This is the OAuth2 <code>client_id</code> and can be used to obtain a token.</p>.
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>A whitespace separated list of the OAuth scopes.
     * This is the OAuth2 <code>scope</code> and can be used to obtain a token.</p>.
     *
     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>The last day this API Client was used to obtain a token.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getLastUsedAt()
    {
        return $this->lastUsedAt;
    }

    /**
     * <p>If set, the client will be deleted on (or shortly after) this point in time.</p>.
     *
     * @return null|DateTimeImmutable
     */
    public function getDeleteAt()
    {
        return $this->deleteAt;
    }

    /**
     * <p>The secret is only shown once in the response of creating the API Client.
     * This is the OAuth2 <code>client_secret</code> and can be used to obtain a token.</p>.
     *
     * @return null|string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withScope(?string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastUsedAt(?DateTimeImmutable $lastUsedAt)
    {
        $this->lastUsedAt = $lastUsedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeleteAt(?DateTimeImmutable $deleteAt)
    {
        $this->deleteAt = $deleteAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSecret(?string $secret)
    {
        $this->secret = $secret;

        return $this;
    }

    public function build(): ApiClient
    {
        return new ApiClientModel(
            $this->id,
            $this->name,
            $this->scope,
            $this->createdAt,
            $this->lastUsedAt,
            $this->deleteAt,
            $this->secret
        );
    }

    public static function of(): ApiClientBuilder
    {
        return new self();
    }
}
