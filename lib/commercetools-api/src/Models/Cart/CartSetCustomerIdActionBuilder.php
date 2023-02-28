<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetCustomerIdAction>
 */
final class CartSetCustomerIdActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $customerId;

    /**
     * <p><code>id</code> of an existing <a href="ctp:api:type:Customer">Customer</a>. If empty, any value is removed.</p>
     *

     * @return null|string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param ?string $customerId
     * @return $this
     */
    public function withCustomerId(?string $customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }


    public function build(): CartSetCustomerIdAction
    {
        return new CartSetCustomerIdActionModel(
            $this->customerId
        );
    }

    public static function of(): CartSetCustomerIdActionBuilder
    {
        return new self();
    }
}
