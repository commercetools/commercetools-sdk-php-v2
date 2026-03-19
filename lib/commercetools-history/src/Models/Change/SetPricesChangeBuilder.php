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
use Commercetools\History\Models\Common\PriceCollection;

/**
 * @implements Builder<SetPricesChange>
 */
final class SetPricesChangeBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $change;

    /**

     * @var ?PriceCollection
     */
    private $previousValue;

    /**

     * @var ?PriceCollection
     */
    private $nextValue;

    /**

     * @var ?string
     */
    private $catalogData;

    /**

     * @var ?string
     */
    private $variant;

    /**

     * @var ?PriceCollection
     */
    private $addedItems;

    /**

     * @var ?PriceCollection
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

     * @return null|PriceCollection
     */
    public function getPreviousValue()
    {
        return $this->previousValue;
    }

    /**
     * <p>Value after the change.</p>
     *

     * @return null|PriceCollection
     */
    public function getNextValue()
    {
        return $this->nextValue;
    }

    /**
     * <p>Product data that was updated.</p>
     * <ul>
     * <li><code>staged</code>, if the staged <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * <li><code>current</code>, if the current <a href="ctp:api:type:ProductCatalogData">ProductCatalogData</a> was updated.</li>
     * </ul>
     *

     * @return null|string
     */
    public function getCatalogData()
    {
        return $this->catalogData;
    }

    /**
     * <p>Identifier of the updated Product Variant.</p>
     * <p>This field holds the SKU, if defined; otherwise the key; otherwise the ID.</p>
     *

     * @return null|string
     */
    public function getVariant()
    {
        return $this->variant;
    }

    /**
     * <p>Elements added to the array.</p>
     *

     * @return null|PriceCollection
     */
    public function getAddedItems()
    {
        return $this->addedItems;
    }

    /**
     * <p>Elements removed from the array.</p>
     *

     * @return null|PriceCollection
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
     * @param ?PriceCollection $previousValue
     * @return $this
     */
    public function withPreviousValue(?PriceCollection $previousValue)
    {
        $this->previousValue = $previousValue;

        return $this;
    }

    /**
     * @param ?PriceCollection $nextValue
     * @return $this
     */
    public function withNextValue(?PriceCollection $nextValue)
    {
        $this->nextValue = $nextValue;

        return $this;
    }

    /**
     * @param ?string $catalogData
     * @return $this
     */
    public function withCatalogData(?string $catalogData)
    {
        $this->catalogData = $catalogData;

        return $this;
    }

    /**
     * @param ?string $variant
     * @return $this
     */
    public function withVariant(?string $variant)
    {
        $this->variant = $variant;

        return $this;
    }

    /**
     * @param ?PriceCollection $addedItems
     * @return $this
     */
    public function withAddedItems(?PriceCollection $addedItems)
    {
        $this->addedItems = $addedItems;

        return $this;
    }

    /**
     * @param ?PriceCollection $removedItems
     * @return $this
     */
    public function withRemovedItems(?PriceCollection $removedItems)
    {
        $this->removedItems = $removedItems;

        return $this;
    }


    public function build(): SetPricesChange
    {
        return new SetPricesChangeModel(
            $this->change,
            $this->previousValue,
            $this->nextValue,
            $this->catalogData,
            $this->variant,
            $this->addedItems,
            $this->removedItems
        );
    }

    public static function of(): SetPricesChangeBuilder
    {
        return new self();
    }
}
