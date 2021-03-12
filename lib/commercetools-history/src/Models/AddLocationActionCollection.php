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
 * @extends MapperSequence<AddLocationAction>
 * @method AddLocationAction current()
 * @method AddLocationAction at($offset)
 */
class AddLocationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddLocationAction $value
     * @psalm-param AddLocationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddLocationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddLocationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddLocationAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddLocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddLocationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
