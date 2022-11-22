<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Payment;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<PaymentSetMethodInfoInterfaceAction>
 */
final class PaymentSetMethodInfoInterfaceActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $interface;

    /**
     * <p>Value to set.
     * Once set, the <code>paymentInterface</code> of the <code>paymentMethodInfo</code> cannot be changed.</p>
     *

     * @return null|string
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * @param ?string $interface
     * @return $this
     */
    public function withInterface(?string $interface)
    {
        $this->interface = $interface;

        return $this;
    }


    public function build(): PaymentSetMethodInfoInterfaceAction
    {
        return new PaymentSetMethodInfoInterfaceActionModel(
            $this->interface
        );
    }

    public static function of(): PaymentSetMethodInfoInterfaceActionBuilder
    {
        return new self();
    }
}
