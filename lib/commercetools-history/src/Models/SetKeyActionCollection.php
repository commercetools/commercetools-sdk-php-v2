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
 * @extends MapperSequence<SetKeyAction>
 * @method SetKeyAction current()
 * @method SetKeyAction at($offset)
 */
class SetKeyActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetKeyAction $value
     * @psalm-param SetKeyAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetKeyActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetKeyAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetKeyAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetKeyAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetKeyActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
