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
use Commercetools\History\Models\Common\AssociateCollection;

/**
 * @implements Builder<SetAssociatesChange>
 */
final class SetAssociatesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?AssociateCollection
     */
    private $addedItems;

    /**

     * @var ?AssociateCollection
     */
    private $removedItems;

    /**

     * @var ?AssociateCollection
     */
    private $previousValue;

    /**

     * @var ?AssociateCollection
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

     * @return null|AssociateCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|AssociateCollection
     */
    public function getRemovedItems()
    {
        return $this->removedItems;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|AssociateCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|AssociateCollection
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
     * @param ?AssociateCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?AssociateCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?AssociateCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?AssociateCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }

    /**
     * @param ?AssociateCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?AssociateCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?AssociateCollection $nextValue
     * @return $this
     */
    public function withNextValue(?AssociateCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetAssociatesChange
    {
        return new SetAssociatesChangeModel(
            $this->change,
            $this->addedItems,
            $this->removedItems,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetAssociatesChangeBuilder
    {
        return new self();
    }
}
