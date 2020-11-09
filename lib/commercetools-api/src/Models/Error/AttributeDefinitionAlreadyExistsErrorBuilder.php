<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<AttributeDefinitionAlreadyExistsError>
 */
final class AttributeDefinitionAlreadyExistsErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $conflictingProductTypeId;

    /**
     * @var ?string
     */
    private $conflictingProductTypeName;

    /**
     * @var ?string
     */
    private $conflictingAttributeName;

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return null|string
     */
    public function getConflictingProductTypeId()
    {
        return $this->conflictingProductTypeId;
    }

    /**
     * @return null|string
     */
    public function getConflictingProductTypeName()
    {
        return $this->conflictingProductTypeName;
    }

    /**
     * @return null|string
     */
    public function getConflictingAttributeName()
    {
        return $this->conflictingAttributeName;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param ?string $conflictingProductTypeId
     * @return $this
     */
    public function withConflictingProductTypeId(?string $conflictingProductTypeId)
    {
        $this->conflictingProductTypeId = $conflictingProductTypeId;

        return $this;
    }

    /**
     * @param ?string $conflictingProductTypeName
     * @return $this
     */
    public function withConflictingProductTypeName(?string $conflictingProductTypeName)
    {
        $this->conflictingProductTypeName = $conflictingProductTypeName;

        return $this;
    }

    /**
     * @param ?string $conflictingAttributeName
     * @return $this
     */
    public function withConflictingAttributeName(?string $conflictingAttributeName)
    {
        $this->conflictingAttributeName = $conflictingAttributeName;

        return $this;
    }


    public function build(): AttributeDefinitionAlreadyExistsError
    {
        return new AttributeDefinitionAlreadyExistsErrorModel(
            $this->message,
            $this->conflictingProductTypeId,
            $this->conflictingProductTypeName,
            $this->conflictingAttributeName
        );
    }

    public static function of(): AttributeDefinitionAlreadyExistsErrorBuilder
    {
        return new self();
    }
}
