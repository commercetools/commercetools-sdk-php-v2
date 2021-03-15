<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ParcelActionValue>
 * @method ParcelActionValue current()
 * @method ParcelActionValue at($offset)
 */
class ParcelActionValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelActionValue $value
     * @psalm-param ParcelActionValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelActionValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelActionValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelActionValue
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelActionValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelActionValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
