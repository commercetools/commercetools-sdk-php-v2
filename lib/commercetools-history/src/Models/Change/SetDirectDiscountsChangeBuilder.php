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
use Commercetools\History\Models\Common\DirectDiscountCollection;

/**
 * @implements Builder<SetDirectDiscountsChange>
 */
final class SetDirectDiscountsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?DirectDiscountCollection
     */
    private $addedItems;

    /**

     * @var ?DirectDiscountCollection
     */
    private $removedItems;

    /**

     * @var ?DirectDiscountCollection
     */
    private $previousValue;

    /**

     * @var ?DirectDiscountCollection
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
     * <p>Elements added to the array.</p>
     *

     * @return null|DirectDiscountCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|DirectDiscountCollection
     */
    public function getRemovedItems()
    {
        return $this->removedItems;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|DirectDiscountCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|DirectDiscountCollection
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
     * @param ?DirectDiscountCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?DirectDiscountCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?DirectDiscountCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?DirectDiscountCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }

    /**
     * @param ?DirectDiscountCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?DirectDiscountCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?DirectDiscountCollection $nextValue
     * @return $this
     */
    public function withNextValue(?DirectDiscountCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetDirectDiscountsChange
    {
        return new SetDirectDiscountsChangeModel(
            $this->change,
            $this->addedItems,
            $this->removedItems,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetDirectDiscountsChangeBuilder
    {
        return new self();
    }
}
