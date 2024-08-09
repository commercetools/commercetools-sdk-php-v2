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
 * @implements Builder<DeliveryCustomFieldRemovedMessagePayload>
 */
final class DeliveryCustomFieldRemovedMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?string
     */
    private $deliveryId;

    /**
     * <p>Name of the Custom Field that was removed.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
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
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

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


    public function build(): DeliveryCustomFieldRemovedMessagePayload
    {
        return new DeliveryCustomFieldRemovedMessagePayloadModel(
            $this->name,
            $this->deliveryId
        );
    }

    public static function of(): DeliveryCustomFieldRemovedMessagePayloadBuilder
    {
        return new self();
    }
}
