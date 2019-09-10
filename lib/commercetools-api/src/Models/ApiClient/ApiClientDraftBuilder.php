<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ApiClientDraft>
 */
final class ApiClientDraftBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $deleteDaysAfterCreation;

    /**
     * @var ?string
     */
    private $scope;

    /**
     * @var ?string
     */
    private $name;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        return $this->deleteDaysAfterCreation;
    }

    /**
     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withDeleteDaysAfterCreation(?int $deleteDaysAfterCreation)
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;

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
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): ApiClientDraft
    {
        return new ApiClientDraftModel(
            $this->deleteDaysAfterCreation,
            $this->scope,
            $this->name
        );
    }

    public static function of(): ApiClientDraftBuilder
    {
        return new self();
    }
}
