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
use Commercetools\History\Models\ChangeValue\LocalizedEnumValue;
use Commercetools\History\Models\ChangeValue\LocalizedEnumValueBuilder;

/**
 * @implements Builder<RemoveLocalizedEnumValuesChange>
 */
final class RemoveLocalizedEnumValuesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|LocalizedEnumValue|LocalizedEnumValueBuilder
     */
    private $previousValue;

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
     * <p>Value before the change.</p>
     *

     * @return null|LocalizedEnumValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LocalizedEnumValueBuilder ? $this->previousValue->build() : $this->previousValue;
    }

    /**
     * <p>Name of the updated <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a>.</p>
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
     * @param ?LocalizedEnumValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?LocalizedEnumValue $previousValue)
    {
        $this->previousValue = $previousValue;

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
     * @deprecated use withPreviousValue() instead
     * @return $this
     */
    public function withPreviousValueBuilder(?LocalizedEnumValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveLocalizedEnumValuesChange
    {
        return new RemoveLocalizedEnumValuesChangeModel(
            $this->change,
            $this->previousValue instanceof LocalizedEnumValueBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->attributeName
        );
    }

    public static function of(): RemoveLocalizedEnumValuesChangeBuilder
    {
        return new self();
    }
}
