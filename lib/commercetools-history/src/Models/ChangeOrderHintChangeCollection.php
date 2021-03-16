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
 * @extends MapperSequence<ChangeOrderHintChange>
 * @method ChangeOrderHintChange current()
 * @method ChangeOrderHintChange at($offset)
 */
class ChangeOrderHintChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeOrderHintChange $value
     * @psalm-param ChangeOrderHintChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeOrderHintChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeOrderHintChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeOrderHintChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeOrderHintChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeOrderHintChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
