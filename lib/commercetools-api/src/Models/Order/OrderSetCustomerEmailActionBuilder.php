<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSetCustomerEmailAction>
 */
final class OrderSetCustomerEmailActionBuilder implements Builder
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
     * @param ?string $email
     * @return $this
     */
    public function withEmail(?string $email)
    {
        $this->email = $email;

        return $this;
    }


    public function build(): OrderSetCustomerEmailAction
    {
        return new OrderSetCustomerEmailActionModel(
            $this->email
        );
    }

    public static function of(): OrderSetCustomerEmailActionBuilder
    {
        return new self();
    }
}
