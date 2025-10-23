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
use Commercetools\History\Models\Common\ReferenceCollection;

/**
 * @implements Builder<SetSupplyChannelsChange>
 */
final class SetSupplyChannelsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?ReferenceCollection
     */
    private $previousValue;

    /**

     * @var ?ReferenceCollection
     */
    private $nextValue;

    /**

     * @var ?ReferenceCollection
     */
    private $addedItems;

    /**

     * @var ?ReferenceCollection
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

     * @return null|ReferenceCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|ReferenceCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|ReferenceCollection
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
     * @param ?ReferenceCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?ReferenceCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?ReferenceCollection $nextValue
     * @return $this
     */
    public function withNextValue(?ReferenceCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?ReferenceCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?ReferenceCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?ReferenceCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?ReferenceCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }


    public function build(): SetSupplyChannelsChange
    {
        return new SetSupplyChannelsChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->addedItems,
            $this->removedItems
        );
    }

    public static function of(): SetSupplyChannelsChangeBuilder
    {
        return new self();
    }
}
