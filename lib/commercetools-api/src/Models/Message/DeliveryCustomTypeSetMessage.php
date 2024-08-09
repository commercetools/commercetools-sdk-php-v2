<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface DeliveryCustomTypeSetMessage extends OrderMessage
{
    public const FIELD_CUSTOM_FIELDS = 'customFields';
    public const FIELD_PREVIOUS_TYPE_ID = 'previousTypeId';
    public const FIELD_DELIVERY_ID = 'deliveryId';

    /**
     * <p>The Custom Fields that have been set.</p>
     *

     * @return null|CustomFields
     */
    public function getCustomFields();

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId();

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId();

    /**
     * @param ?CustomFields $customFields
     */
    public function setCustomFields(?CustomFields $customFields): void;

    /**
     * @param ?string $previousTypeId
     */
    public function setPreviousTypeId(?string $previousTypeId): void;

    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void;
}
