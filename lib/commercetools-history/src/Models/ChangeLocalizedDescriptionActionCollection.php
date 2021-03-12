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
 * @extends MapperSequence<ChangeLocalizedDescriptionAction>
 * @method ChangeLocalizedDescriptionAction current()
 * @method ChangeLocalizedDescriptionAction at($offset)
 */
class ChangeLocalizedDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeLocalizedDescriptionAction $value
     * @psalm-param ChangeLocalizedDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeLocalizedDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeLocalizedDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeLocalizedDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeLocalizedDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeLocalizedDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
