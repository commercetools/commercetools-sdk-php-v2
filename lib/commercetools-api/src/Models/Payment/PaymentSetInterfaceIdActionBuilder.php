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
 * @implements Builder<PaymentSetInterfaceIdAction>
 */
final class PaymentSetInterfaceIdActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $interfaceId;

    /**
     * @return null|string
     */
    public function getInterfaceId()
    {
        return $this->interfaceId;
    }

    /**
     * @return $this
     */
    public function withInterfaceId(?string $interfaceId)
    {
        $this->interfaceId = $interfaceId;

        return $this;
    }


    public function build(): PaymentSetInterfaceIdAction
    {
        return new PaymentSetInterfaceIdActionModel(
            $this->interfaceId
        );
    }

    public static function of(): PaymentSetInterfaceIdActionBuilder
    {
        return new self();
    }
}
