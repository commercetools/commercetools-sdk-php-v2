<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Me;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Channel\ChannelReference;
use Commercetools\Types\Type\CustomFieldsDraft;

interface MyLineItemDraft extends JsonObject {
    const FIELD_PRODUCT_ID = 'productId';
    const FIELD_VARIANT_ID = 'variantId';
    const FIELD_QUANTITY = 'quantity';
    const FIELD_SUPPLY_CHANNEL = 'supplyChannel';
    const FIELD_DISTRIBUTION_CHANNEL = 'distributionChannel';
    const FIELD_CUSTOM = 'custom';

    /**
     * @return string
     */
    public function getProductId();

    /**
     * @return int
     */
    public function getVariantId();

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @return ChannelReference
     */
    public function getSupplyChannel();

    /**
     * @return ChannelReference
     */
    public function getDistributionChannel();

    /**
     * @return CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param string $productId
     * @return $this
     */
    public function setProductId(string $productId);

    /**
     * @param int $variantId
     * @return $this
     */
    public function setVariantId(int $variantId);

    /**
     * @param int $quantity
     * @return $this
     */
    public function setQuantity(int $quantity);

    /**
     * @param ChannelReference $supplyChannel
     * @return $this
     */
    public function setSupplyChannel(ChannelReference $supplyChannel);

    /**
     * @param ChannelReference $distributionChannel
     * @return $this
     */
    public function setDistributionChannel(ChannelReference $distributionChannel);

    /**
     * @param CustomFieldsDraft $custom
     * @return $this
     */
    public function setCustom(CustomFieldsDraft $custom);

}
