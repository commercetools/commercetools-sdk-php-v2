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
 * @extends MapperSequence<UnknownAction>
 * @method UnknownAction current()
 * @method UnknownAction at($offset)
 */
class UnknownActionCollection extends MapperSequence
{
    /**
     * @psalm-assert UnknownAction $value
     * @psalm-param UnknownAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UnknownActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof UnknownAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UnknownAction
     */
    protected function mapper()
    {
        return function (int $index): ?UnknownAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = UnknownActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
