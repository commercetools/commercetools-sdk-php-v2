<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Cart\CartResourceIdentifier;
use Commercetools\Api\Models\Cart\CartResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderFromCartDraftModel extends JsonObjectModel implements OrderFromCartDraft
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?CartResourceIdentifier
     */
    protected $cart;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?string
     */
    protected $orderNumber;

    /**
     * @var ?string
     */
    protected $paymentState;

    /**
     * @var ?string
     */
    protected $shipmentState;

    /**
     * @var ?string
     */
    protected $orderState;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?CartResourceIdentifier $cart = null,
        ?int $version = null,
        ?string $orderNumber = null,
        ?string $paymentState = null,
        ?string $shipmentState = null,
        ?string $orderState = null,
        ?StateResourceIdentifier $state = null,
        ?CustomFieldsDraft $custom = null
    ) {
        $this->id = $id;
        $this->cart = $cart;
        $this->version = $version;
        $this->orderNumber = $orderNumber;
        $this->paymentState = $paymentState;
        $this->shipmentState = $shipmentState;
        $this->orderState = $orderState;
        $this->state = $state;
        $this->custom = $custom;
    }

    /**
     * <p>The unique id of the cart from which an order is created.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>ResourceIdentifier to the Cart from which this order is created.</p>
     *
     * @return null|CartResourceIdentifier
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }

            $this->cart = CartResourceIdentifierModel::of($data);
        }

        return $this->cart;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(self::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

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
        if (is_null($this->orderNumber)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_NUMBER);
            if (is_null($data)) {
                return null;
            }
            $this->orderNumber = (string) $data;
        }

        return $this->orderNumber;
    }

    /**
     * @return null|string
     */
    public function getPaymentState()
    {
        if (is_null($this->paymentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentState = (string) $data;
        }

        return $this->paymentState;
    }

    /**
     * @return null|string
     */
    public function getShipmentState()
    {
        if (is_null($this->shipmentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_SHIPMENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->shipmentState = (string) $data;
        }

        return $this->shipmentState;
    }

    /**
     * <p>Order will be created with <code>Open</code> status by default.</p>
     *
     * @return null|string
     */
    public function getOrderState()
    {
        if (is_null($this->orderState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ORDER_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->orderState = (string) $data;
        }

        return $this->orderState;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
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
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?CartResourceIdentifier $cart
     */
    public function setCart(?CartResourceIdentifier $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void
    {
        $this->orderNumber = $orderNumber;
    }

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void
    {
        $this->paymentState = $paymentState;
    }

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void
    {
        $this->shipmentState = $shipmentState;
    }

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void
    {
        $this->orderState = $orderState;
    }

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
