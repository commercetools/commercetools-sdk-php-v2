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
     *
     * @var ?QuoteResourceIdentifier
     */
    protected $quote;

    /**
     *
     * @var ?int
     */
    protected $version;

    /**
     *
     * @var ?bool
     */
    protected $quoteStateToAccepted;

    /**
     *
     * @var ?string
     */
    protected $orderNumber;

    /**
     *
     * @var ?string
     */
    protected $paymentState;

    /**
     *
     * @var ?string
     */
    protected $shipmentState;

    /**
     *
     * @var ?string
     */
    protected $orderState;

    /**
     *
     * @var ?StateResourceIdentifier
     */
    protected $state;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?QuoteResourceIdentifier $quote = null,
        ?int $version = null,
        ?bool $quoteStateToAccepted = null,
        ?string $orderNumber = null,
        ?string $paymentState = null,
        ?string $shipmentState = null,
        ?string $orderState = null,
        ?StateResourceIdentifier $state = null
    ) {
        $this->quote = $quote;
        $this->version = $version;
        $this->quoteStateToAccepted = $quoteStateToAccepted;
        $this->orderNumber = $orderNumber;
        $this->paymentState = $paymentState;
        $this->shipmentState = $shipmentState;
        $this->orderState = $orderState;
        $this->state = $state;
    }

    /**
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Quote from which the Order is created.
     * If the referenced <a href="ctp:api:type:Quote">Quote</a> has expired (<code>validTo</code> check) or its <code>quoteState</code> is <code>Accepted</code>, <code>Declined</code>, or <code>Withdrawn</code>, the Order creation will fail.</p>
     *
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
     * <p><code>version</code> of the <a href="ctp:api:type:Quote">Quote</a> from which the Order is created.</p>
     *
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
     * <p>If <code>true</code>, the <code>quoteState</code> of the referenced <a href="ctp:api:type:Quote">Quote</a> will be set to <code>Accepted</code>.</p>
     *
     *
     * @return null|bool
     */
    public function getQuoteStateToAccepted()
    {
        if (is_null($this->quoteStateToAccepted)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_QUOTE_STATE_TO_ACCEPTED);
            if (is_null($data)) {
                return null;
            }
            $this->quoteStateToAccepted = (bool) $data;
        }

        return $this->quoteStateToAccepted;
    }

    /**
     * <p>User-defined identifier for the Order that is unique across a Project.
     * Once set, the value cannot be changed.</p>
     *
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
     * <p>Payment status for the Order.</p>
     *
     *
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
     * <p>Shipment status for the Order.</p>
     *
     *
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
     * <p>Current status for the Order.</p>
     *
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
     * <p>State of the Order in a custom workflow.</p>
     *
     *
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
     * @param ?bool $quoteStateToAccepted
     */
    public function setQuoteStateToAccepted(?bool $quoteStateToAccepted): void
    {
        $this->quoteStateToAccepted = $quoteStateToAccepted;
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
