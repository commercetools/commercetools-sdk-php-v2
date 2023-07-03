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
use Commercetools\History\Models\ChangeValue\EnumValue;
use Commercetools\History\Models\ChangeValue\EnumValueBuilder;

/**
 * @implements Builder<RemoveEnumValuesChange>
 */
final class RemoveEnumValuesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|EnumValue|EnumValueBuilder
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

     * @return null|EnumValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof EnumValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?EnumValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?EnumValue $previousValue)
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
    public function withPreviousValueBuilder(?EnumValueBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    public function build(): RemoveEnumValuesChange
    {
        return new RemoveEnumValuesChangeModel(
            $this->change,
            $this->previousValue instanceof EnumValueBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->attributeName
        );
    }

    public static function of(): RemoveEnumValuesChangeBuilder
    {
        return new self();
    }
}
