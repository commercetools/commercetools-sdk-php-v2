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
 * @implements Builder<CartSetCustomerEmailAction>
 */
final class CartSetCustomerEmailActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $email;

    /**
     * @return null|string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }


    public function build(): CartSetCustomerEmailAction
    {
        return new CartSetCustomerEmailActionModel(
            $this->email
        );
    }

    public static function of(): CartSetCustomerEmailActionBuilder
    {
        return new self();
    }
}
