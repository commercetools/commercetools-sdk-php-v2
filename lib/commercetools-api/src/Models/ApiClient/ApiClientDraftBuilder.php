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
use stdClass;

/**
 * @implements Builder<ApiClientDraft>
 */
final class ApiClientDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $scope;

    /**
     * @var ?int
     */
    private $deleteDaysAfterCreation;

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
     * <p>If set, the client will be deleted after the specified amount of days.</p>
     *
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        return $this->deleteDaysAfterCreation;
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
     * @param ?int $deleteDaysAfterCreation
     * @return $this
     */
    public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;

        return $this;
    }


    public function build(): ApiClientDraft
    {
        return new ApiClientDraftModel(
            $this->name,
            $this->scope,
            $this->deleteDaysAfterCreation
        );
    }

    public static function of(): ApiClientDraftBuilder
    {
        return new self();
    }
}
