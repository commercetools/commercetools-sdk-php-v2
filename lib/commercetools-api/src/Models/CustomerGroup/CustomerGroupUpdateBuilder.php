<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerGroup;

use Commercetools\Base\Builder;

/**
 * @implements Builder<CustomerGroupUpdate>
 */
final class CustomerGroupUpdateBuilder implements Builder
{
    /**
     * @var ?CustomerGroupUpdateActionCollection
     */
    private $actions;

    /**
     * @var ?int
     */
    private $version;

    public function __construct()
    {
    }

    /**
     * @return null|CustomerGroupUpdateActionCollection
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @return null|int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return $this
     */
    public function withActions(?CustomerGroupUpdateActionCollection $actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * @return $this
     */
    public function withVersion(?int $version)
    {
        $this->version = $version;

        return $this;
    }

    public function build(): CustomerGroupUpdate
    {
        return new CustomerGroupUpdateModel(
            $this->actions,
            $this->version
        );
    }

    public static function of(): CustomerGroupUpdateBuilder
    {
        return new self();
    }
}
