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
 * @extends MapperSequence<ChangeDescriptionAction>
 * @method ChangeDescriptionAction current()
 * @method ChangeDescriptionAction at($offset)
 */
class ChangeDescriptionActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeDescriptionAction $value
     * @psalm-param ChangeDescriptionAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeDescriptionActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeDescriptionAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeDescriptionAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeDescriptionAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeDescriptionActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
