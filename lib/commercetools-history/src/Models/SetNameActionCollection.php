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
 * @extends MapperSequence<SetNameAction>
 * @method SetNameAction current()
 * @method SetNameAction at($offset)
 */
class SetNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetNameAction $value
     * @psalm-param SetNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
