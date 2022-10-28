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
 * @implements Builder<MyCustomerSetLastNameAction>
 */
final class MyCustomerSetLastNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $lastName;

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

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
