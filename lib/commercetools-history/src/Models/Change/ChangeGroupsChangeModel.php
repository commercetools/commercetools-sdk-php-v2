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

/**
 * @internal
 */
final class ChangeGroupsChangeModel extends JsonObjectModel implements ChangeGroupsChange
{

    public const DISCRIMINATOR_VALUE = 'ChangeGroupsChange';
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
     * @var ?array
     */
    protected $previousValue;

    /**
     *
     * @var ?array
     */
    protected $nextValue;

    /**
     *
     * @var ?array
     */
    protected $addedItems;

    /**
     *
     * @var ?array
     */
    protected $removedItems;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $change = null,
        ?array $previousValue = null,
        ?array $nextValue = null,
        ?array $addedItems = null,
        ?array $removedItems = null,
        ?string $type = null
    ) {
        $this->change = $change;
        $this->previousValue = $previousValue;
        $this->nextValue = $nextValue;
        $this->addedItems = $addedItems;
        $this->removedItems = $removedItems;
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
     * <p>Value before the change.</p>
     *
     *
     * @return null|array
     */
    public function getPreviousValue()
    {
        if (is_null($this->previousValue)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_PREVIOUS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->previousValue = $data;
        }

        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *
     *
     * @return null|array
     */
    public function getNextValue()
    {
        if (is_null($this->nextValue)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_NEXT_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->nextValue = $data;
        }

        return $this->nextValue;
    }

    /**
     * <p>Elements added to the array.</p>
     *
     *
     * @return null|array
     */
    public function getAddedItems()
    {
        if (is_null($this->addedItems)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_ADDED_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->addedItems = $data;
        }

        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *
     *
     * @return null|array
     */
    public function getRemovedItems()
    {
        if (is_null($this->removedItems)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_REMOVED_ITEMS);
            if (is_null($data)) {
                return null;
            }
            $this->removedItems = $data;
        }

        return $this->removedItems;
    }


    /**
     * @param ?string $change
     */
    public function setChange(?string $change): void
    {
        $this->change = $change;
    }

    /**
     * @param ?array $previousValue
     */
    public function setPreviousValue(?array $previousValue): void
    {
        $this->previousValue = $previousValue;
    }

    /**
     * @param ?array $nextValue
     */
    public function setNextValue(?array $nextValue): void
    {
        $this->nextValue = $nextValue;
    }

    /**
     * @param ?array $addedItems
     */
    public function setAddedItems(?array $addedItems): void
    {
        $this->addedItems = $addedItems;
    }

    /**
     * @param ?array $removedItems
     */
    public function setRemovedItems(?array $removedItems): void
    {
        $this->removedItems = $removedItems;
    }



}
