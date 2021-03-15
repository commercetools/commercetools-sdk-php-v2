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
 * @extends MapperSequence<SetAuthorNameAction>
 * @method SetAuthorNameAction current()
 * @method SetAuthorNameAction at($offset)
 */
class SetAuthorNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAuthorNameAction $value
     * @psalm-param SetAuthorNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAuthorNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAuthorNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAuthorNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAuthorNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAuthorNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
