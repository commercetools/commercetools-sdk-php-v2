<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

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
     * @var ?string
     */
    private $secret;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastUsedAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $deleteAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?int
     */
    private $accessTokenValiditySeconds;

    /**
     * @var ?int
     */
    private $refreshTokenValiditySeconds;

    /**
     * <p>Unique ID of the API Client.
     * This is the OAuth2 <code>client_id</code> that can be used to <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtain an access token</a>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Name of the API Client.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Whitespace-separated list of <a href="/../api/scopes">OAuth scopes</a> that can be used when <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtaining an access token</a>.</p>
     *
     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * <p>Only shown once in the response of creating the API Client.
     * This is the OAuth2 <code>client_secret</code> that can be used to <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtain an access token</a>.</p>
     *
     * @return null|string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * <p>Date of the last day this API Client was used to <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtain an access token</a>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastUsedAt()
    {
        return $this->lastUsedAt;
    }

    /**
     * <p>If set, the Client will be deleted on (or shortly after) this point in time.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getDeleteAt()
    {
        return $this->deleteAt;
    }

    /**
     * <p>Date and time (UTC) the API Client was initially created at.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p>Expiration time in seconds for each access token obtained by the API Client. Only present when set with the <a href="ctp:api:type:ApiClientDraft">APIClientDraft</a>. If not present the default value applies.</p>
     *
     * @return null|int
     */
    public function getAccessTokenValiditySeconds()
    {
        return $this->accessTokenValiditySeconds;
    }

    /**
     * <p>Inactivity expiration time in seconds for each refresh token obtained by the API Client. Only present when set with the <a href="ctp:api:type:ApiClientDraft">APIClientDraft</a>. If not present the default value applies.</p>
     *
     * @return null|int
     */
    public function getRefreshTokenValiditySeconds()
    {
        return $this->refreshTokenValiditySeconds;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?string $scope
     * @return $this
     */
    public function withScope(?string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @param ?string $secret
     * @return $this
     */
    public function withSecret(?string $secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastUsedAt
     * @return $this
     */
    public function withLastUsedAt(?DateTimeImmutable $lastUsedAt)
    {
        $this->lastUsedAt = $lastUsedAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $deleteAt
     * @return $this
     */
    public function withDeleteAt(?DateTimeImmutable $deleteAt)
    {
        $this->deleteAt = $deleteAt;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?int $accessTokenValiditySeconds
     * @return $this
     */
    public function withAccessTokenValiditySeconds(?int $accessTokenValiditySeconds)
    {
        $this->accessTokenValiditySeconds = $accessTokenValiditySeconds;

        return $this;
    }

    /**
     * @param ?int $refreshTokenValiditySeconds
     * @return $this
     */
    public function withRefreshTokenValiditySeconds(?int $refreshTokenValiditySeconds)
    {
        $this->refreshTokenValiditySeconds = $refreshTokenValiditySeconds;

        return $this;
    }


    public function build(): ApiClient
    {
        return new ApiClientModel(
            $this->id,
            $this->name,
            $this->scope,
            $this->secret,
            $this->lastUsedAt,
            $this->deleteAt,
            $this->createdAt,
            $this->accessTokenValiditySeconds,
            $this->refreshTokenValiditySeconds
        );
    }

    public static function of(): ApiClientBuilder
    {
        return new self();
    }
}
