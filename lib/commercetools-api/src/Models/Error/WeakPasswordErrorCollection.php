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
 * @extends MapperSequence<WeakPasswordError>
 * @method WeakPasswordError current()
 * @method WeakPasswordError at($offset)
 */
class WeakPasswordErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert WeakPasswordError $value
     * @psalm-param WeakPasswordError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return WeakPasswordErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof WeakPasswordError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?WeakPasswordError
     */
    protected function mapper()
    {
        return function (int $index): ?WeakPasswordError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = WeakPasswordErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
