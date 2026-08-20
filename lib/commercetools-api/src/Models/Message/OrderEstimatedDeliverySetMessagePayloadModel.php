<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Cart\EstimatedDelivery;
use Commercetools\Api\Models\Cart\EstimatedDeliveryModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderEstimatedDeliverySetMessagePayloadModel extends JsonObjectModel implements OrderEstimatedDeliverySetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'OrderEstimatedDeliverySet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?EstimatedDelivery
     */
    protected $estimatedDelivery;

    /**
     *
     * @var ?string
     */
    protected $shippingKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?EstimatedDelivery $estimatedDelivery = null,
        ?string $shippingKey = null,
        ?string $type = null
    ) {
        $this->estimatedDelivery = $estimatedDelivery;
        $this->shippingKey = $shippingKey;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
     * <p>Estimated delivery window on the <a href="ctp:api:type:Order">Order</a> after the <a href="ctp:api:type:OrderSetEstimatedDeliveryAction">Set Estimated Delivery</a> update action.</p>
     *
     *
     * @return null|EstimatedDelivery
     */
    public function getEstimatedDelivery()
    {
        if (is_null($this->estimatedDelivery)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ESTIMATED_DELIVERY);
            if (is_null($data)) {
                return null;
            }

            $this->estimatedDelivery = EstimatedDeliveryModel::of($data);
        }

        return $this->estimatedDelivery;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Shipping">Shipping</a> that was updated. Only present for Orders with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.</p>
     *
     *
     * @return null|string
     */
    public function getShippingKey()
    {
        if (is_null($this->shippingKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPPING_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->shippingKey = (string) $data;
        }

        return $this->shippingKey;
    }


    /**
     * @param ?EstimatedDelivery $estimatedDelivery
     */
    public function setEstimatedDelivery(?EstimatedDelivery $estimatedDelivery): void
    {
        $this->estimatedDelivery = $estimatedDelivery;
    }

    /**
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }
}
