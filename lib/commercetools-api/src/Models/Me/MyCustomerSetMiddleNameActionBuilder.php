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
 * @implements Builder<MyCustomerSetMiddleNameAction>
 */
final class MyCustomerSetMiddleNameActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $middleName;

    /**
     * <p>Value to set.
     * If empty, any existing value is removed.</p>
     *

     * @return null|string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param ?string $middleName
     * @return $this
     */
    public function withMiddleName(?string $middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }


    public function build(): MyCustomerSetMiddleNameAction
    {
        return new MyCustomerSetMiddleNameActionModel(
            $this->middleName
        );
    }

    public static function of(): MyCustomerSetMiddleNameActionBuilder
    {
        return new self();
    }
}
