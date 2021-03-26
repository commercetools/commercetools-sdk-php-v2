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
 * @extends MapperSequence<ChangeOrderStateChange>
 * @method ChangeOrderStateChange current()
 * @method ChangeOrderStateChange at($offset)
 */
class ChangeOrderStateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeOrderStateChange $value
     * @psalm-param ChangeOrderStateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeOrderStateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeOrderStateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeOrderStateChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeOrderStateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeOrderStateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
