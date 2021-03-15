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
 * @extends MapperSequence<AddReturnInfoAction>
 * @method AddReturnInfoAction current()
 * @method AddReturnInfoAction at($offset)
 */
class AddReturnInfoActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddReturnInfoAction $value
     * @psalm-param AddReturnInfoAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddReturnInfoActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddReturnInfoAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddReturnInfoAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddReturnInfoAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddReturnInfoActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
