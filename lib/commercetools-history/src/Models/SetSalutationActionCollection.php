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
 * @extends MapperSequence<SetSalutationAction>
 * @method SetSalutationAction current()
 * @method SetSalutationAction at($offset)
 */
class SetSalutationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetSalutationAction $value
     * @psalm-param SetSalutationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetSalutationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetSalutationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetSalutationAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetSalutationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetSalutationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
