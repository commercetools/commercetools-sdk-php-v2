<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Payment\PaymentMethodInfo;
use Commercetools\Api\Models\Payment\PaymentMethodInfoModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class MyPaymentDraftModel extends JsonObjectModel implements MyPaymentDraft
{
    /**
     * @var ?PaymentMethodInfo
     */
    protected $paymentMethodInfo;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?Money
     */
    protected $amountPlanned;

    /**
     * @var ?MyTransactionDraft
     */
    protected $transaction;

    public function __construct(
        PaymentMethodInfo $paymentMethodInfo = null,
        CustomFieldsDraft $custom = null,
        Money $amountPlanned = null,
        MyTransactionDraft $transaction = null
    ) {
        $this->paymentMethodInfo = $paymentMethodInfo;
        $this->custom = $custom;
        $this->amountPlanned = $amountPlanned;
        $this->transaction = $transaction;
    }

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        if (is_null($this->paymentMethodInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyPaymentDraft::FIELD_PAYMENT_METHOD_INFO);
            if (is_null($data)) {
                return null;
            }

            $this->paymentMethodInfo = PaymentMethodInfoModel::of($data);
        }

        return $this->paymentMethodInfo;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyPaymentDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|Money
     */
    public function getAmountPlanned()
    {
        if (is_null($this->amountPlanned)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyPaymentDraft::FIELD_AMOUNT_PLANNED);
            if (is_null($data)) {
                return null;
            }

            $this->amountPlanned = MoneyModel::of($data);
        }

        return $this->amountPlanned;
    }

    /**
     * @return null|MyTransactionDraft
     */
    public function getTransaction()
    {
        if (is_null($this->transaction)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyPaymentDraft::FIELD_TRANSACTION);
            if (is_null($data)) {
                return null;
            }

            $this->transaction = MyTransactionDraftModel::of($data);
        }

        return $this->transaction;
    }

    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void
    {
        $this->paymentMethodInfo = $paymentMethodInfo;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setAmountPlanned(?Money $amountPlanned): void
    {
        $this->amountPlanned = $amountPlanned;
    }

    public function setTransaction(?MyTransactionDraft $transaction): void
    {
        $this->transaction = $transaction;
    }
}
