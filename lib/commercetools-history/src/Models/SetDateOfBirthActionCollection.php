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
 * @extends MapperSequence<SetDateOfBirthAction>
 * @method SetDateOfBirthAction current()
 * @method SetDateOfBirthAction at($offset)
 */
class SetDateOfBirthActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetDateOfBirthAction $value
     * @psalm-param SetDateOfBirthAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetDateOfBirthActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetDateOfBirthAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetDateOfBirthAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetDateOfBirthAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetDateOfBirthActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
