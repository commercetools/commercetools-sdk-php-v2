<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Quote\QuoteResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderFromQuoteDraft extends JsonObject
{
    public const FIELD_QUOTE = 'quote';
    public const FIELD_VERSION = 'version';
    public const FIELD_QUOTE_STATE_TO_ACCEPTED = 'quoteStateToAccepted';
    public const FIELD_ORDER_NUMBER = 'orderNumber';
    public const FIELD_PAYMENT_STATE = 'paymentState';
    public const FIELD_SHIPMENT_STATE = 'shipmentState';
    public const FIELD_ORDER_STATE = 'orderState';
    public const FIELD_STATE = 'state';

    /**
     * <p>ResourceIdentifier of the Quote from which this Order is created. If the Quote has <code>QuoteState</code> in <code>Accepted</code>, <code>Declined</code> or <code>Withdrawn</code> then the order creation will fail. The creation will also fail if the <code>Quote</code> has expired (<code>validTo</code> check).</p>
     *

     * @return null|QuoteResourceIdentifier
     */
    public function getQuote();

    /**
     * <p><code>version</code> of the <a href="ctp:api:type:Quote">Quote</a> from which an Order is created.</p>
     *

     * @return null|int
     */
    public function getVersion();

    /**
     * <p>If <code>true</code>, the <code>quoteState</code> of the referenced <a href="ctp:api:type:Quote">Quote</a> will be set to <code>Accepted</code>.</p>
     *

     * @return null|bool
     */
    public function getQuoteStateToAccepted();

    /**
     * <p>String that uniquely identifies an order.
     * It can be used to create more human-readable (in contrast to ID) identifier for the order.
     * It should be unique across a project.
     * Once it's set it cannot be changed.
     * For easier use on Get, Update and Delete actions we suggest assigning order numbers that match the regular expression <code>[a-z0-9_-]{2,36}</code>.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>Payment state of the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Shipment state of the Order.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Order will be created with <code>Open</code> status by default.</p>
     *

     * @return null|string
     */
    public function getOrderState();

    /**
     * <p><a href="ctp:api:type:Reference">Reference</a> to a <a href="ctp:api:type:State">State</a> indicating the Order's state.</p>
     *

     * @return null|StateResourceIdentifier
     */
    public function getState();

    /**
     * @param ?QuoteResourceIdentifier $quote
     */
    public function setQuote(?QuoteResourceIdentifier $quote): void;

    /**
     * @param ?int $version
     */
    public function setVersion(?int $version): void;

    /**
     * @param ?bool $quoteStateToAccepted
     */
    public function setQuoteStateToAccepted(?bool $quoteStateToAccepted): void;

    /**
     * @param ?string $orderNumber
     */
    public function setOrderNumber(?string $orderNumber): void;

    /**
     * @param ?string $paymentState
     */
    public function setPaymentState(?string $paymentState): void;

    /**
     * @param ?string $shipmentState
     */
    public function setShipmentState(?string $shipmentState): void;

    /**
     * @param ?string $orderState
     */
    public function setOrderState(?string $orderState): void;

    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void;
}
