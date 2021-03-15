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
 * @implements Builder<AddTextLineItemAction>
 */
final class AddTextLineItemActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|TextLineItem|TextLineItemBuilder
     */
    private $nextValue;

    /**
     * @return null|string
     */
    public function getChange()
    {
        return $this->change;
    }

    /**
     * @return null|TextLineItem
     */
    public function getNextValue()
    {
        return $this->nextValue instanceof TextLineItemBuilder ? $this->nextValue->build() : $this->nextValue;
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
     * @param ?TextLineItem $nextValue
     * @return $this
     */
    public function withNextValue(?TextLineItem $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNextValueBuilder(?TextLineItemBuilder $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    public function build(): AddTextLineItemAction
    {
        return new AddTextLineItemActionModel(
            $this->change,
            $this->nextValue instanceof TextLineItemBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddTextLineItemActionBuilder
    {
        return new self();
    }
}
