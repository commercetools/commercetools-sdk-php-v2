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
 * @extends MapperSequence<ChangePriceAction>
 * @method ChangePriceAction current()
 * @method ChangePriceAction at($offset)
 */
class ChangePriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangePriceAction $value
     * @psalm-param ChangePriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangePriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
