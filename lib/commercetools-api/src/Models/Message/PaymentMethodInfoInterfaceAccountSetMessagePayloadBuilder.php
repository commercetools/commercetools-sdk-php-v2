<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentMethodInfoInterfaceAccountSetMessagePayload>
 */
final class PaymentMethodInfoInterfaceAccountSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $interfaceAccount;

    /**

     * @var ?string
     */
    private $oldInterfaceAccount;

    /**
     * <p>Interface account of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAccountAction">Set MethodInfo InterfaceAccount</a> update action.</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount()
    {
        return $this->interfaceAccount;
    }

    /**
     * <p>Interface account of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAccountAction">Set MethodInfo InterfaceAccount</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldInterfaceAccount()
    {
        return $this->oldInterfaceAccount;
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
     * @param ?string $oldInterfaceAccount
     * @return $this
     */
    public function withOldInterfaceAccount(?string $oldInterfaceAccount)
    {
        $this->oldInterfaceAccount = $oldInterfaceAccount;

        return $this;
    }


    public function build(): PaymentMethodInfoInterfaceAccountSetMessagePayload
    {
        return new PaymentMethodInfoInterfaceAccountSetMessagePayloadModel(
            $this->interfaceAccount,
            $this->oldInterfaceAccount
        );
    }

    public static function of(): PaymentMethodInfoInterfaceAccountSetMessagePayloadBuilder
    {
        return new self();
    }
}
