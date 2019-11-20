<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerSetMiddleNameAction>
 */
final class CustomerSetMiddleNameActionBuilder implements Builder
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

    public function build(): CustomerSetMiddleNameAction
    {
        return new CustomerSetMiddleNameActionModel(
            $this->middleName
        );
    }

    public static function of(): CustomerSetMiddleNameActionBuilder
    {
        return new self();
    }
}
