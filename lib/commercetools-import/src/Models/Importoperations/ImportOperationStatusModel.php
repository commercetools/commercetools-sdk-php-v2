<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\JsonObjectModel;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

final class ImportOperationStatusModel extends JsonObjectModel implements ImportOperationStatus
{
    /**
     * @var ?string
     */
    protected $operationId;

    /**
     * @var ?string
     */
    protected $state;

    /**
     * @var ?ErrorObjectCollection
     */
    protected $errors;

    public function __construct(
        string $operationId = null,
        string $state = null,
        ErrorObjectCollection $errors = null
    ) {
        $this->operationId = $operationId;
        $this->state = $state;
        $this->errors = $errors;
    }

    /**
     * <p>Id of the import operation.</p>
     *
     * @return null|string
     */
    public function getOperationId()
    {
        if (is_null($this->operationId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperationStatus::FIELD_OPERATION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->operationId = (string) $data;
        }

        return $this->operationId;
    }

    /**
     * <p>Validation state of the import operation.</p>
     *
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ImportOperationStatus::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state = (string) $data;
        }

        return $this->state;
    }

    /**
     * <p>Validation errors for the import operation.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(ImportOperationStatus::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = ErrorObjectCollection::fromArray($data);
        }

        return $this->errors;
    }

    public function setOperationId(?string $operationId): void
    {
        $this->operationId = $operationId;
    }

    public function setState(?string $state): void
    {
        $this->state = $state;
    }

    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }
}
