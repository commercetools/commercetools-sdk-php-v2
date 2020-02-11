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
 * @extends MapperSequence<ZoneRateDraft>
 * @method ZoneRateDraft current()
 * @method ZoneRateDraft at($offset)
 */
class ZoneRateDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneRateDraft $value
     * @psalm-param ZoneRateDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneRateDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneRateDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneRateDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ZoneRateDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneRateDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
