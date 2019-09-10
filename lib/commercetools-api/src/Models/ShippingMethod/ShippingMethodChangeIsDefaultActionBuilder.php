<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ShippingMethodChangeIsDefaultAction>
 */
final class ShippingMethodChangeIsDefaultActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?bool
     */
    private $isDefault;

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
     * @return null|bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
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
    public function withIsDefault(?bool $isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    public function build(): ShippingMethodChangeIsDefaultAction
    {
        return new ShippingMethodChangeIsDefaultActionModel(
            $this->action,
            $this->isDefault
        );
    }

    public static function of(): ShippingMethodChangeIsDefaultActionBuilder
    {
        return new self();
    }
}
