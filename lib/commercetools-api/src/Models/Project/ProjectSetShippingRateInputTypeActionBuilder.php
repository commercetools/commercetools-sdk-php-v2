<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProjectSetShippingRateInputTypeAction>
 */
final class ProjectSetShippingRateInputTypeActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ShippingRateInputType|?ShippingRateInputTypeBuilder
     */
    private $shippingRateInputType;

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
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        return $this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType;
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
    public function withShippingRateInputType(?ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }

    /**
     * @return $this
     */
    public function withShippingRateInputTypeBuilder(?ShippingRateInputTypeBuilder $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }

    public function build(): ProjectSetShippingRateInputTypeAction
    {
        return new ProjectSetShippingRateInputTypeActionModel(
            $this->action,
            ($this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType)
        );
    }

    public static function of(): ProjectSetShippingRateInputTypeActionBuilder
    {
        return new self();
    }
}
