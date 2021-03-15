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
 * @extends MapperSequence<ChangeLocalizedNameAction>
 * @method ChangeLocalizedNameAction current()
 * @method ChangeLocalizedNameAction at($offset)
 */
class ChangeLocalizedNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLocalizedNameAction $value
     * @psalm-param ChangeLocalizedNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLocalizedNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLocalizedNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLocalizedNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLocalizedNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLocalizedNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
