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
     * <p><a href="ctp:api:type:ResourceIdentifier">ResourceIdentifier</a> to the Quote from which the Order is created.
     * If the referenced <a href="ctp:api:type:Quote">Quote</a> has expired (<code>validTo</code> check) or its <code>quoteState</code> is <code>Accepted</code>, <code>Declined</code>, or <code>Withdrawn</code>, the Order creation will fail.</p>
     *

     * @return null|QuoteResourceIdentifier
     */
    public function getQuote();

    /**
     * <p><code>version</code> of the <a href="ctp:api:type:Quote">Quote</a> from which the Order is created.</p>
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
     * <p>User-defined identifier for the Order that is unique across a Project.
     * Once set, the value cannot be changed.</p>
     *

     * @return null|string
     */
    public function getOrderNumber();

    /**
     * <p>Payment status for the Order.</p>
     *

     * @return null|string
     */
    public function getPaymentState();

    /**
     * <p>Shipment status for the Order.</p>
     *

     * @return null|string
     */
    public function getShipmentState();

    /**
     * <p>Current status for the Order.</p>
     *

     * @return null|string
     */
    public function getOrderState();

    /**
     * <p>State of the Order in a custom workflow.</p>
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
