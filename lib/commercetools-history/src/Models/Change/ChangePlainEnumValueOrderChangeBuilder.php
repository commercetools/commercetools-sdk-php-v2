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
use Commercetools\History\Models\ChangeValue\EnumValueCollection;

/**
 * @implements Builder<ChangePlainEnumValueOrderChange>
 */
final class ChangePlainEnumValueOrderChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?EnumValueCollection
     */
    private $previousValue;

    /**

     * @var ?EnumValueCollection
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
     * <p>Value before the change.</p>
     *

     * @return null|EnumValueCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|EnumValueCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?EnumValueCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?EnumValueCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?EnumValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?EnumValueCollection $nextValue)
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


    public function build(): ChangePlainEnumValueOrderChange
    {
        return new ChangePlainEnumValueOrderChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->attributeName
        );
    }

    public static function of(): ChangePlainEnumValueOrderChangeBuilder
    {
        return new self();
    }
}
