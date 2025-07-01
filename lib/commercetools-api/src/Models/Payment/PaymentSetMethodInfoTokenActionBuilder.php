<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodTokenBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentSetMethodInfoTokenAction>
 */
final class PaymentSetMethodInfoTokenActionBuilder implements Builder
{
    /**

     * @var null|PaymentMethodToken|PaymentMethodTokenBuilder
     */
    private $token;

    /**
     * <p>Value to set.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken()
    {
        return $this->token instanceof PaymentMethodTokenBuilder ? $this->token->build() : $this->token;
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
     * @deprecated use withToken() instead
     * @return $this
     */
    public function withTokenBuilder(?PaymentMethodTokenBuilder $token)
    {
        $this->token = $token;

        return $this;
    }

    public function build(): PaymentSetMethodInfoTokenAction
    {
        return new PaymentSetMethodInfoTokenActionModel(
            $this->token instanceof PaymentMethodTokenBuilder ? $this->token->build() : $this->token
        );
    }

    public static function of(): PaymentSetMethodInfoTokenActionBuilder
    {
        return new self();
    }
}
