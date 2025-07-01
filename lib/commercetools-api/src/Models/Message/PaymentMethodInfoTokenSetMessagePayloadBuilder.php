<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\PaymentMethod\PaymentMethodToken;
use Commercetools\Api\Models\PaymentMethod\PaymentMethodTokenBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodInfoTokenSetMessagePayload>
 */
final class PaymentMethodInfoTokenSetMessagePayloadBuilder implements Builder
{
    /**

     * @var null|PaymentMethodToken|PaymentMethodTokenBuilder
     */
    private $token;

    /**

     * @var null|PaymentMethodToken|PaymentMethodTokenBuilder
     */
    private $oldToken;

    /**
     * <p>Token of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoTokenAction">Set MethodInfo Token</a> update action.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getToken()
    {
        return $this->token instanceof PaymentMethodTokenBuilder ? $this->token->build() : $this->token;
    }

    /**
     * <p>Token of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoTokenAction">Set MethodInfo Token</a> update action.</p>
     *

     * @return null|PaymentMethodToken
     */
    public function getOldToken()
    {
        return $this->oldToken instanceof PaymentMethodTokenBuilder ? $this->oldToken->build() : $this->oldToken;
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
     * @param ?PaymentMethodToken $oldToken
     * @return $this
     */
    public function withOldToken(?PaymentMethodToken $oldToken)
    {
        $this->oldToken = $oldToken;

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
     * @deprecated use withOldToken() instead
     * @return $this
     */
    public function withOldTokenBuilder(?PaymentMethodTokenBuilder $oldToken)
    {
        $this->oldToken = $oldToken;

        return $this;
    }

    public function build(): PaymentMethodInfoTokenSetMessagePayload
    {
        return new PaymentMethodInfoTokenSetMessagePayloadModel(
            $this->token instanceof PaymentMethodTokenBuilder ? $this->token->build() : $this->token,
            $this->oldToken instanceof PaymentMethodTokenBuilder ? $this->oldToken->build() : $this->oldToken
        );
    }

    public static function of(): PaymentMethodInfoTokenSetMessagePayloadBuilder
    {
        return new self();
    }
}
