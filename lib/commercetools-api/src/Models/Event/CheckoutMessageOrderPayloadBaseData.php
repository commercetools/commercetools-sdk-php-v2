<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Payment\PaymentReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CheckoutMessageOrderPayloadBaseData extends JsonObject
{
    public const FIELD_PROJECT_KEY = 'projectKey';
    public const FIELD_CART = 'cart';
    public const FIELD_PAYMENTS = 'payments';
    public const FIELD_ERRORS = 'errors';

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a> where the order would belong to.</p>
     *

     * @return null|string
     */
    public function getProjectKey();

    /**
     * <p>The <a href="ctp:api:type:Cart">Cart</a> on which the change or action was performed.</p>
     *

     * @return null|CartReference
     */
    public function getCart();

    /**
     * <p>The <a href="ctp:api:type:Payment">Payments</a> on which the change or action was performed.</p>
     *

     * @return null|PaymentReferenceCollection
     */
    public function getPayments();

    /**
     * <p>Errors associated with the order event.</p>
     *

     * @return null|ErrorObjectCollection
     */
    public function getErrors();

    /**
     * @param ?string $projectKey
     */
    public function setProjectKey(?string $projectKey): void;

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void;

    /**
     * @param ?PaymentReferenceCollection $payments
     */
    public function setPayments(?PaymentReferenceCollection $payments): void;

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void;
}
