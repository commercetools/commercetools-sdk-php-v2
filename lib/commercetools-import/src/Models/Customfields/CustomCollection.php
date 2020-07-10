<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Customfields;

use Shared\Base\MapperSequence;
use Shared\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Custom>
 * @method Custom current()
 * @method Custom at($offset)
 */
class CustomCollection extends MapperSequence
{
    /**
     * @psalm-assert Custom $value
     * @psalm-param Custom|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomCollection
     */
    public function add($value)
    {
        if (!$value instanceof Custom) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Custom
     */
    protected function mapper()
    {
        return function (int $index): ?Custom {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
