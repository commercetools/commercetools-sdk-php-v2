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
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
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
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

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
