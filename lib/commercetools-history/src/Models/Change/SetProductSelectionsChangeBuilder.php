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
use Commercetools\History\Models\Common\ProductSelectionSettingCollection;

/**
 * @implements Builder<SetProductSelectionsChange>
 */
final class SetProductSelectionsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $previousValue;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $nextValue;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $addedItems;

    /**

     * @var ?ProductSelectionSettingCollection
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

     * @return null|ProductSelectionSettingCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|ProductSelectionSettingCollection
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
     * @param ?ProductSelectionSettingCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?ProductSelectionSettingCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ProductSelectionSettingCollection $nextValue
     * @return $this
     */
    public function withNextValue(?ProductSelectionSettingCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ProductSelectionSettingCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?ProductSelectionSettingCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?ProductSelectionSettingCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?ProductSelectionSettingCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }


    public function build(): SetProductSelectionsChange
    {
        return new SetProductSelectionsChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->addedItems,
            $this->removedItems
        );
    }

    public static function of(): SetProductSelectionsChangeBuilder
    {
        return new self();
    }
}
