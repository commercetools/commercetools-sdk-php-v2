<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomFieldSetType>
 */
final class CustomFieldSetTypeBuilder implements Builder
{
    /**
     * @var null|FieldType|FieldTypeBuilder
     */
    private $elementType;

    /**
     * <p>Field type of the elements in the set.</p>
     *
     * @return null|FieldType
     */
    public function getElementType()
    {
        return $this->elementType instanceof FieldTypeBuilder ? $this->elementType->build() : $this->elementType;
    }

    /**
     * @param ?FieldType $elementType
     * @return $this
     */
    public function withElementType(?FieldType $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    /**
     * @deprecated use withElementType() instead
     * @return $this
     */
    public function withElementTypeBuilder(?FieldTypeBuilder $elementType)
    {
        $this->elementType = $elementType;

        return $this;
    }

    public function build(): CustomFieldSetType
    {
        return new CustomFieldSetTypeModel(
            $this->elementType instanceof FieldTypeBuilder ? $this->elementType->build() : $this->elementType
        );
    }

    public static function of(): CustomFieldSetTypeBuilder
    {
        return new self();
    }
}
