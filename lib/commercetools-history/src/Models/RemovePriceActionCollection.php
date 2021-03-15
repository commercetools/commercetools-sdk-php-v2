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
 * @extends MapperSequence<RemovePriceAction>
 * @method RemovePriceAction current()
 * @method RemovePriceAction at($offset)
 */
class RemovePriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemovePriceAction $value
     * @psalm-param RemovePriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemovePriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemovePriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemovePriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemovePriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemovePriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
