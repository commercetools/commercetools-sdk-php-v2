<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Quote\QuoteResourceIdentifier;
use Commercetools\Api\Models\Quote\QuoteResourceIdentifierBuilder;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderFromQuoteDraft>
 */
final class OrderFromQuoteDraftBuilder implements Builder
{
    /**

     * @var null|QuoteResourceIdentifier|QuoteResourceIdentifierBuilder
     */
    private $quote;

    /**

     * @var ?int
     */
    private $version;

    /**

     * @var ?bool
     */
    private $quoteStateToAccepted;

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
     * <p>ResourceIdentifier of the Quote from which this Order is created. If the Quote has <code>QuoteState</code> in <code>Accepted</code>, <code>Declined</code> or <code>Withdrawn</code> then the order creation will fail. The creation will also fail if the <code>Quote</code> has expired (<code>validTo</code> check).</p>
     *

     * @return null|QuoteResourceIdentifier
     */
    public function getQuote()
    {
        return $this->quote instanceof QuoteResourceIdentifierBuilder ? $this->quote->build() : $this->quote;
    }

    /**
     * <p><code>version</code> of the <a href="ctp:api:type:quote">Quote</a> from which an Order is created.</p>
     *

     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * <p>If <code>true</code>, the <code>quoteState</code> of the referenced <a href="ctp:api:type:quote">Quote</a> will be set to <code>Accepted</code>.</p>
     *

     * @return null|bool
     */
    public function getQuoteStateToAccepted()
    {
        return $this->quoteStateToAccepted;
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
     * @param ?QuoteResourceIdentifier $quote
     * @return $this
     */
    public function withQuote(?QuoteResourceIdentifier $quote)
    {
        $this->quote = $quote;

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
     * @param ?bool $quoteStateToAccepted
     * @return $this
     */
    public function withQuoteStateToAccepted(?bool $quoteStateToAccepted)
    {
        $this->quoteStateToAccepted = $quoteStateToAccepted;

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
     * @deprecated use withQuote() instead
     * @return $this
     */
    public function withQuoteBuilder(?QuoteResourceIdentifierBuilder $quote)
    {
        $this->quote = $quote;

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

    public function build(): OrderFromQuoteDraft
    {
        return new OrderFromQuoteDraftModel(
            $this->quote instanceof QuoteResourceIdentifierBuilder ? $this->quote->build() : $this->quote,
            $this->version,
            $this->quoteStateToAccepted,
            $this->orderNumber,
            $this->paymentState,
            $this->shipmentState,
            $this->orderState,
            $this->state instanceof StateResourceIdentifierBuilder ? $this->state->build() : $this->state
        );
    }

    public static function of(): OrderFromQuoteDraftBuilder
    {
        return new self();
    }
}
