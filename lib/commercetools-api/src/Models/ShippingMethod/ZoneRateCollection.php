<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ZoneRate>
 *
 * @method ZoneRate current()
 * @method ZoneRate at($offset)
 */
class ZoneRateCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneRate $value
     * @psalm-param ZoneRate|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ZoneRateCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneRate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneRate
     */
    protected function mapper()
    {
        return function (int $index): ?ZoneRate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneRateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
