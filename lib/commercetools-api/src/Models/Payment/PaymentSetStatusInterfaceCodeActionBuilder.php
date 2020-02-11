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
 * @implements Builder<PaymentSetStatusInterfaceCodeAction>
 */
final class PaymentSetStatusInterfaceCodeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $interfaceCode;

    /**
     * @return null|string
     */
    public function getInterfaceCode()
    {
        return $this->interfaceCode;
    }

    /**
     * @return $this
     */
    public function withInterfaceCode(?string $interfaceCode)
    {
        $this->interfaceCode = $interfaceCode;

        return $this;
    }


    public function build(): PaymentSetStatusInterfaceCodeAction
    {
        return new PaymentSetStatusInterfaceCodeActionModel(
            $this->interfaceCode
        );
    }

    public static function of(): PaymentSetStatusInterfaceCodeActionBuilder
    {
        return new self();
    }
}
