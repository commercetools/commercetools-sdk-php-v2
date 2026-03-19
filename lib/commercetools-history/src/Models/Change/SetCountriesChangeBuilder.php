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
use Commercetools\History\Models\Common\StoreCountryCollection;

/**
 * @implements Builder<SetCountriesChange>
 */
final class SetCountriesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?StoreCountryCollection
     */
    private $previousValue;

    /**

     * @var ?StoreCountryCollection
     */
    private $nextValue;

    /**

     * @var ?StoreCountryCollection
     */
    private $addedItems;

    /**

     * @var ?StoreCountryCollection
     */
    private $removedItems;

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

     * @return null|StoreCountryCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|StoreCountryCollection
     */
    public function getRemovedItems()
    {
        return $this->removedItems;
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
     * @param ?StoreCountryCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?StoreCountryCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?StoreCountryCollection $nextValue
     * @return $this
     */
    public function withNextValue(?StoreCountryCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?StoreCountryCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?StoreCountryCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?StoreCountryCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?StoreCountryCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }


    public function build(): SetCountriesChange
    {
        return new SetCountriesChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->addedItems,
            $this->removedItems
        );
    }

    public static function of(): SetCountriesChangeBuilder
    {
        return new self();
    }
}
