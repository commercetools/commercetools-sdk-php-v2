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

     * @var ?string
     */
    private $attributeName;

    /**

     * @var null|LocalizedEnumValue|LocalizedEnumValueBuilder
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

     * @return null|LocalizedEnumValue
     */
    public function getPreviousValue()
    {
        return $this->previousValue instanceof LocalizedEnumValueBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?LocalizedEnumValue $previousValue
     * @return $this
     */
    public function withPreviousValue(?LocalizedEnumValue $previousValue)
    {
        $this->previousValue = $previousValue;

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
            $this->attributeName,
            $this->previousValue instanceof LocalizedEnumValueBuilder ? $this->previousValue->build() : $this->previousValue
        );
    }

    public static function of(): RemoveLocalizedEnumValuesChangeBuilder
    {
        return new self();
    }
}
