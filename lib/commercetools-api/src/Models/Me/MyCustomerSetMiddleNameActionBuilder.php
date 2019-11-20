<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

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
     * @return null|string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
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
