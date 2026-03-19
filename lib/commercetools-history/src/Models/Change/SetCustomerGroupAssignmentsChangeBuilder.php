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
use Commercetools\History\Models\Common\CustomerGroupAssignmentCollection;

/**
 * @implements Builder<SetCustomerGroupAssignmentsChange>
 */
final class SetCustomerGroupAssignmentsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?CustomerGroupAssignmentCollection
     */
    private $addedItems;

    /**

     * @var ?CustomerGroupAssignmentCollection
     */
    private $removedItems;

    /**

     * @var ?CustomerGroupAssignmentCollection
     */
    private $previousValue;

    /**

     * @var ?CustomerGroupAssignmentCollection
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

     * @return null|CustomerGroupAssignmentCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|CustomerGroupAssignmentCollection
     */
    public function getRemovedItems()
    {
        return $this->removedItems;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|CustomerGroupAssignmentCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|CustomerGroupAssignmentCollection
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
     * @param ?CustomerGroupAssignmentCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?CustomerGroupAssignmentCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?CustomerGroupAssignmentCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?CustomerGroupAssignmentCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $nextValue
     * @return $this
     */
    public function withNextValue(?CustomerGroupAssignmentCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetCustomerGroupAssignmentsChange
    {
        return new SetCustomerGroupAssignmentsChangeModel(
            $this->change,
            $this->addedItems,
            $this->removedItems,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetCustomerGroupAssignmentsChangeBuilder
    {
        return new self();
    }
}
