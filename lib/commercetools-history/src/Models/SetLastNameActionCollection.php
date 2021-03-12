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
 * @extends MapperSequence<SetLastNameAction>
 * @method SetLastNameAction current()
 * @method SetLastNameAction at($offset)
 */
class SetLastNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLastNameAction $value
     * @psalm-param SetLastNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLastNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLastNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLastNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLastNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLastNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
