<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DeliveryParcel>
 * @method DeliveryParcel current()
 * @method DeliveryParcel at($offset)
 */
class DeliveryParcelCollection extends MapperSequence
{
    /**
     * @psalm-assert DeliveryParcel $value
     * @psalm-param DeliveryParcel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DeliveryParcelCollection
     */
    public function add($value)
    {
        if (!$value instanceof DeliveryParcel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DeliveryParcel
     */
    protected function mapper()
    {
        return function (int $index): ?DeliveryParcel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DeliveryParcel $data */
                $data = DeliveryParcelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
