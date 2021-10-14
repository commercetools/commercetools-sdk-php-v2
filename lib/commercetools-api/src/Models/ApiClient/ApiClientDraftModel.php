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
     * @var ?string
     */
    protected $name;

    /**
     * @var ?string
     */
    protected $scope;

    /**
     * @var ?int
     */
    protected $deleteDaysAfterCreation;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $name = null,
        ?string $scope = null,
        ?int $deleteDaysAfterCreation = null
    ) {
        $this->name = $name;
        $this->scope = $scope;
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
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
     * <p>If set, the client will be deleted after the specified amount of days.</p>
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
}
