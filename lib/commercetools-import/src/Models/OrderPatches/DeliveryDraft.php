<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Import\Models\Common\Address;
use Commercetools\Import\Models\Orders\DeliveryItemCollection;

interface DeliveryDraft extends JsonObject
{
    public const FIELD_ITEMS = 'items';
    public const FIELD_ADDRESS = 'address';
    public const FIELD_PARCELS = 'parcels';

    /**
     * <p>Line Items or Custom Line Items to deliver. It can also be specified individually for each <a href="ctp:api:type:Parcel">Parcel</a>.</p>
     *

     * @return null|DeliveryItemCollection
     */
    public function getItems();

    /**
     * <p>Address to which the Parcels are delivered.</p>
     *

     * @return null|Address
     */
    public function getAddress();

    /**
     * <p>Information regarding the appearance, content, and shipment of a parcel.</p>
     *

     * @return null|DeliveryParcelDraftCollection
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
     * @param ?DeliveryParcelDraftCollection $parcels
     */
    public function setParcels(?DeliveryParcelDraftCollection $parcels): void;
}
