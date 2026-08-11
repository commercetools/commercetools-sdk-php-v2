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
 * @extends MapperSequence<VariantAttributesAvailability>
 * @method VariantAttributesAvailability current()
 * @method VariantAttributesAvailability end()
 * @method VariantAttributesAvailability at($offset)
 */
class VariantAttributesAvailabilityCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantAttributesAvailability $value
     * @psalm-param VariantAttributesAvailability|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantAttributesAvailabilityCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantAttributesAvailability) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantAttributesAvailability
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantAttributesAvailability {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantAttributesAvailability $data */
                $data = VariantAttributesAvailabilityModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
