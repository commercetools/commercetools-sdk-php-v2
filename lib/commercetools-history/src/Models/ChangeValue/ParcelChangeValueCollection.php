<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ParcelChangeValue>
 * @method ParcelChangeValue current()
 * @method ParcelChangeValue at($offset)
 */
class ParcelChangeValueCollection extends MapperSequence
{
    /**
     * @psalm-assert ParcelChangeValue $value
     * @psalm-param ParcelChangeValue|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ParcelChangeValueCollection
     */
    public function add($value)
    {
        if (!$value instanceof ParcelChangeValue) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ParcelChangeValue
     */
    protected function mapper()
    {
        return function (int $index): ?ParcelChangeValue {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ParcelChangeValueModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
