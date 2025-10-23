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
use Commercetools\History\Models\Common\InheritedAssociateCollection;

/**
 * @implements Builder<SetInheritedAssociatesChange>
 */
final class SetInheritedAssociatesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?InheritedAssociateCollection
     */
    private $addedItems;

    /**

     * @var ?InheritedAssociateCollection
     */
    private $removedItems;

    /**

     * @var ?InheritedAssociateCollection
     */
    private $previousValue;

    /**

     * @var ?InheritedAssociateCollection
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

     * @return null|InheritedAssociateCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|InheritedAssociateCollection
     */
    public function getRemovedItems()
    {
        return $this->removedItems;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|InheritedAssociateCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|InheritedAssociateCollection
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
     * @param ?InheritedAssociateCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?InheritedAssociateCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?InheritedAssociateCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?InheritedAssociateCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }

    /**
     * @param ?InheritedAssociateCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?InheritedAssociateCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?InheritedAssociateCollection $nextValue
     * @return $this
     */
    public function withNextValue(?InheritedAssociateCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetInheritedAssociatesChange
    {
        return new SetInheritedAssociatesChangeModel(
            $this->change,
            $this->addedItems,
            $this->removedItems,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetInheritedAssociatesChangeBuilder
    {
        return new self();
    }
}
