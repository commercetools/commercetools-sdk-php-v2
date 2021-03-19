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
 * @extends MapperSequence<SetMethodInfoMethodChange>
 * @method SetMethodInfoMethodChange current()
 * @method SetMethodInfoMethodChange at($offset)
 */
class SetMethodInfoMethodChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMethodInfoMethodChange $value
     * @psalm-param SetMethodInfoMethodChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoMethodChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoMethodChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoMethodChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetMethodInfoMethodChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMethodInfoMethodChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
