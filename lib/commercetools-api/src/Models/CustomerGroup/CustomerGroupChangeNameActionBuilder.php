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
    private $action;

    /**
     * @var ?string
     */
    private $name;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

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
    public function withAction(?string $action)
    {
        $this->action = $action;

        return $this;
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
            $this->action,
            $this->name
        );
    }

    public static function of(): CustomerGroupChangeNameActionBuilder
    {
        return new self();
    }
}
