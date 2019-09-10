<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\Money;
use Commercetools\Api\Models\Common\MoneyModel;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftCollection;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class PaymentDraftModel extends JsonObjectModel implements PaymentDraft
{
    /**
     * @var ?Money
     */
    protected $amountAuthorized;

    /**
     * @var ?string
     */
    protected $anonymousId;

    /**
     * @var ?PaymentMethodInfo
     */
    protected $paymentMethodInfo;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $authorizedUntil;

    /**
     * @var ?string
     */
    protected $externalId;

    /**
     * @var ?TransactionDraftCollection
     */
    protected $transactions;

    /**
     * @var ?Money
     */
    protected $amountPaid;

    /**
     * @var ?Money
     */
    protected $amountRefunded;

    /**
     * @var ?Money
     */
    protected $amountPlanned;

    /**
     * @var ?CustomFieldsDraftCollection
     */
    protected $interfaceInteractions;

    /**
     * @var ?string
     */
    protected $interfaceId;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?PaymentStatusDraft
     */
    protected $paymentStatus;

    /**
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    public function __construct(
        Money $amountAuthorized = null,
        string $anonymousId = null,
        PaymentMethodInfo $paymentMethodInfo = null,
        CustomFieldsDraft $custom = null,
        string $authorizedUntil = null,
        string $externalId = null,
        TransactionDraftCollection $transactions = null,
        Money $amountPaid = null,
        Money $amountRefunded = null,
        Money $amountPlanned = null,
        CustomFieldsDraftCollection $interfaceInteractions = null,
        string $interfaceId = null,
        string $key = null,
        PaymentStatusDraft $paymentStatus = null,
        CustomerResourceIdentifier $customer = null
    ) {
        $this->amountAuthorized = $amountAuthorized;
        $this->anonymousId = $anonymousId;
        $this->paymentMethodInfo = $paymentMethodInfo;
        $this->custom = $custom;
        $this->authorizedUntil = $authorizedUntil;
        $this->externalId = $externalId;
        $this->transactions = $transactions;
        $this->amountPaid = $amountPaid;
        $this->amountRefunded = $amountRefunded;
        $this->amountPlanned = $amountPlanned;
        $this->interfaceInteractions = $interfaceInteractions;
        $this->interfaceId = $interfaceId;
        $this->key = $key;
        $this->paymentStatus = $paymentStatus;
        $this->customer = $customer;
    }

    /**
     * @return null|Money
     */
    public function getAmountAuthorized()
    {
        if (is_null($this->amountAuthorized)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentDraft::FIELD_AMOUNT_AUTHORIZED);
            if (is_null($data)) {
                return null;
            }

            $this->amountAuthorized = MoneyModel::of($data);
        }

        return $this->amountAuthorized;
    }

    /**
     * @return null|string
     */
    public function getAnonymousId()
    {
        if (is_null($this->anonymousId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentDraft::FIELD_ANONYMOUS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->anonymousId = (string) $data;
        }

        return $this->anonymousId;
    }

    /**
     * @return null|PaymentMethodInfo
     */
    public function getPaymentMethodInfo()
    {
        if (is_null($this->paymentMethodInfo)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentDraft::FIELD_PAYMENT_METHOD_INFO);
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
            $data = $this->raw(PaymentDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|string
     */
    public function getAuthorizedUntil()
    {
        if (is_null($this->authorizedUntil)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentDraft::FIELD_AUTHORIZED_UNTIL);
            if (is_null($data)) {
                return null;
            }
            $this->authorizedUntil = (string) $data;
        }

        return $this->authorizedUntil;
    }

    /**
     * @return null|string
     */
    public function getExternalId()
    {
        if (is_null($this->externalId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentDraft::FIELD_EXTERNAL_ID);
            if (is_null($data)) {
                return null;
            }
            $this->externalId = (string) $data;
        }

        return $this->externalId;
    }

    /**
     * @return null|TransactionDraftCollection
     */
    public function getTransactions()
    {
        if (is_null($this->transactions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(PaymentDraft::FIELD_TRANSACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->transactions = TransactionDraftCollection::fromArray($data);
        }

        return $this->transactions;
    }

    /**
     * @return null|Money
     */
    public function getAmountPaid()
    {
        if (is_null($this->amountPaid)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentDraft::FIELD_AMOUNT_PAID);
            if (is_null($data)) {
                return null;
            }

            $this->amountPaid = MoneyModel::of($data);
        }

        return $this->amountPaid;
    }

    /**
     * @return null|Money
     */
    public function getAmountRefunded()
    {
        if (is_null($this->amountRefunded)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentDraft::FIELD_AMOUNT_REFUNDED);
            if (is_null($data)) {
                return null;
            }

            $this->amountRefunded = MoneyModel::of($data);
        }

        return $this->amountRefunded;
    }

    /**
     * @return null|Money
     */
    public function getAmountPlanned()
    {
        if (is_null($this->amountPlanned)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentDraft::FIELD_AMOUNT_PLANNED);
            if (is_null($data)) {
                return null;
            }

            $this->amountPlanned = MoneyModel::of($data);
        }

        return $this->amountPlanned;
    }

    /**
     * @return null|CustomFieldsDraftCollection
     */
    public function getInterfaceInteractions()
    {
        if (is_null($this->interfaceInteractions)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(PaymentDraft::FIELD_INTERFACE_INTERACTIONS);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceInteractions = CustomFieldsDraftCollection::fromArray($data);
        }

        return $this->interfaceInteractions;
    }

    /**
     * @return null|string
     */
    public function getInterfaceId()
    {
        if (is_null($this->interfaceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentDraft::FIELD_INTERFACE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceId = (string) $data;
        }

        return $this->interfaceId;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(PaymentDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|PaymentStatusDraft
     */
    public function getPaymentStatus()
    {
        if (is_null($this->paymentStatus)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentDraft::FIELD_PAYMENT_STATUS);
            if (is_null($data)) {
                return null;
            }

            $this->paymentStatus = PaymentStatusDraftModel::of($data);
        }

        return $this->paymentStatus;
    }

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(PaymentDraft::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }

    public function setAmountAuthorized(?Money $amountAuthorized): void
    {
        $this->amountAuthorized = $amountAuthorized;
    }

    public function setAnonymousId(?string $anonymousId): void
    {
        $this->anonymousId = $anonymousId;
    }

    public function setPaymentMethodInfo(?PaymentMethodInfo $paymentMethodInfo): void
    {
        $this->paymentMethodInfo = $paymentMethodInfo;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setAuthorizedUntil(?string $authorizedUntil): void
    {
        $this->authorizedUntil = $authorizedUntil;
    }

    public function setExternalId(?string $externalId): void
    {
        $this->externalId = $externalId;
    }

    public function setTransactions(?TransactionDraftCollection $transactions): void
    {
        $this->transactions = $transactions;
    }

    public function setAmountPaid(?Money $amountPaid): void
    {
        $this->amountPaid = $amountPaid;
    }

    public function setAmountRefunded(?Money $amountRefunded): void
    {
        $this->amountRefunded = $amountRefunded;
    }

    public function setAmountPlanned(?Money $amountPlanned): void
    {
        $this->amountPlanned = $amountPlanned;
    }

    public function setInterfaceInteractions(?CustomFieldsDraftCollection $interfaceInteractions): void
    {
        $this->interfaceInteractions = $interfaceInteractions;
    }

    public function setInterfaceId(?string $interfaceId): void
    {
        $this->interfaceId = $interfaceId;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setPaymentStatus(?PaymentStatusDraft $paymentStatus): void
    {
        $this->paymentStatus = $paymentStatus;
    }

    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }
}
