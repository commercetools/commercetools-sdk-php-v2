<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class DeliveryRemovedMessagePayloadModel extends JsonObjectModel implements DeliveryRemovedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DeliveryRemoved';
    /**

     * @var ?string
     */
    protected $type;

    /**

     * @var ?Delivery
     */
    protected $delivery;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Delivery $delivery = null
    ) {
        $this->delivery = $delivery;
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**

     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The <a href="ctp:api:type:Delivery">Delivery</a> that was removed from the <a href="ctp:api:type:Order">Order</a>.</p>
     *

     * @return null|Delivery
     */
    public function getDelivery()
    {
        if (is_null($this->delivery)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DELIVERY);
            if (is_null($data)) {
                return null;
            }

            $this->delivery = DeliveryModel::of($data);
        }

        return $this->delivery;
    }


    /**
     * @param ?Delivery $delivery
     */
    public function setDelivery(?Delivery $delivery): void
    {
        $this->delivery = $delivery;
    }
}
