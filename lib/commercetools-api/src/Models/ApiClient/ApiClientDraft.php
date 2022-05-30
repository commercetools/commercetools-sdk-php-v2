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
    public const FIELD_ACCESS_TOKEN_VALIDITY_SECONDS = 'accessTokenValiditySeconds';
    public const FIELD_REFRESH_TOKEN_VALIDITY_SECONDS = 'refreshTokenValiditySeconds';

    /**
     * <p>Name of the APIClient.</p>
     *
     * @return null|string
     */
    public function getName();

    /**
     * <p>Whitespace-separated list of <a href="/../api/scopes">OAuth scopes</a> that can be used when <a href="/../api/authorization#requesting-an-access-token-using-the-composable-commerce-oauth-20-service">obtaining an access token</a>.</p>
     *
     * @return null|string
     */
    public function getScope();

    /**
     * <p>If set, the Client will be deleted after the specified amount of days.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterCreation();

    /**
     * <p>Expiration time in seconds for each access token obtained by the APIClient. If not set the default value applies.</p>
     *
     * @return null|int
     */
    public function getAccessTokenValiditySeconds();

    /**
     * <p>Inactivity expiration time in seconds for each refresh token obtained by the APIClient. The expiration time for refresh tokens is restarted each time the token is used. If not set the default value applies.</p>
     *
     * @return null|int
     */
    public function getRefreshTokenValiditySeconds();

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

    /**
     * @param ?int $accessTokenValiditySeconds
     */
    public function setAccessTokenValiditySeconds(?int $accessTokenValiditySeconds): void;

    /**
     * @param ?int $refreshTokenValiditySeconds
     */
    public function setRefreshTokenValiditySeconds(?int $refreshTokenValiditySeconds): void;
}
