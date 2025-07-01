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
 * @implements Builder<PaymentMethodInfoInterfaceSetMessagePayload>
 */
final class PaymentMethodInfoInterfaceSetMessagePayloadBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $interface;

    /**

     * @var ?string
     */
    private $oldInterface;

    /**
     * <p>Payment interface of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAction">Set MethodInfo Interface</a> update action.</p>
     *

     * @return null|string
     */
    public function getInterface()
    {
        return $this->interface;
    }

    /**
     * <p>Payment interface of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAction">Set MethodInfo Interface</a> update action.</p>
     *

     * @return null|string
     */
    public function getOldInterface()
    {
        return $this->oldInterface;
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

    /**
     * @param ?string $oldInterface
     * @return $this
     */
    public function withOldInterface(?string $oldInterface)
    {
        $this->oldInterface = $oldInterface;

        return $this;
    }


    public function build(): PaymentMethodInfoInterfaceSetMessagePayload
    {
        return new PaymentMethodInfoInterfaceSetMessagePayloadModel(
            $this->interface,
            $this->oldInterface
        );
    }

    public static function of(): PaymentMethodInfoInterfaceSetMessagePayloadBuilder
    {
        return new self();
    }
}
