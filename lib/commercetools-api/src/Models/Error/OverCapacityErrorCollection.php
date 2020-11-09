<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OverCapacityError>
 * @method OverCapacityError current()
 * @method OverCapacityError at($offset)
 */
class OverCapacityErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert OverCapacityError $value
     * @psalm-param OverCapacityError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OverCapacityErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof OverCapacityError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OverCapacityError
     */
    protected function mapper()
    {
        return function (int $index): ?OverCapacityError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OverCapacityErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
