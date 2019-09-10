<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\JsonObjectModel;

final class ApiClientDraftModel extends JsonObjectModel implements ApiClientDraft
{
    /**
     * @var ?int
     */
    protected $deleteDaysAfterCreation;

    /**
     * @var ?string
     */
    protected $scope;

    /**
     * @var ?string
     */
    protected $name;

    public function __construct(
        int $deleteDaysAfterCreation = null,
        string $scope = null,
        string $name = null
    ) {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
        $this->scope = $scope;
        $this->name = $name;
    }

    /**
     * @return null|int
     */
    public function getDeleteDaysAfterCreation()
    {
        if (is_null($this->deleteDaysAfterCreation)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ApiClientDraft::FIELD_DELETE_DAYS_AFTER_CREATION);
            if (is_null($data)) {
                return null;
            }
            $this->deleteDaysAfterCreation = (int) $data;
        }

        return $this->deleteDaysAfterCreation;
    }

    /**
     * @return null|string
     */
    public function getScope()
    {
        if (is_null($this->scope)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClientDraft::FIELD_SCOPE);
            if (is_null($data)) {
                return null;
            }
            $this->scope = (string) $data;
        }

        return $this->scope;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ApiClientDraft::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    public function setDeleteDaysAfterCreation(?int $deleteDaysAfterCreation): void
    {
        $this->deleteDaysAfterCreation = $deleteDaysAfterCreation;
    }

    public function setScope(?string $scope): void
    {
        $this->scope = $scope;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
}
