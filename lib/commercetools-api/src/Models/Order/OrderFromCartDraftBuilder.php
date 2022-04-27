<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderFromCartDraft>
 */
final class OrderFromCartDraftBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $id;

    /**
     * @var null|CartResourceIdentifier|CartResourceIdentifierBuilder
     */
    private $cart;

    /**
     * @var ?int
     */
    private $version;

    /**
     * @var ?string
     */
    private $orderNumber;

    /**
     * @var ?string
     */
    private $paymentState;

    /**
     * @var ?string
     */
    private $shipmentState;

    /**
     * @var ?string
     */
    private $orderState;

    /**
     * @var null|StateResourceIdentifier|StateResourceIdentifierBuilder
     */
    private $state;

    /**
     * @var null|CustomFieldsDraft|CustomFieldsDraftBuilder
     */
    private $custom;

    /**
     * <p>The unique id of the cart from which an order is created.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>ResourceIdentifier to the Cart from which this order is created.</p>
     *
     * @return null|CartResourceIdentifier
     */
    public function getCart()
    {
        return $this->cart instanceof CartResourceIdentifierBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>String that uniquely identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique across a project.
     * Once it's set it cannot be changed.
     * For easier use on Get, Update and Delete actions we suggest assigning order numbers that match the regular expression <code>[a-z0-9_-]{2,36}</code>.</p>
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        return $this->paymentState;
    }

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        return $this->shipmentState;
    }

    /**
     * <p>Order will be created with <code>Open</code> status by default.</p>
     *
     * @return null|string
     */
    public function getOrderState()
    {
        return $this->orderState;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        return $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state;
    }

    /**
     * <p><a href="/../api/projects/custom-fields">Custom Fields</a> for the Order. The Custom Field type must match the type of the Custom Fields in the referenced <a href="/../api/projects/carts#cart">Cart</a>.
     * If specified, the Custom Fields are merged with the Custom Fields on the referenced <a href="/../api/projects/carts#cart">Cart</a> and added to the Order.
     * If empty, the Custom Fields on the referenced <a href="/../api/projects/carts#cart">Cart</a> are added to the Order automatically.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?CartResourceIdentifier $cart
     * @return $this
     */
    public function withCart(?CartResourceIdentifier $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @param ?int $version
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @param ?string $orderNumber
     * @return $this
     */
    public function withOrderNumber(?string $orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * @param ?string $paymentState
     * @return $this
     */
    public function withPaymentState(?string $paymentState)
    {
        $this->paymentState = $paymentState;

        return $this;
    }

    /**
     * @param ?string $shipmentState
     * @return $this
     */
    public function withShipmentState(?string $shipmentState)
    {
        $this->shipmentState = $shipmentState;

        return $this;
    }

    /**
     * @param ?string $orderState
     * @return $this
     */
    public function withOrderState(?string $orderState)
    {
        $this->orderState = $orderState;

        return $this;
    }

    /**
     * @param ?StateResourceIdentifier $state
     * @return $this
     */
    public function withState(?StateResourceIdentifier $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     * @return $this
     */
    public function withCustom(?CustomFieldsDraft $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withCart() instead
     * @return $this
     */
    public function withCartBuilder(?CartResourceIdentifierBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @deprecated use withState() instead
     * @return $this
     */
    public function withStateBuilder(?StateResourceIdentifierBuilder $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsDraftBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): OrderFromCartDraft
    {
        return new OrderFromCartDraftModel(
            $this->id,
            $this->cart instanceof CartResourceIdentifierBuilder ? $this->cart->build() : $this->cart,
            $this->version,
            $this->orderNumber,
            $this->paymentState,
            $this->shipmentState,
            $this->orderState,
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state,
            $this->custom instanceof CustomFieldsDraftBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): OrderFromCartDraftBuilder
    {
        return new self();
    }
}
