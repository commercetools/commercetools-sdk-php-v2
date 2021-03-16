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
 * @implements Builder<ChangeTextLineItemsOrderChange>
 */
final class ChangeTextLineItemsOrderChangeBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $change;

    /**
     * @var ?TextLineItemValueCollection
     */
    private $previousValue;

    /**
     * @var ?TextLineItemValueCollection
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
     * @return null|TextLineItemValueCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * @return null|TextLineItemValueCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
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
     * @param ?TextLineItemValueCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?TextLineItemValueCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?TextLineItemValueCollection $nextValue
     * @return $this
     */
    public function withNextValue(?TextLineItemValueCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): ChangeTextLineItemsOrderChange
    {
        return new ChangeTextLineItemsOrderChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeTextLineItemsOrderChangeBuilder
    {
        return new self();
    }
}
