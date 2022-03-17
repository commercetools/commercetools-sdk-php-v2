<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class ApiClientModel extends JsonObjectModel implements ApiClient
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $scope;

    /**
     * @var ?string
     */
    protected $secret;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastUsedAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $deleteAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?int
     */
    protected $accessTokenValiditySeconds;

    /**
     * @var ?int
     */
    protected $refreshTokenValiditySeconds;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $name = null,
        ?string $scope = null,
        ?string $secret = null,
        ?DateTimeImmutable $lastUsedAt = null,
        ?DateTimeImmutable $deleteAt = null,
        ?DateTimeImmutable $createdAt = null,
        ?int $accessTokenValiditySeconds = null,
        ?int $refreshTokenValiditySeconds = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->scope = $scope;
        $this->secret = $secret;
        $this->lastUsedAt = $lastUsedAt;
        $this->deleteAt = $deleteAt;
        $this->createdAt = $createdAt;
        $this->accessTokenValiditySeconds = $accessTokenValiditySeconds;
        $this->refreshTokenValiditySeconds = $refreshTokenValiditySeconds;
    }

    /**
     * <p>Unique ID of the API Client.
     * This is the OAuth2 <code>client_id</code> that can be used to <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtain an access token</a>.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>Name of the API Client.</p>
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>Whitespace-separated list of <a href="/../api/scopes">OAuth scopes</a> that can be used when <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtaining an access token</a>.</p>
     *
     * @return null|string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SCOPE);
            if (is_null($data)) {
                return null;
            }
            $this->scope = (string) $data;
        }

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
        if (is_null($this->secret)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SECRET);
            if (is_null($data)) {
                return null;
            }
            $this->secret = (string) $data;
        }

        return $this->secret;
    }

    /**
     * <p>Date of the last day this API Client was used to <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtain an access token</a>.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastUsedAt()
    {
        if (is_null($this->lastUsedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_LAST_USED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATE_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastUsedAt = $data;
        }

        return $this->lastUsedAt;
    }

    /**
     * <p>If set, the Client will be deleted on (or shortly after) this point in time.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getDeleteAt()
    {
        if (is_null($this->deleteAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DELETE_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->deleteAt = $data;
        }

        return $this->deleteAt;
    }

    /**
     * <p>Date and time (UTC) the API Client was initially created at.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * <p>Expiration time in seconds for each access token obtained by the API Client. Only present when set with the <a href="ctp:api:type:ApiClientDraft">APIClientDraft</a>. If not present the default value applies.</p>
     *
     * @return null|int
     */
    public function getAccessTokenValiditySeconds()
    {
        if (is_null($this->accessTokenValiditySeconds)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_ACCESS_TOKEN_VALIDITY_SECONDS);
            if (is_null($data)) {
                return null;
            }
            $this->accessTokenValiditySeconds = (int) $data;
        }

        return $this->accessTokenValiditySeconds;
    }

    /**
     * <p>Inactivity expiration time in seconds for each refresh token obtained by the API Client. Only present when set with the <a href="ctp:api:type:ApiClientDraft">APIClientDraft</a>. If not present the default value applies.</p>
     *
     * @return null|int
     */
    public function getRefreshTokenValiditySeconds()
    {
        if (is_null($this->refreshTokenValiditySeconds)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_REFRESH_TOKEN_VALIDITY_SECONDS);
            if (is_null($data)) {
                return null;
            }
            $this->refreshTokenValiditySeconds = (int) $data;
        }

        return $this->refreshTokenValiditySeconds;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @param ?string $secret
     */
    public function setSecret(?string $secret): void
    {
        $this->secret = $secret;
    }

    /**
     * @param ?DateTimeImmutable $lastUsedAt
     */
    public function setLastUsedAt(?DateTimeImmutable $lastUsedAt): void
    {
        $this->lastUsedAt = $lastUsedAt;
    }

    /**
     * @param ?DateTimeImmutable $deleteAt
     */
    public function setDeleteAt(?DateTimeImmutable $deleteAt): void
    {
        $this->deleteAt = $deleteAt;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param ?int $accessTokenValiditySeconds
     */
    public function setAccessTokenValiditySeconds(?int $accessTokenValiditySeconds): void
    {
        $this->accessTokenValiditySeconds = $accessTokenValiditySeconds;
    }

    /**
     * @param ?int $refreshTokenValiditySeconds
     */
    public function setRefreshTokenValiditySeconds(?int $refreshTokenValiditySeconds): void
    {
        $this->refreshTokenValiditySeconds = $refreshTokenValiditySeconds;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ApiClient::FIELD_LAST_USED_AT]) && $data[ApiClient::FIELD_LAST_USED_AT] instanceof \DateTimeImmutable) {
            $data[ApiClient::FIELD_LAST_USED_AT] = $data[ApiClient::FIELD_LAST_USED_AT]->format('Y-m-d');
        }

        if (isset($data[ApiClient::FIELD_DELETE_AT]) && $data[ApiClient::FIELD_DELETE_AT] instanceof \DateTimeImmutable) {
            $data[ApiClient::FIELD_DELETE_AT] = $data[ApiClient::FIELD_DELETE_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ApiClient::FIELD_CREATED_AT]) && $data[ApiClient::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ApiClient::FIELD_CREATED_AT] = $data[ApiClient::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
