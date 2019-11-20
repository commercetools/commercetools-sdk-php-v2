<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerGroupChangeNameAction>
 */
final class CustomerGroupChangeNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    public function build(): CustomerGroupChangeNameAction
    {
        return new CustomerGroupChangeNameActionModel(
            $this->name
        );
    }

    public static function of(): CustomerGroupChangeNameActionBuilder
    {
        return new self();
    }
}
