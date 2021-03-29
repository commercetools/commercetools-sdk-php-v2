<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Parcel>
 * @method Parcel current()
 * @method Parcel at($offset)
 */
class ParcelCollection extends MapperSequence
{
    /**
     * @psalm-assert Parcel $value
     * @psalm-param Parcel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelCollection
     */
    public function add($value)
    {
        if (!$value instanceof Parcel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Parcel
     */
    protected function mapper()
    {
        return function (int $index): ?Parcel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
