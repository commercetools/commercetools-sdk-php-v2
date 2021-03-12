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
 * @extends MapperSequence<SetIsValidAction>
 * @method SetIsValidAction current()
 * @method SetIsValidAction at($offset)
 */
class SetIsValidActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetIsValidAction $value
     * @psalm-param SetIsValidAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetIsValidActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetIsValidAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetIsValidAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetIsValidAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetIsValidActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
