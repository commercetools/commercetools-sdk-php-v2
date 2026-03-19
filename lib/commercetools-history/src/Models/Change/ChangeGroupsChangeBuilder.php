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

/**
 * @implements Builder<ChangeGroupsChange>
 */
final class ChangeGroupsChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?array
     */
    private $previousValue;

    /**

     * @var ?array
     */
    private $nextValue;

    /**

     * @var ?array
     */
    private $addedItems;

    /**

     * @var ?array
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

     * @return null|array
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|array
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|array
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|array
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
     * @param ?array $previousValue
     * @return $this
     */
    public function withPreviousValue(?array $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?array $nextValue
     * @return $this
     */
    public function withNextValue(?array $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?array $addedItems
     * @return $this
     */
    public function withAddedItems(?array $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?array $removedItems
     * @return $this
     */
    public function withRemovedItems(?array $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }


    public function build(): ChangeGroupsChange
    {
        return new ChangeGroupsChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->addedItems,
            $this->removedItems
        );
    }

    public static function of(): ChangeGroupsChangeBuilder
    {
        return new self();
    }
}
