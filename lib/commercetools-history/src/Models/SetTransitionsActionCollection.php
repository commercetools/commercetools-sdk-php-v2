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
 * @extends MapperSequence<SetTransitionsAction>
 * @method SetTransitionsAction current()
 * @method SetTransitionsAction at($offset)
 */
class SetTransitionsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTransitionsAction $value
     * @psalm-param SetTransitionsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTransitionsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTransitionsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTransitionsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetTransitionsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTransitionsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
