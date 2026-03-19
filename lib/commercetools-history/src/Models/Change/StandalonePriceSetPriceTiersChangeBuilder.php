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
use Commercetools\History\Models\Common\PriceTierCollection;

/**
 * @implements Builder<StandalonePriceSetPriceTiersChange>
 */
final class StandalonePriceSetPriceTiersChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?PriceTierCollection
     */
    private $addedItems;

    /**

     * @var ?PriceTierCollection
     */
    private $removedItems;

    /**

     * @var ?PriceTierCollection
     */
    private $previousValue;

    /**

     * @var ?PriceTierCollection
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

     * @return null|PriceTierCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getRemovedItems()
    {
        return $this->removedItems;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|PriceTierCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|PriceTierCollection
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
     * @param ?PriceTierCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?PriceTierCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?PriceTierCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?PriceTierCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }

    /**
     * @param ?PriceTierCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?PriceTierCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?PriceTierCollection $nextValue
     * @return $this
     */
    public function withNextValue(?PriceTierCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): StandalonePriceSetPriceTiersChange
    {
        return new StandalonePriceSetPriceTiersChangeModel(
            $this->change,
            $this->addedItems,
            $this->removedItems,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): StandalonePriceSetPriceTiersChangeBuilder
    {
        return new self();
    }
}
