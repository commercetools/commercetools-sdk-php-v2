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
 * @extends MapperSequence<SetFirstNameAction>
 * @method SetFirstNameAction current()
 * @method SetFirstNameAction at($offset)
 */
class SetFirstNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetFirstNameAction $value
     * @psalm-param SetFirstNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetFirstNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetFirstNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetFirstNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetFirstNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetFirstNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
