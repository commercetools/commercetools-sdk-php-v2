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
 * @extends MapperSequence<AddPriceAction>
 * @method AddPriceAction current()
 * @method AddPriceAction at($offset)
 */
class AddPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddPriceAction $value
     * @psalm-param AddPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
