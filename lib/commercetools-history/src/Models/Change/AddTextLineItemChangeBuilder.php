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
 * @implements Builder<AddTextLineItemChange>
 */
final class AddTextLineItemChangeBuilder implements Builder
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

    public function build(): AddTextLineItemChange
    {
        return new AddTextLineItemChangeModel(
            $this->change,
            $this->nextValue instanceof TextLineItemBuilder ? $this->nextValue->build() : $this->nextValue
        );
    }

    public static function of(): AddTextLineItemChangeBuilder
    {
        return new self();
    }
}
