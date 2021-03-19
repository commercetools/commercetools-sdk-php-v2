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
     * @var ?string
     */
    private $attributeName;

    /**
     * @var null|EnumValue|EnumValueBuilder
     */
    private $previousValue;

    /**
     * <p>Update action for <code>removeEnumValues</code> on product types</p>
     *
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * <p>The name of the attribute updated.</p>
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|EnumValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof EnumValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

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
            $this->attributeName,
            $this->previousValue instanceof EnumValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveEnumValuesChangeBuilder
    {
        return new self();
    }
}
