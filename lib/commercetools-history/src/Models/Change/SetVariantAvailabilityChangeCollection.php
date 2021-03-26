<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetVariantAvailabilityChange>
 * @method SetVariantAvailabilityChange current()
 * @method SetVariantAvailabilityChange at($offset)
 */
class SetVariantAvailabilityChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetVariantAvailabilityChange $value
     * @psalm-param SetVariantAvailabilityChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetVariantAvailabilityChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetVariantAvailabilityChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetVariantAvailabilityChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetVariantAvailabilityChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetVariantAvailabilityChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
