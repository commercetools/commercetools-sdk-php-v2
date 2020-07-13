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
 * @implements Builder<CustomerSetFirstNameAction>
 */
final class CustomerSetFirstNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $firstName;

    /**
     * @return null|string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param ?string $firstName
     * @return $this
     */
    public function withFirstName(?string $firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }


    public function build(): CustomerSetFirstNameAction
    {
        return new CustomerSetFirstNameActionModel(
            $this->firstName
        );
    }

    public static function of(): CustomerSetFirstNameActionBuilder
    {
        return new self();
    }
}
