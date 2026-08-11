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
 * @extends MapperSequence<VariantAttributesChannelAvailability>
 * @method VariantAttributesChannelAvailability current()
 * @method VariantAttributesChannelAvailability end()
 * @method VariantAttributesChannelAvailability at($offset)
 */
class VariantAttributesChannelAvailabilityCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantAttributesChannelAvailability $value
     * @psalm-param VariantAttributesChannelAvailability|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantAttributesChannelAvailabilityCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantAttributesChannelAvailability) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantAttributesChannelAvailability
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantAttributesChannelAvailability {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantAttributesChannelAvailability $data */
                $data = VariantAttributesChannelAvailabilityModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
