<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

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
final class OrderSetEstimatedDeliveryActionModel extends JsonObjectModel implements OrderSetEstimatedDeliveryAction
{
    public const DISCRIMINATOR_VALUE = 'setEstimatedDelivery';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $shippingKey;

    /**
     *
     * @var ?EstimatedDelivery
     */
    protected $estimatedDelivery;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $shippingKey = null,
        ?EstimatedDelivery $estimatedDelivery = null,
        ?string $action = null
    ) {
        $this->shippingKey = $shippingKey;
        $this->estimatedDelivery = $estimatedDelivery;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Shipping">Shipping</a> to update.
     * This is required and valid only for Orders with <code>Multiple</code> <a href="ctp:api:type:ShippingMode">ShippingMode</a>.
     * An <a href="ctp:api:type:InvalidOperationError">InvalidOperation</a> error is returned if <code>shippingKey</code> is provided for Orders with <code>Single</code> ShippingMode, or omitted for Orders with <code>Multiple</code> ShippingMode.</p>
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
     * <p>Value to set. If empty, any existing value is removed.</p>
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
     * @param ?string $shippingKey
     */
    public function setShippingKey(?string $shippingKey): void
    {
        $this->shippingKey = $shippingKey;
    }

    /**
     * @param ?EstimatedDelivery $estimatedDelivery
     */
    public function setEstimatedDelivery(?EstimatedDelivery $estimatedDelivery): void
    {
        $this->estimatedDelivery = $estimatedDelivery;
    }
}
