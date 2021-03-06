<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use DateTimeImmutable;

interface ApiClient extends JsonObject
{
    public const FIELD_ID = 'id';
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_CREATED_AT = 'createdAt';
    public const FIELD_LAST_USED_AT = 'lastUsedAt';
    public const FIELD_DELETE_AT = 'deleteAt';
    public const FIELD_SECRET = 'secret';

    /**
     * <p>The unique ID of the API client.
     * This is the OAuth2 <code>client_id</code> and can be used to obtain a token.</p>
     *
     * @return null|string
     */
    public function getId();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>A whitespace separated list of the OAuth scopes.
     * This is the OAuth2 <code>scope</code> and can be used to obtain a token.</p>
     *
     * @return null|string
     */
    public function getScope();

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt();

    /**
     * <p>The last day this API Client was used to obtain a token.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getLastUsedAt();

    /**
     * <p>If set, the client will be deleted on (or shortly after) this point in time.</p>
     *
     * @return null|DateTimeImmutable
     */
    public function getDeleteAt();

    /**
     * <p>The secret is only shown once in the response of creating the API Client.
     * This is the OAuth2 <code>client_secret</code> and can be used to obtain a token.</p>
     *
     * @return null|string
     */
    public function getSecret();

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void;

    /**
     * @param ?DateTimeImmutable $createdAt
     */
    public function setCreatedAt(?DateTimeImmutable $createdAt): void;

    /**
     * @param ?DateTimeImmutable $lastUsedAt
     */
    public function setLastUsedAt(?DateTimeImmutable $lastUsedAt): void;

    /**
     * @param ?DateTimeImmutable $deleteAt
     */
    public function setDeleteAt(?DateTimeImmutable $deleteAt): void;

    /**
     * @param ?string $secret
     */
    public function setSecret(?string $secret): void;
}
