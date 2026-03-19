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
use Commercetools\History\Models\Common\KeyReferenceCollection;

/**
 * @implements Builder<SetInheritedStoresChange>
 */
final class SetInheritedStoresChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?KeyReferenceCollection
     */
    private $addedItems;

    /**

     * @var ?KeyReferenceCollection
     */
    private $removedItems;

    /**

     * @var ?KeyReferenceCollection
     */
    private $previousValue;

    /**

     * @var ?KeyReferenceCollection
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

     * @return null|KeyReferenceCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|KeyReferenceCollection
     */
    public function getRemovedItems()
    {
        return $this->removedItems;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|KeyReferenceCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|KeyReferenceCollection
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
     * @param ?KeyReferenceCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?KeyReferenceCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?KeyReferenceCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?KeyReferenceCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }

    /**
     * @param ?KeyReferenceCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?KeyReferenceCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?KeyReferenceCollection $nextValue
     * @return $this
     */
    public function withNextValue(?KeyReferenceCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }


    public function build(): SetInheritedStoresChange
    {
        return new SetInheritedStoresChangeModel(
            $this->change,
            $this->addedItems,
            $this->removedItems,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): SetInheritedStoresChangeBuilder
    {
        return new self();
    }
}
