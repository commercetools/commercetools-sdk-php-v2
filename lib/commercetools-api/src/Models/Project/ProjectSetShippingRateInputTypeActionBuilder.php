<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectSetShippingRateInputTypeAction>
 */
final class ProjectSetShippingRateInputTypeActionBuilder implements Builder
{
    /**
     * @var null|ShippingRateInputType|ShippingRateInputTypeBuilder
     */
    private $shippingRateInputType;

    /**
     * <p>If not set, removes existing shippingRateInputType.</p>
     *
     * @return null|ShippingRateInputType
     */
    public function getShippingRateInputType()
    {
        return $this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType;
    }

    /**
     * @param ?ShippingRateInputType $shippingRateInputType
     * @return $this
     */
    public function withShippingRateInputType(?ShippingRateInputType $shippingRateInputType)
    {
        $this->shippingRateInputType = $shippingRateInputType;

        return $this;
    }

    /**
     * @deprecated use withShippingRateInputType() instead
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
            $this->shippingRateInputType instanceof ShippingRateInputTypeBuilder ? $this->shippingRateInputType->build() : $this->shippingRateInputType
        );
    }

    public static function of(): ProjectSetShippingRateInputTypeActionBuilder
    {
        return new self();
    }
}
