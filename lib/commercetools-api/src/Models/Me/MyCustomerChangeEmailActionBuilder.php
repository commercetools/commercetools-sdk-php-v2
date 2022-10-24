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
 * @implements Builder<MyCustomerChangeEmailAction>
 */
final class MyCustomerChangeEmailActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $email;

    /**
     * <p>New value to set.</p>
     *

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


    public function build(): MyCustomerChangeEmailAction
    {
        return new MyCustomerChangeEmailActionModel(
            $this->email
        );
    }

    public static function of(): MyCustomerChangeEmailActionBuilder
    {
        return new self();
    }
}
