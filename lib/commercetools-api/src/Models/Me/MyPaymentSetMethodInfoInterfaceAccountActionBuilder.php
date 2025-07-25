<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<MyPaymentSetMethodInfoInterfaceAccountAction>
 */
final class MyPaymentSetMethodInfoInterfaceAccountActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $interfaceAccount;

    /**
     * <p>New account or instance of the payment interface.
     * If empty, any existing value will be removed.</p>
     *

     * @return null|string
     */
    public function getInterfaceAccount()
    {
        return $this->interfaceAccount;
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


    public function build(): MyPaymentSetMethodInfoInterfaceAccountAction
    {
        return new MyPaymentSetMethodInfoInterfaceAccountActionModel(
            $this->interfaceAccount
        );
    }

    public static function of(): MyPaymentSetMethodInfoInterfaceAccountActionBuilder
    {
        return new self();
    }
}
