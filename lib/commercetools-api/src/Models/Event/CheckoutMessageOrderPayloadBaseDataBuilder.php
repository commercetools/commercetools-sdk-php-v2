<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceBuilder;
use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Payment\PaymentReferenceCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CheckoutMessageOrderPayloadBaseData>
 */
final class CheckoutMessageOrderPayloadBaseDataBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $projectKey;

    /**

     * @var null|CartReference|CartReferenceBuilder
     */
    private $cart;

    /**

     * @var ?PaymentReferenceCollection
     */
    private $payments;

    /**

     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a> where the order would belong to.</p>
     *

     * @return null|string
     */
    public function getProjectKey()
    {
        return $this->projectKey;
    }

    /**
     * <p>The <a href="ctp:api:type:Cart">Cart</a> on which the change or action was performed.</p>
     *

     * @return null|CartReference
     */
    public function getCart()
    {
        return $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart;
    }

    /**
     * <p>The <a href="ctp:api:type:Payment">Payments</a> on which the change or action was performed.</p>
     *

     * @return null|PaymentReferenceCollection
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * <p>Errors associated with the order event.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ?string $projectKey
     * @return $this
     */
    public function withProjectKey(?string $projectKey)
    {
        $this->projectKey = $projectKey;

        return $this;
    }

    /**
     * @param ?CartReference $cart
     * @return $this
     */
    public function withCart(?CartReference $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    /**
     * @param ?PaymentReferenceCollection $payments
     * @return $this
     */
    public function withPayments(?PaymentReferenceCollection $payments)
    {
        $this->payments = $payments;

        return $this;
    }

    /**
     * @param ?ErrorObjectCollection $errors
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * @deprecated use withCart() instead
     * @return $this
     */
    public function withCartBuilder(?CartReferenceBuilder $cart)
    {
        $this->cart = $cart;

        return $this;
    }

    public function build(): CheckoutMessageOrderPayloadBaseData
    {
        return new CheckoutMessageOrderPayloadBaseDataModel(
            $this->projectKey,
            $this->cart instanceof CartReferenceBuilder ? $this->cart->build() : $this->cart,
            $this->payments,
            $this->errors
        );
    }

    public static function of(): CheckoutMessageOrderPayloadBaseDataBuilder
    {
        return new self();
    }
}
