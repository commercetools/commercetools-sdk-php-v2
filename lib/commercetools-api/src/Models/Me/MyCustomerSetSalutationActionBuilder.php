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
 * @implements Builder<MyCustomerSetSalutationAction>
 */
final class MyCustomerSetSalutationActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $salutation;

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param ?string $salutation
     * @return $this
     */
    public function withSalutation(?string $salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }


    public function build(): MyCustomerSetSalutationAction
    {
        return new MyCustomerSetSalutationActionModel(
            $this->salutation
        );
    }

    public static function of(): MyCustomerSetSalutationActionBuilder
    {
        return new self();
    }
}
