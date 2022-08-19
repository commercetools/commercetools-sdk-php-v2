<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Store\ProductSelectionSettingCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<StoreProductSelectionsChangedMessagePayload>
 */
final class StoreProductSelectionsChangedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $addedProductSelections;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $removedProductSelections;

    /**

     * @var ?ProductSelectionSettingCollection
     */
    private $updatedProductSelections;

    /**
     * <p><a href="ctp:api:type:ProductSelectionSetting">ProductSelectionSettings</a> that were added to the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getAddedProductSelections()
    {
        return $this->addedProductSelections;
    }

    /**
     * <p><a href="ctp:api:type:ProductSelectionSetting">ProductSelectionSettings</a> that were removed from the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getRemovedProductSelections()
    {
        return $this->removedProductSelections;
    }

    /**
     * <p><a href="ctp:api:type:ProductSelectionSetting">ProductSelectionSettings</a> that were updated in the <a href="ctp:api:type:Store">Store</a>.</p>
     *

     * @return null|ProductSelectionSettingCollection
     */
    public function getUpdatedProductSelections()
    {
        return $this->updatedProductSelections;
    }

    /**
     * @param ?ProductSelectionSettingCollection $addedProductSelections
     * @return $this
     */
    public function withAddedProductSelections(?ProductSelectionSettingCollection $addedProductSelections)
    {
        $this->addedProductSelections = $addedProductSelections;

        return $this;
    }

    /**
     * @param ?ProductSelectionSettingCollection $removedProductSelections
     * @return $this
     */
    public function withRemovedProductSelections(?ProductSelectionSettingCollection $removedProductSelections)
    {
        $this->removedProductSelections = $removedProductSelections;

        return $this;
    }

    /**
     * @param ?ProductSelectionSettingCollection $updatedProductSelections
     * @return $this
     */
    public function withUpdatedProductSelections(?ProductSelectionSettingCollection $updatedProductSelections)
    {
        $this->updatedProductSelections = $updatedProductSelections;

        return $this;
    }


    public function build(): StoreProductSelectionsChangedMessagePayload
    {
        return new StoreProductSelectionsChangedMessagePayloadModel(
            $this->addedProductSelections,
            $this->removedProductSelections,
            $this->updatedProductSelections
        );
    }

    public static function of(): StoreProductSelectionsChangedMessagePayloadBuilder
    {
        return new self();
    }
}
