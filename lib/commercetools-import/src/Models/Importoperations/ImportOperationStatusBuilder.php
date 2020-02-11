<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importoperations;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;

/**
 * @implements Builder<ImportOperationStatus>
 */
final class ImportOperationStatusBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $operationId;

    /**
     * @var ?string
     */
    private $state;

    /**
     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**
     * <p>Id of the import operation.</p>
     *
     * @return null|string
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * <p>Validation state of the import operation.</p>
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>Validation errors for the import operation.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @return $this
     */
    public function withOperationId(?string $operationId)
    {
        $this->operationId = $operationId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }


    public function build(): ImportOperationStatus
    {
        return new ImportOperationStatusModel(
            $this->operationId,
            $this->state,
            $this->errors
        );
    }

    public static function of(): ImportOperationStatusBuilder
    {
        return new self();
    }
}
