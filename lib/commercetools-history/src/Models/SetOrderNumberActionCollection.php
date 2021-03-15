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
 * @extends MapperSequence<SetOrderNumberAction>
 * @method SetOrderNumberAction current()
 * @method SetOrderNumberAction at($offset)
 */
class SetOrderNumberActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetOrderNumberAction $value
     * @psalm-param SetOrderNumberAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderNumberActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderNumberAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderNumberAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetOrderNumberAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetOrderNumberActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
