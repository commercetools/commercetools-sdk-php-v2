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
 * @implements Builder<ChangeLabelChange>
 */
final class ChangeLabelChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?string
     */
    private $fieldName;

    /**

     * @var ?string
     */
    private $attributeName;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $nextValue;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changeLabel</code> on product types and types</p>
     *

     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>The name of the field definition to update (types).</p>
     *

     * @return null|string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * <p>The name of the attribute definition to update (product-type).</p>
     *

     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**

     * @return null|LocalizedString
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue;
    }

    /**

     * @return null|LocalizedString
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?LocalizedString $nextValue
     * @return $this
     */
    public function withNextValue(?LocalizedString $nextValue)
    {
        $this->nextValue = $nextValue;

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
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?LocalizedStringBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

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

    public function build(): ChangeLabelChange
    {
        return new ChangeLabelChangeModel(
            $this->change,
            $this->fieldName,
            $this->attributeName,
            $this->nextValue instanceof LocalizedStringBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->previousValue instanceof LocalizedStringBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): ChangeLabelChangeBuilder
    {
        return new self();
    }
}
