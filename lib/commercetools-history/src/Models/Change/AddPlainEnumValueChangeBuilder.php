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
use Commercetools\History\Models\Common\AttributePlainEnumValue;
use Commercetools\History\Models\Common\AttributePlainEnumValueBuilder;

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

     * @var null|AttributePlainEnumValue|AttributePlainEnumValueBuilder
     */
    private $nextValue;

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

     * @return null|AttributePlainEnumValue
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof AttributePlainEnumValueBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?AttributePlainEnumValue $nextValue
     * @return $this
     */
    public function withNextValue(?AttributePlainEnumValue $nextValue)
    {
        $this->nextValue = $nextValue;

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
    public function withNextValueBuilder(?AttributePlainEnumValueBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddPlainEnumValueChange
    {
        return new AddPlainEnumValueChangeModel(
            $this->change,
            $this->nextValue instanceof AttributePlainEnumValueBuilder ? $this->nextValue->build() : $this->nextValue,
            $this->attributeName
        );
    }

    public static function of(): AddPlainEnumValueChangeBuilder
    {
        return new self();
    }
}
