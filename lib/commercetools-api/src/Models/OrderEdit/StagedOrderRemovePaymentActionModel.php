<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifier;
use Commercetools\Api\Models\Payment\PaymentResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StagedOrderRemovePaymentActionModel extends JsonObjectModel implements StagedOrderRemovePaymentAction
{
    const DISCRIMINATOR_VALUE = 'removePayment';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?PaymentResourceIdentifier
     */
    protected $payment;

    public function __construct(
        string $action = null,
        PaymentResourceIdentifier $payment = null
    ) {
        $this->action = $action;
        $this->payment = $payment;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|PaymentResourceIdentifier
     */
    public function getPayment()
    {
        if (is_null($this->payment)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderRemovePaymentAction::FIELD_PAYMENT);
            if (is_null($data)) {
                return null;
            }

            $this->payment = PaymentResourceIdentifierModel::of($data);
        }

        return $this->payment;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setPayment(?PaymentResourceIdentifier $payment): void
    {
        $this->payment = $payment;
    }
}
