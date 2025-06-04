<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Event;

use Commercetools\Api\Models\Cart\CartReference;
use Commercetools\Api\Models\Cart\CartReferenceModel;
use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Api\Models\Payment\PaymentReferenceCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CheckoutMessageOrderPayloadBaseDataModel extends JsonObjectModel implements CheckoutMessageOrderPayloadBaseData
{
    /**
     *
     * @var ?string
     */
    protected $projectKey;

    /**
     *
     * @var ?CartReference
     */
    protected $cart;

    /**
     *
     * @var ?PaymentReferenceCollection
     */
    protected $payments;

    /**
     *
     * @var ?ErrorObjectCollection
     */
    protected $errors;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $projectKey = null,
        ?CartReference $cart = null,
        ?PaymentReferenceCollection $payments = null,
        ?ErrorObjectCollection $errors = null
    ) {
        $this->projectKey = $projectKey;
        $this->cart = $cart;
        $this->payments = $payments;
        $this->errors = $errors;
    }

    /**
     * <p><code>key</code> of the <a href="ctp:api:type:Project">Project</a> where the order would belong to.</p>
     *
     *
     * @return null|string
     */
    public function getProjectKey()
    {
        if (is_null($this->projectKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PROJECT_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->projectKey = (string) $data;
        }

        return $this->projectKey;
    }

    /**
     * <p>The <a href="ctp:api:type:Cart">Cart</a> on which the change or action was performed.</p>
     *
     *
     * @return null|CartReference
     */
    public function getCart()
    {
        if (is_null($this->cart)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CART);
            if (is_null($data)) {
                return null;
            }

            $this->cart = CartReferenceModel::of($data);
        }

        return $this->cart;
    }

    /**
     * <p>The <a href="ctp:api:type:Payment">Payments</a> on which the change or action was performed.</p>
     *
     *
     * @return null|PaymentReferenceCollection
     */
    public function getPayments()
    {
        if (is_null($this->payments)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_PAYMENTS);
            if (is_null($data)) {
                return null;
            }
            $this->payments = PaymentReferenceCollection::fromArray($data);
        }

        return $this->payments;
    }

    /**
     * <p>Errors associated with the order event.</p>
     *
     *
     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        if (is_null($this->errors)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_ERRORS);
            if (is_null($data)) {
                return null;
            }
            $this->errors = ErrorObjectCollection::fromArray($data);
        }

        return $this->errors;
    }


    /**
     * @param ?string $projectKey
     */
    public function setProjectKey(?string $projectKey): void
    {
        $this->projectKey = $projectKey;
    }

    /**
     * @param ?CartReference $cart
     */
    public function setCart(?CartReference $cart): void
    {
        $this->cart = $cart;
    }

    /**
     * @param ?PaymentReferenceCollection $payments
     */
    public function setPayments(?PaymentReferenceCollection $payments): void
    {
        $this->payments = $payments;
    }

    /**
     * @param ?ErrorObjectCollection $errors
     */
    public function setErrors(?ErrorObjectCollection $errors): void
    {
        $this->errors = $errors;
    }
}
