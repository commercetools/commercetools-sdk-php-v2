<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\VariantAttributes;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantAttributesChannelAvailabilityMap>
 * @method VariantAttributesChannelAvailabilityMap current()
 * @method VariantAttributesChannelAvailabilityMap end()
 * @method VariantAttributesChannelAvailabilityMap at($offset)
 */
class VariantAttributesChannelAvailabilityMapCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantAttributesChannelAvailabilityMap $value
     * @psalm-param VariantAttributesChannelAvailabilityMap|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantAttributesChannelAvailabilityMapCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantAttributesChannelAvailabilityMap) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantAttributesChannelAvailabilityMap
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantAttributesChannelAvailabilityMap {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantAttributesChannelAvailabilityMap $data */
                $data = VariantAttributesChannelAvailabilityMapModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
