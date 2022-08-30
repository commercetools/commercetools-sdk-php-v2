<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartAddPaymentActionModel extends JsonObjectModel implements CartAddPaymentAction
{
    public const DISCRIMINATOR_VALUE = 'addPayment';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?PaymentResourceIdentifier
     */
    protected $payment;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?PaymentResourceIdentifier $payment = null,
        ?string $action = null
    ) {
        $this->payment = $payment;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     *
     * @return null|PaymentResourceIdentifier
     */
    public function getPayment()
    {
        if (is_null($this->payment)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_PAYMENT);
            if (is_null($data)) {
                return null;
            }

            $this->payment = PaymentResourceIdentifierModel::of($data);
        }

        return $this->payment;
    }


    /**
     * @param ?PaymentResourceIdentifier $payment
     */
    public function setPayment(?PaymentResourceIdentifier $payment): void
    {
        $this->payment = $payment;
    }
}
