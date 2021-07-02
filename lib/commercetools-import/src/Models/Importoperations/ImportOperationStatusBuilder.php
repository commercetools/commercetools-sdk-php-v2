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
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

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
     * <p>The ID of the <a href="#importoperation">ImportOperation</a>.</p>
     *
     * @return null|string
     */
    public function getOperationId()
    {
        return $this->operationId;
    }

    /**
     * <p>The validation state of the <a href="#importoperation">ImportOperation</a>.</p>
     *
     * @return null|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * <p>The validation errors for the <a href="#importoperation">ImportOperation</a>.
     * See <a href="/error">Errors</a>.</p>
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ?string $operationId
     * @return $this
     */
    public function withOperationId(?string $operationId)
    {
        $this->operationId = $operationId;

        return $this;
    }

    /**
     * @param ?string $state
     * @return $this
     */
    public function withState(?string $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?ErrorObjectCollection $errors
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
