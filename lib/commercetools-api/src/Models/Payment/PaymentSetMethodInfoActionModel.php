<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodTokenModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentSetMethodInfoActionModel extends JsonObjectModel implements PaymentSetMethodInfoAction
{
    public const DISCRIMINATOR_VALUE = 'setMethodInfo';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $paymentInterface;

    /**
     *
     * @var ?string
     */
    protected $method;

    /**
     *
     * @var ?LocalizedString
     */
    protected $name;

    /**
     *
     * @var ?PaymentMethodToken
     */
    protected $token;

    /**
     *
     * @var ?string
     */
    protected $interfaceAccount;

    /**
     *
     * @var ?CustomFieldsDraft
     */
    protected $custom;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $paymentInterface = null,
        ?string $method = null,
        ?LocalizedString $name = null,
        ?PaymentMethodToken $token = null,
        ?string $interfaceAccount = null,
        ?CustomFieldsDraft $custom = null,
        ?string $action = null
    ) {
        $this->paymentInterface = $paymentInterface;
        $this->method = $method;
        $this->name = $name;
        $this->token = $token;
        $this->interfaceAccount = $interfaceAccount;
        $this->custom = $custom;
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
     * <p>Payment service that processes the Payment—for example, a PSP.
     * The combination of <code>paymentInterface</code> and the <code>interfaceId</code> of a Payment must be unique.
     * The value cannot be modified after it is set.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoInterface</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoInterfaceSetMessage">PaymentMethodInfoInterfaceSet</a> Message.</p>
     *
     *
     * @return null|string
     */
    public function getPaymentInterface()
    {
        if (is_null($this->paymentInterface)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_PAYMENT_INTERFACE);
            if (is_null($data)) {
                return null;
            }
            $this->paymentInterface = (string) $data;
        }

        return $this->paymentInterface;
    }

    /**
     * <p>Payment method to use—for example, a credit card or direct debit.
     * If empty, any existing value will be removed.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoMethod</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoMethodSetMessage">PaymentMethodInfoMethodSet</a> Message.</p>
     *
     *
     * @return null|string
     */
    public function getMethod()
    {
        if (is_null($this->method)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_METHOD);
            if (is_null($data)) {
                return null;
            }
            $this->method = (string) $data;
        }

        return $this->method;
    }

    /**
     * <p>Name of the Payment Method.
     * If empty, any existing value will be removed.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoName</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoNameSetMessage">PaymentMethodInfoNameSet</a> Message.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Tokenized payment method information of the Payment Method.
     * If empty, any existing value will be removed.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoToken</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoTokenSetMessage">PaymentMethodInfoTokenSet</a> Message.</p>
     *
     *
     * @return null|PaymentMethodToken
     */
    public function getToken()
    {
        if (is_null($this->token)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TOKEN);
            if (is_null($data)) {
                return null;
            }

            $this->token = PaymentMethodTokenModel::of($data);
        }

        return $this->token;
    }

    /**
     * <p>Account or instance of the payment interface when multiple accounts are used (per interface).
     * If empty, any existing value will be removed.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoInterfaceAccount</code> action and will generate the <a href="ctp:api:type:PaymentMethodInfoInterfaceAccountSetMessage">PaymentMethodInfoInterfaceAccountSet</a> Message.</p>
     *
     *
     * @return null|string
     */
    public function getInterfaceAccount()
    {
        if (is_null($this->interfaceAccount)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERFACE_ACCOUNT);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceAccount = (string) $data;
        }

        return $this->interfaceAccount;
    }

    /**
     * <p>Custom Fields for the PaymentMethodInfo.
     * If not provided, any existing Custom Fields will be removed, including the Custom Type.</p>
     * <p>Setting this field is equivalent to the <code>setMethodInfoCustomType</code> and <code>setMethodInfoCustomField</code> actions, and will generate the following Messages:</p>
     * <ul>
     * <li>Adding or updating a Custom Type on a Payment Method Info generates the <a href="ctp:api:type:PaymentMethodInfoCustomTypeSetMessage">PaymentMethodInfoCustomTypeSet</a> Message, removing one generates the <a href="ctp:api:type:PaymentMethodInfoCustomTypeRemovedMessage">PaymentMethodInfoCustomTypeRemoved</a> Message.</li>
     * <li>Adding a Custom Field to a Payment generates the <a href="ctp:api:type:PaymentMethodInfoCustomFieldAddedMessage">PaymentMethodInfoCustomFieldAdded</a> Message, removing one generates the <a href="ctp:api:type:PaymentMethodInfoCustomFieldRemovedMessage">PaymentMethodInfoCustomFieldRemoved</a> Message, and updating an existing one generates the <a href="ctp:api:type:PaymentMethodInfoCustomFieldChangedMessage">PaymentMethodInfoCustomFieldChanged</a> Message.</li>
     * </ul>
     *
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }


    /**
     * @param ?string $paymentInterface
     */
    public function setPaymentInterface(?string $paymentInterface): void
    {
        $this->paymentInterface = $paymentInterface;
    }

    /**
     * @param ?string $method
     */
    public function setMethod(?string $method): void
    {
        $this->method = $method;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?PaymentMethodToken $token
     */
    public function setToken(?PaymentMethodToken $token): void
    {
        $this->token = $token;
    }

    /**
     * @param ?string $interfaceAccount
     */
    public function setInterfaceAccount(?string $interfaceAccount): void
    {
        $this->interfaceAccount = $interfaceAccount;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }
}
