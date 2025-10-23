<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;
use Commercetools\History\Models\Common\CustomerGroupAssignmentCollection;

/**
 * @internal
 */
final class SetCustomerGroupAssignmentsChangeModel extends JsonObjectModel implements SetCustomerGroupAssignmentsChange
{

    public const DISCRIMINATOR_VALUE = 'SetCustomerGroupAssignmentsChange';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $change;

    /**
     *
     * @var ?CustomerGroupAssignmentCollection
     */
    protected $addedItems;

    /**
     *
     * @var ?CustomerGroupAssignmentCollection
     */
    protected $removedItems;

    /**
     *
     * @var ?CustomerGroupAssignmentCollection
     */
    protected $previousValue;

    /**
     *
     * @var ?CustomerGroupAssignmentCollection
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?CustomerGroupAssignmentCollection $addedItems = null,
        ?CustomerGroupAssignmentCollection $removedItems = null,
        ?CustomerGroupAssignmentCollection $previousValue = null,
        ?CustomerGroupAssignmentCollection $nextValue = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->addedItems = $addedItems;
        $this->removedItems = $removedItems;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     *
     * @return null|string
     */
    public function getChange()
    {
        if (is_null($this->change)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CHANGE);
            if (is_null($data)) {
                return null;
            }
            $this->change = (string) $data;
        }

        return $this->change;
    }

    /**
     * <p>Elements added to the array.</p>
     *
     *
     * @return null|CustomerGroupAssignmentCollection
     */
    public function getAddedItems()
    {
        if (is_null($this->addedItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDED_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->addedItems = CustomerGroupAssignmentCollection::fromArray($data);
        }

        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *
     *
     * @return null|CustomerGroupAssignmentCollection
     */
    public function getRemovedItems()
    {
        if (is_null($this->removedItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REMOVED_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->removedItems = CustomerGroupAssignmentCollection::fromArray($data);
        }

        return $this->removedItems;
    }

    /**
     * <p>Value before the change.</p>
     *
     *
     * @return null|CustomerGroupAssignmentCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = CustomerGroupAssignmentCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|CustomerGroupAssignmentCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = CustomerGroupAssignmentCollection::fromArray($data);
        }

        return $this->nextValue;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $addedItems
     */
    public function setAddedItems(?CustomerGroupAssignmentCollection $addedItems): void
    {
        $this->addedItems = $addedItems;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $removedItems
     */
    public function setRemovedItems(?CustomerGroupAssignmentCollection $removedItems): void
    {
        $this->removedItems = $removedItems;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $previousValue
     */
    public function setPreviousValue(?CustomerGroupAssignmentCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?CustomerGroupAssignmentCollection $nextValue
     */
    public function setNextValue(?CustomerGroupAssignmentCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
