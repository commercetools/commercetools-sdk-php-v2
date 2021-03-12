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
 * @extends MapperSequence<SetRestockableInDaysAction>
 * @method SetRestockableInDaysAction current()
 * @method SetRestockableInDaysAction at($offset)
 */
class SetRestockableInDaysActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetRestockableInDaysAction $value
     * @psalm-param SetRestockableInDaysAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetRestockableInDaysActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetRestockableInDaysAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetRestockableInDaysAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetRestockableInDaysAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetRestockableInDaysActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
