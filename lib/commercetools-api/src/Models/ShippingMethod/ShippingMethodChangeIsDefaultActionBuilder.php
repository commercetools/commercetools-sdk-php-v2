<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ShippingMethodChangeIsDefaultAction>
 */
final class ShippingMethodChangeIsDefaultActionBuilder implements Builder
{
    /**
     * @var ?bool
     */
    private $isDefault;

    /**
     * <p>Value to set. Only one ShippingMethod can be default in a <a href="ctp:api:type:Project">Project</a>.</p>
     *
     * @return null|bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @param ?bool $isDefault
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
            $this->isDefault
        );
    }

    public static function of(): ShippingMethodChangeIsDefaultActionBuilder
    {
        return new self();
    }
}
