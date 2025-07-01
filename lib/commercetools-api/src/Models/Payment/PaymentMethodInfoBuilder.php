<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringBuilder;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodTokenBuilder;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodInfo>
 */
final class PaymentMethodInfoBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $paymentInterface;

    /**

     * @var ?string
     */
    private $method;

    /**

     * @var null|LocalizedString|LocalizedStringBuilder
     */
    private $name;

    /**

     * @var null|PaymentMethodToken|PaymentMethodTokenBuilder
     */
    private $token;

    /**

     * @var ?string
     */
    private $interfaceAccount;

    /**

     * @var null|CustomFields|CustomFieldsBuilder
     */
    private $custom;

    /**
     * <p>Payment service that processes the Payment—for example, a PSP.
     * The combination of <code>paymentInterface</code> and the <code>interfaceId</code> of a Payment is unique.</p>
     *

     * @return null|string
     */
    public function getPaymentInterface()
    {
        return $this->paymentInterface;
    }

    /**
     * <p>Payment method used—for example, a credit card or cash advance.</p>
     *

     * @return null|string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * <p>Name of the Payment Method.</p>
     *

     * @return null|LocalizedString
     */
    public function getName()
    {
        return $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name;
    }

    /**
     * <p>Tokenized representation of the Payment Method used by the payment interface.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken()
    {
        return $this->token instanceof PaymentMethodTokenBuilder ? $this->token->build() : $this->token;
    }

    /**
     * <p>Account or instance of the payment interface when multiple accounts are used (per interface).</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount()
    {
        return $this->interfaceAccount;
    }

    /**
     * <p>Custom Fields of the PaymentMethodInfo.</p>
     *

     * @return null|CustomFields
     */
    public function getCustom()
    {
        return $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom;
    }

    /**
     * @param ?string $paymentInterface
     * @return $this
     */
    public function withPaymentInterface(?string $paymentInterface)
    {
        $this->paymentInterface = $paymentInterface;

        return $this;
    }

    /**
     * @param ?string $method
     * @return $this
     */
    public function withMethod(?string $method)
    {
        $this->method = $method;

        return $this;
    }

    /**
     * @param ?LocalizedString $name
     * @return $this
     */
    public function withName(?LocalizedString $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?PaymentMethodToken $token
     * @return $this
     */
    public function withToken(?PaymentMethodToken $token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @param ?string $interfaceAccount
     * @return $this
     */
    public function withInterfaceAccount(?string $interfaceAccount)
    {
        $this->interfaceAccount = $interfaceAccount;

        return $this;
    }

    /**
     * @param ?CustomFields $custom
     * @return $this
     */
    public function withCustom(?CustomFields $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * @deprecated use withName() instead
     * @return $this
     */
    public function withNameBuilder(?LocalizedStringBuilder $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @deprecated use withToken() instead
     * @return $this
     */
    public function withTokenBuilder(?PaymentMethodTokenBuilder $token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * @deprecated use withCustom() instead
     * @return $this
     */
    public function withCustomBuilder(?CustomFieldsBuilder $custom)
    {
        $this->custom = $custom;

        return $this;
    }

    public function build(): PaymentMethodInfo
    {
        return new PaymentMethodInfoModel(
            $this->paymentInterface,
            $this->method,
            $this->name instanceof LocalizedStringBuilder ? $this->name->build() : $this->name,
            $this->token instanceof PaymentMethodTokenBuilder ? $this->token->build() : $this->token,
            $this->interfaceAccount,
            $this->custom instanceof CustomFieldsBuilder ? $this->custom->build() : $this->custom
        );
    }

    public static function of(): PaymentMethodInfoBuilder
    {
        return new self();
    }
}
