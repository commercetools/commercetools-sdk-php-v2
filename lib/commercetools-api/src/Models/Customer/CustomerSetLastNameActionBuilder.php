<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerSetLastNameAction>
 */
final class CustomerSetLastNameActionBuilder implements Builder
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

    public function build(): CustomerSetLastNameAction
    {
        return new CustomerSetLastNameActionModel(
            $this->lastName
        );
    }

    public static function of(): CustomerSetLastNameActionBuilder
    {
        return new self();
    }
}
