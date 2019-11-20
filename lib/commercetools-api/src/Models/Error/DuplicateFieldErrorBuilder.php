<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Api\Models\Common\ReferenceBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<DuplicateFieldError>
 */
final class DuplicateFieldErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var Reference|?ReferenceBuilder
     */
    private $conflictingResource;

    /**
     * @var ?JsonObject
     */
    private $duplicateValue;

    /**
     * @var ?string
     */
    private $field;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|Reference
     */
    public function getConflictingResource()
    {
        return $this->conflictingResource instanceof ReferenceBuilder ? $this->conflictingResource->build() : $this->conflictingResource;
    }

    /**
     * @return null|JsonObject
     */
    public function getDuplicateValue()
    {
        return $this->duplicateValue;
    }

    /**
     * @return null|string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withConflictingResource(?Reference $conflictingResource)
    {
        $this->conflictingResource = $conflictingResource;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDuplicateValue(?JsonObject $duplicateValue)
    {
        $this->duplicateValue = $duplicateValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withField(?string $field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * @return $this
     */
    public function withConflictingResourceBuilder(?ReferenceBuilder $conflictingResource)
    {
        $this->conflictingResource = $conflictingResource;

        return $this;
    }

    public function build(): DuplicateFieldError
    {
        return new DuplicateFieldErrorModel(
            $this->message,
            ($this->conflictingResource instanceof ReferenceBuilder ? $this->conflictingResource->build() : $this->conflictingResource),
            $this->duplicateValue,
            $this->field
        );
    }

    public static function of(): DuplicateFieldErrorBuilder
    {
        return new self();
    }
}
