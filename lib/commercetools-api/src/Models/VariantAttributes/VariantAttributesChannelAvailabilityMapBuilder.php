<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\Builder;
use Commercetools\Base\MapperMap;
use stdClass;

/**
 * @implements Builder<VariantAttributesChannelAvailabilityMap>
 * @extends MapperMap<VariantAttributesChannelAvailabilityMap>
 */
final class VariantAttributesChannelAvailabilityMapBuilder extends MapperMap implements Builder
{
    /**
     * @psalm-return callable(string):?VariantAttributesChannelAvailabilityMap
     */
    protected function mapper()
    {
        return
            /**
             * @psalm-return ?VariantAttributesChannelAvailabilityMap
             */
            function (string $key) {
                $data = $this->get($key);
                if ($data instanceof stdClass) {
                    $data = VariantAttributesChannelAvailabilityMapModel::of($data);
                }
                return $data;
            };
    }

    /**
     * @return VariantAttributesChannelAvailabilityMap
     */
    public function build()
    {
        return new VariantAttributesChannelAvailabilityMapModel($this->toArray());
    }
}
