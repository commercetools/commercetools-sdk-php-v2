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
 * @extends MapperSequence<ChangeAmountPlannedChange>
 * @method ChangeAmountPlannedChange current()
 * @method ChangeAmountPlannedChange at($offset)
 */
class ChangeAmountPlannedChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAmountPlannedChange $value
     * @psalm-param ChangeAmountPlannedChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAmountPlannedChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAmountPlannedChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAmountPlannedChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAmountPlannedChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAmountPlannedChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
