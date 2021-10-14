<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApiClientDraft extends JsonObject
{
    public const FIELD_NAME = 'name';
    public const FIELD_SCOPE = 'scope';
    public const FIELD_DELETE_DAYS_AFTER_CREATION = 'deleteDaysAfterCreation';

    /**
     * <p>Name of the API Client.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>Whitespace-separated list of <a href="/../api/scopes">OAuth scopes</a> that can be used when <a href="/../api/authorization#requesting-an-access-token-using-commercetools-oauth-20-server">obtaining an access token</a>.</p>
     *
     * @return null|string
     */
    public function getScope();

    /**
     * <p>If set, the client will be deleted after the specified amount of days.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterCreation();

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param ?string $scope
     */
    public function setScope(?string $scope): void;

    /**
     * @param ?int $deleteDaysAfterCreation
     */
    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void;
}
