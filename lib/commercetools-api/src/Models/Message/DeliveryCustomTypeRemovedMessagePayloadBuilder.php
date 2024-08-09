<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<DeliveryCustomTypeRemovedMessagePayload>
 */
final class DeliveryCustomTypeRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $previousTypeId;

    /**

     * @var ?string
     */
    private $deliveryId;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Type">Custom Type</a> that was removed. Absent if there was no previous Custom Type present.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId()
    {
        return $this->previousTypeId;
    }

    /**
     * <p>Unique identifier of the <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     *

     * @return null|string
     */
    public function getDeliveryId()
    {
        return $this->deliveryId;
    }

    /**
     * @param ?string $previousTypeId
     * @return $this
     */
    public function withPreviousTypeId(?string $previousTypeId)
    {
        $this->previousTypeId = $previousTypeId;

        return $this;
    }

    /**
     * @param ?string $deliveryId
     * @return $this
     */
    public function withDeliveryId(?string $deliveryId)
    {
        $this->deliveryId = $deliveryId;

        return $this;
    }


    public function build(): DeliveryCustomTypeRemovedMessagePayload
    {
        return new DeliveryCustomTypeRemovedMessagePayloadModel(
            $this->previousTypeId,
            $this->deliveryId
        );
    }

    public static function of(): DeliveryCustomTypeRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
