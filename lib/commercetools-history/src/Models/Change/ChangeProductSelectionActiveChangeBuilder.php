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

/**
 * @implements Builder<ChangeProductSelectionActiveChange>
 */
final class ChangeProductSelectionActiveChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var null|Reference|ReferenceBuilder
     */
    private $productSelection;

    /**

     * @var ?bool
     */
    private $previousValue;

    /**

     * @var ?bool
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
     * <p>Reference to the Product Selection which was changed.</p>
     *

     * @return null|Reference
     */
    public function getProductSelection()
    {
        return $this->productSelection instanceof ReferenceBuilder ? $this->productSelection->build() : $this->productSelection;
    }

    /**
     * <p>Value before the change.</p>
     *

     * @return null|bool
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|bool
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
     * @param ?Reference $productSelection
     * @return $this
     */
    public function withProductSelection(?Reference $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    /**
     * @param ?bool $previousValue
     * @return $this
     */
    public function withPreviousValue(?bool $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?bool $nextValue
     * @return $this
     */
    public function withNextValue(?bool $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @deprecated use withProductSelection() instead
     * @return $this
     */
    public function withProductSelectionBuilder(?ReferenceBuilder $productSelection)
    {
        $this->productSelection = $productSelection;

        return $this;
    }

    public function build(): ChangeProductSelectionActiveChange
    {
        return new ChangeProductSelectionActiveChangeModel(
            $this->change,
            $this->productSelection instanceof ReferenceBuilder ? $this->productSelection->build() : $this->productSelection,
            $this->previousValue,
            $this->nextValue
        );
    }

    public static function of(): ChangeProductSelectionActiveChangeBuilder
    {
        return new self();
    }
}
