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
 * @implements Builder<AddPlainEnumValueChange>
 */
final class AddPlainEnumValueChangeBuilder implements Builder
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
    private $nextValue;

    /**
     * <p>Update action for <code>addPlainEnumValue</code> on product types</p>
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
    public function getNextValue()
    {
        return $this->nextValue instanceof EnumValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?EnumValue $nextValue
     * @return $this
     */
    public function withNextValue(?EnumValue $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withNextValue() instead
     * @return $this
     */
    public function withNextValueBuilder(?EnumValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddPlainEnumValueChange
    {
        return new AddPlainEnumValueChangeModel(
            $this->change,
            $this->attributeName,
            $this->nextValue instanceof EnumValueBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddPlainEnumValueChangeBuilder
    {
        return new self();
    }
}
