<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * @param ?string $lastName
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
