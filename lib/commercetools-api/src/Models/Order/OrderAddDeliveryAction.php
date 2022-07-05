<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderAddDeliveryAction extends OrderUpdateAction
{
    public const FIELD_ITEMS = 'items';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_PARCELS = 'parcels';
    public const FIELD_CUSTOM = 'custom';

    /**

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**

     * @return null|BaseAddress
     */
    public function getAddress();

    /**

     * @return null|ParcelDraftCollection
     */
    public function getParcels();

    /**
     * <p>Custom Fields for the Transaction.</p>
     *

     * @return null|CustomFieldsDraft
     */
    public function getCustom();

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;

    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void;

    /**
     * @param ?ParcelDraftCollection $parcels
     */
    public function setParcels(?ParcelDraftCollection $parcels): void;

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void;
}
