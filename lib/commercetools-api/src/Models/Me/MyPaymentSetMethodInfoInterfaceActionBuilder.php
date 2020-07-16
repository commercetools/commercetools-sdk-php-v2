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
 * @implements Builder<MyPaymentSetMethodInfoInterfaceAction>
 */
final class MyPaymentSetMethodInfoInterfaceActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $interface;

    /**
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


    public function build(): MyPaymentSetMethodInfoInterfaceAction
    {
        return new MyPaymentSetMethodInfoInterfaceActionModel(
            $this->interface
        );
    }

    public static function of(): MyPaymentSetMethodInfoInterfaceActionBuilder
    {
        return new self();
    }
}
