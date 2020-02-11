<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

use Commercetools\Api\Models\Order\Delivery;
use Commercetools\Api\Models\Order\DeliveryModel;

final class DeliveryAddedMessagePayloadModel extends JsonObjectModel implements DeliveryAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'DeliveryAdded';
    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Delivery
     */
    protected $delivery;


    public function __construct(
        Delivery $delivery = null
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
            $data = $this->raw(MessagePayload::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|Delivery
     */
    public function getDelivery()
    {
        if (is_null($this->delivery)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(DeliveryAddedMessagePayload::FIELD_DELIVERY);
            if (is_null($data)) {
                return null;
            }

            $this->delivery = DeliveryModel::of($data);
        }

        return $this->delivery;
    }

    public function setDelivery(?Delivery $delivery): void
    {
        $this->delivery = $delivery;
    }



}
