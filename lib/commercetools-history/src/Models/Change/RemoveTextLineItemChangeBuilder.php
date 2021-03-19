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
use Commercetools\History\Models\Common\TextLineItem;
use Commercetools\History\Models\Common\TextLineItemBuilder;

/**
 * @implements Builder<RemoveTextLineItemChange>
 */
final class RemoveTextLineItemChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var null|TextLineItem|TextLineItemBuilder
     */
    private $previousValue;

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
    public function getPreviousValue()
    {
        return $this->previousValue instanceof TextLineItemBuilder ? $this->previousValue->build() : $this->previousValue;
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
     * @param ?TextLineItem $previousValue
     * @return $this
     */
    public function withPreviousValue(?TextLineItem $previousValue)
    {
        $this->previousValue = $previousValue;

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
    public function withPreviousValueBuilder(?TextLineItemBuilder $previousValue)
    {
        $this->previousValue = $previousValue;

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

    public function build(): RemoveTextLineItemChange
    {
        return new RemoveTextLineItemChangeModel(
            $this->change,
            $this->previousValue instanceof TextLineItemBuilder ? $this->previousValue->build() : $this->previousValue,
            $this->nextValue instanceof TextLineItemBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): RemoveTextLineItemChangeBuilder
    {
        return new self();
    }
}
