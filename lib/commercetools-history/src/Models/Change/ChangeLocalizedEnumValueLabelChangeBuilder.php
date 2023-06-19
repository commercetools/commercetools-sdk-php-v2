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
use Commercetools\History\Models\Common\LocalizedString;
use Commercetools\History\Models\Common\LocalizedStringBuilder;

/**
 * @implements Builder<ChangeLocalizedEnumValueLabelChange>
 */
final class ChangeLocalizedEnumValueLabelChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $previousValue;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
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

     * @var ?string
     */
    private $valueKey;

    /**

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|LocalizedString
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|LocalizedString
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * <p>Key of the updated values.</p>
     *

     * @return null|string
     */
    public function getValueKey()
    {
        return $this->valueKey;
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
     * @param ?LocalizedString $previousValue
     * @return $this
     */
    public function withPreviousValue(?LocalizedString $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?LocalizedString $nextValue
     * @return $this
     */
    public function withNextValue(?LocalizedString $nextValue)
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
     * @param ?string $valueKey
     * @return $this
     */
    public function withValueKey(?string $valueKey)
    {
        $this->valueKey = $valueKey;

        return $this;
    }

    /**
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?LocalizedStringBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?LocalizedStringBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): ChangeLocalizedEnumValueLabelChange
    {
        return new ChangeLocalizedEnumValueLabelChangeModel(
            $this->change,
            $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->fieldName,
            $this->attributeName,
            $this->valueKey
        );
    }

    public static function of(): ChangeLocalizedEnumValueLabelChangeBuilder
    {
        return new self();
    }
}
