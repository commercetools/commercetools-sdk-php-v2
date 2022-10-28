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
 * @implements Builder<MyCustomerSetFirstNameAction>
 */
final class MyCustomerSetFirstNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $firstName;

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

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


    public function build(): MyCustomerSetFirstNameAction
    {
        return new MyCustomerSetFirstNameActionModel(
            $this->firstName
        );
    }

    public static function of(): MyCustomerSetFirstNameActionBuilder
    {
        return new self();
    }
}
