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
 * @extends MapperSequence<RemoveAddressAction>
 * @method RemoveAddressAction current()
 * @method RemoveAddressAction at($offset)
 */
class RemoveAddressActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveAddressAction $value
     * @psalm-param RemoveAddressAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveAddressActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveAddressAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveAddressAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveAddressAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveAddressActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
