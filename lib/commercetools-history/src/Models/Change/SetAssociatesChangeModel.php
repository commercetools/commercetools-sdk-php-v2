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
use Commercetools\History\Models\Common\AssociateCollection;

/**
 * @internal
 */
final class SetAssociatesChangeModel extends JsonObjectModel implements SetAssociatesChange
{

    public const DISCRIMINATOR_VALUE = 'SetAssociatesChange';
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
     * @var ?AssociateCollection
     */
    protected $addedItems;

    /**
     *
     * @var ?AssociateCollection
     */
    protected $removedItems;

    /**
     *
     * @var ?AssociateCollection
     */
    protected $previousValue;

    /**
     *
     * @var ?AssociateCollection
     */
    protected $nextValue;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?AssociateCollection $addedItems = null,
        ?AssociateCollection $removedItems = null,
        ?AssociateCollection $previousValue = null,
        ?AssociateCollection $nextValue = null,
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
     * @return null|AssociateCollection
     */
    public function getAddedItems()
    {
        if (is_null($this->addedItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ADDED_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->addedItems = AssociateCollection::fromArray($data);
        }

        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *
     *
     * @return null|AssociateCollection
     */
    public function getRemovedItems()
    {
        if (is_null($this->removedItems)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_REMOVED_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->removedItems = AssociateCollection::fromArray($data);
        }

        return $this->removedItems;
    }

    /**
     * <p>Value before the change.</p>
     *
     *
     * @return null|AssociateCollection
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = AssociateCollection::fromArray($data);
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|AssociateCollection
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = AssociateCollection::fromArray($data);
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
     * @param ?AssociateCollection $addedItems
     */
    public function setAddedItems(?AssociateCollection $addedItems): void
    {
        $this->addedItems = $addedItems;
    }

    /**
     * @param ?AssociateCollection $removedItems
     */
    public function setRemovedItems(?AssociateCollection $removedItems): void
    {
        $this->removedItems = $removedItems;
    }

    /**
     * @param ?AssociateCollection $previousValue
     */
    public function setPreviousValue(?AssociateCollection $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?AssociateCollection $nextValue
     */
    public function setNextValue(?AssociateCollection $nextValue): void
    {
        $this->nextValue = $nextValue;
    }



}
