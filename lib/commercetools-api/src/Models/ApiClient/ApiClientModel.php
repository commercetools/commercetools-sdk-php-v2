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

use DateTimeImmutableModel;
use stdClass;

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
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastUsedAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $deleteAt;

    /**
     * @var ?string
     */
    protected $secret;


    public function __construct(
        string $id = null,
        string $name = null,
        string $scope = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastUsedAt = null,
        DateTimeImmutable $deleteAt = null,
        string $secret = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->scope = $scope;
        $this->createdAt = $createdAt;
        $this->lastUsedAt = $lastUsedAt;
        $this->deleteAt = $deleteAt;
        $this->secret = $secret;
    }

    /**
     * <p>The unique ID of the API client.
     * This is the OAuth2 <code>client_id</code> and can be used to obtain a token.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClient::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClient::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>A whitespace separated list of the OAuth scopes.
     * This is the OAuth2 <code>scope</code> and can be used to obtain a token.</p>
     *
     * @return null|string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClient::FIELD_SCOPE);
            if (is_null($data)) {
                return null;
            }
            $this->scope = (string) $data;
        }

        return $this->scope;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClient::FIELD_CREATED_AT);
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
     * <p>The last day this API Client was used to obtain a token.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastUsedAt()
    {
        if (is_null($this->lastUsedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClient::FIELD_LAST_USED_AT);
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
     * <p>If set, the client will be deleted on (or shortly after) this point in time.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getDeleteAt()
    {
        if (is_null($this->deleteAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClient::FIELD_DELETE_AT);
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
     * <p>The secret is only shown once in the response of creating the API Client.
     * This is the OAuth2 <code>client_secret</code> and can be used to obtain a token.</p>
     *
     * @return null|string
     */
    public function getSecret()
    {
        if (is_null($this->secret)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClient::FIELD_SECRET);
            if (is_null($data)) {
                return null;
            }
            $this->secret = (string) $data;
        }

        return $this->secret;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastUsedAt(?DateTimeImmutable $lastUsedAt): void
    {
        $this->lastUsedAt = $lastUsedAt;
    }

    public function setDeleteAt(?DateTimeImmutable $deleteAt): void
    {
        $this->deleteAt = $deleteAt;
    }

    public function setSecret(?string $secret): void
    {
        $this->secret = $secret;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[ApiClient::FIELD_CREATED_AT]) && $data[ApiClient::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[ApiClient::FIELD_CREATED_AT] = $data[ApiClient::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[ApiClient::FIELD_LAST_USED_AT]) && $data[ApiClient::FIELD_LAST_USED_AT] instanceof \DateTimeImmutable) {
            $data[ApiClient::FIELD_LAST_USED_AT] = $data[ApiClient::FIELD_LAST_USED_AT]->format('Y-m-d');
        }

        if (isset($data[ApiClient::FIELD_DELETE_AT]) && $data[ApiClient::FIELD_DELETE_AT] instanceof \DateTimeImmutable) {
            $data[ApiClient::FIELD_DELETE_AT] = $data[ApiClient::FIELD_DELETE_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}
