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
use stdClass;

/**
 * @internal
 */
final class ApiClientDraftModel extends JsonObjectModel implements ApiClientDraft
{
    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?string
     */
    protected $scope;

    /**
     *
     * @var ?int
     */
    protected $deleteDaysAfterCreation;

    /**
     *
     * @var ?int
     */
    protected $accessTokenValiditySeconds;

    /**
     *
     * @var ?int
     */
    protected $refreshTokenValiditySeconds;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $scope = null,
        ?int $deleteDaysAfterCreation = null,
        ?int $accessTokenValiditySeconds = null,
        ?int $refreshTokenValiditySeconds = null
    ) {
        $this->name = $name;
        $this->scope = $scope;
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
        $this->accessTokenValiditySeconds = $accessTokenValiditySeconds;
        $this->refreshTokenValiditySeconds = $refreshTokenValiditySeconds;
    }

    /**
     * <p>Name of the APIClient.</p>
     *
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
     * <p>Whitespace-separated list of <a href="/../api/scopes">OAuth scopes</a> that can be used when <a href="/../api/authorization#requesting-an-access-token-using-the-composable-commerce-oauth-20-service">obtaining an access token</a>.</p>
     *
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
     * <p>If set, the Client will be deleted after the specified amount of days.</p>
     *
     *
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        if (is_null($this->deleteDaysAfterCreation)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_DELETE_DAYS_AFTER_CREATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterCreation = (int) $data;
        }

        return $this->deleteDaysAfterCreation;
    }

    /**
     * <p>Expiration time in seconds for each access token obtained by the APIClient. If not set the default value applies.</p>
     *
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
     * <p>Inactivity expiration time in seconds for each refresh token obtained by the APIClient. The expiration time for refresh tokens is restarted each time the token is used. If not set the default value applies.</p>
     *
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
     * @param ?int $deleteDaysAfterCreation
     */
    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
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
}
