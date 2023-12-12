<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\AttributeLocalizedEnumValue;
use Commercetools\History\Models\Common\AttributeLocalizedEnumValueBuilder;

/**
 * @implements Builder<AddLocalizedEnumValueChange>
 */
final class AddLocalizedEnumValueChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|AttributeLocalizedEnumValue|AttributeLocalizedEnumValueBuilder
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $fieldName;

    /**

     * @var ?string
     */
    private $attributeName;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|AttributeLocalizedEnumValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AttributeLocalizedEnumValueBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:FieldDefinition">FieldDefinition</a>; only present on changes to Types.</p>
     *

     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>; only present on changes to Product Types.</p>
     *

     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @param ?string $change
     * @return $this
     */
    public function withChange(?string $change)
    {
        $this->change = $change;

        return $this;
    }

    /**
     * @param ?AttributeLocalizedEnumValue $nextValue
     * @return $this
     */
    public function withNextValue(?AttributeLocalizedEnumValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
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
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?AttributeLocalizedEnumValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddLocalizedEnumValueChange
    {
        return new AddLocalizedEnumValueChangeModel(
            $this->change,
            $this->nextValue instanceof AttributeLocalizedEnumValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->fieldName,
            $this->attributeName
        );
    }

    public static function of(): AddLocalizedEnumValueChangeBuilder
    {
        return new self();
    }
}
