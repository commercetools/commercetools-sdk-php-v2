<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ChangePlainEnumValueOrderAction>
 */
final class ChangePlainEnumValueOrderActionBuilder implements Builder
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
     * @var ?EnumValueCollection
     */
    private $nextValue;

    /**
     * @var ?EnumValueCollection
     */
    private $previousValue;

    /**
     * <p>Update action for <code>changePlainEnumValueOrder</code> on product types</p>
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
     * @return null|EnumValueCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * @return null|EnumValueCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
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
     * @param ?EnumValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?EnumValueCollection $nextValue)
    {
        $this->nextValue = $nextValue;

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


    public function build(): ChangePlainEnumValueOrderAction
    {
        return new ChangePlainEnumValueOrderActionModel(
            $this->change,
            $this->attributeName,
            $this->nextValue,
            $this->previousValue
        );
    }

    public static function of(): ChangePlainEnumValueOrderActionBuilder
    {
        return new self();
    }
}
