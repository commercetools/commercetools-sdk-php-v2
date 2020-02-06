<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;

interface ImportOperationStatus extends JsonObject
{
    const FIELD_OPERATION_ID = 'operationId';
    const FIELD_STATE = 'state';
    const FIELD_ERRORS = 'errors';

    /**
     * <p>Id of the import operation.</p>
     *
     * @return null|string
     */
    public function getOperationId();

    /**
     * <p>Validation state of the import operation.</p>
     *
     * @return null|string
     */
    public function getState();

    /**
     * <p>Validation errors for the import operation.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    public function setOperationId(?string $operationId): void;

    public function setState(?string $state): void;

    public function setErrors(?ErrorObjectCollection $errors): void;
}
