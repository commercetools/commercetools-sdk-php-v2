<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\History\Models\Common\Address;
use Commercetools\History\Models\Common\DeliveryItemCollection;
use Commercetools\History\Models\Common\ParcelCollection;

interface DeliveryChangeValue extends JsonObject
{

    public const FIELD_ITEMS = 'items';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_PARCELS = 'parcels';

    /**
     * <p>Line Items or Custom Line Items shipped in the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * <p>Address to which the parcels are delivered.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * <p>Parcels included in the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|ParcelCollection
     */
    public function getParcels();

    /**
     * @param ?DeliveryItemCollection $items
     */
    public function setItems(?DeliveryItemCollection $items): void;

    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void;

    /**
     * @param ?ParcelCollection $parcels
     */
    public function setParcels(?ParcelCollection $parcels): void;
}
