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
 * @implements Builder<TypeChangeLocalizedEnumValueLabelAction>
 */
final class TypeChangeLocalizedEnumValueLabelActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $fieldName;

    /**

     * @var null|CustomFieldLocalizedEnumValue|CustomFieldLocalizedEnumValueBuilder
     */
    private $value;

    /**
     * <p><code>name</code> of the <a href="ctp:api:type:FieldDefinition">FieldDefinition</a> to update.</p>
     *

     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>New value to set.
     * Must not be empty.</p>
     *

     * @return null|CustomFieldLocalizedEnumValue
     */
    public function getValue()
    {
        return $this->value instanceof CustomFieldLocalizedEnumValueBuilder ? $this->value->build() : $this->value;
    }

    /**
     * @param ?string $fieldName
     * @return $this
     */
    public function withFieldName(?string $fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * @param ?CustomFieldLocalizedEnumValue $value
     * @return $this
     */
    public function withValue(?CustomFieldLocalizedEnumValue $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @deprecated use withValue() instead
     * @return $this
     */
    public function withValueBuilder(?CustomFieldLocalizedEnumValueBuilder $value)
    {
        $this->value = $value;

        return $this;
    }

    public function build(): TypeChangeLocalizedEnumValueLabelAction
    {
        return new TypeChangeLocalizedEnumValueLabelActionModel(
            $this->fieldName,
            $this->value instanceof CustomFieldLocalizedEnumValueBuilder ? $this->value->build() : $this->value
        );
    }

    public static function of(): TypeChangeLocalizedEnumValueLabelActionBuilder
    {
        return new self();
    }
}
