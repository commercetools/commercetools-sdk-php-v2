<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyCustomerSetLastNameAction>
 */
final class MyCustomerSetLastNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $lastName;

    /**
     * @return null|string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return $this
     */
    public function withLastName(?string $lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function build(): MyCustomerSetLastNameAction
    {
        return new MyCustomerSetLastNameActionModel(
            $this->lastName
        );
    }

    public static function of(): MyCustomerSetLastNameActionBuilder
    {
        return new self();
    }
}
