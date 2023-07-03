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
use Commercetools\History\Models\Common\Reference;
use Commercetools\History\Models\Common\ReferenceBuilder;
use Commercetools\History\Models\Common\ReferenceCollection;

/**
 * @implements Builder<RemoveFromCategoryChange>
 */
final class RemoveFromCategoryChangeBuilder implements Builder
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

     * @var null|Reference|ReferenceBuilder
     */
    private $category;

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
     * <p>Category from which the Product was removed.</p>
     *

     * @return null|Reference
     */
    public function getCategory()
    {
        return $this->category instanceof ReferenceBuilder ? $this->category->build() : $this->category;
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
     * @param ?Reference $category
     * @return $this
     */
    public function withCategory(?Reference $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @deprecated use withCategory() instead
     * @return $this
     */
    public function withCategoryBuilder(?ReferenceBuilder $category)
    {
        $this->category = $category;

        return $this;
    }

    public function build(): RemoveFromCategoryChange
    {
        return new RemoveFromCategoryChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->category instanceof ReferenceBuilder ? $this->category->build() : $this->category
        );
    }

    public static function of(): RemoveFromCategoryChangeBuilder
    {
        return new self();
    }
}
