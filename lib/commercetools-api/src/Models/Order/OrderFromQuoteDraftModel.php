<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Quote\QuoteResourceIdentifier;
use Commercetools\Api\Models\Quote\QuoteResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderFromQuoteDraftModel extends JsonObjectModel implements OrderFromQuoteDraft
{
    /**

     * @var ?QuoteResourceIdentifier
     */
    protected $quote;

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
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?QuoteResourceIdentifier $quote = null,
        ?int $version = null,
        ?string $orderNumber = null,
        ?string $paymentState = null,
        ?string $shipmentState = null,
        ?string $orderState = null,
        ?StateResourceIdentifier $state = null
    ) {
        $this->quote = $quote;
        $this->version = $version;
        $this->orderNumber = $orderNumber;
        $this->paymentState = $paymentState;
        $this->shipmentState = $shipmentState;
        $this->orderState = $orderState;
        $this->state = $state;
    }

    /**
     * <p>ResourceIdentifier to the Quote from which this order is created. If the quote has <code>QuoteState</code> in <code>Accepted</code>, <code>Declined</code> or <code>Withdrawn</code> then the order creation will fail. The creation will also if the <code>Quote</code> has expired (<code>validTo</code> check).</p>
     *

     * @return null|QuoteResourceIdentifier
     */
    public function getQuote()
    {
        if (is_null($this->quote)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_QUOTE);
            if (is_null($data)) {
                return null;
            }

            $this->quote = QuoteResourceIdentifierModel::of($data);
        }

        return $this->quote;
    }

    /**
     * <p>The <code>version</code> of the <a href="ctp:api:type:quote">Quote</a> from which an Order is created.</p>
     *

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
     * @param ?QuoteResourceIdentifier $quote
     */
    public function setQuote(?QuoteResourceIdentifier $quote): void
    {
        $this->quote = $quote;
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
}
