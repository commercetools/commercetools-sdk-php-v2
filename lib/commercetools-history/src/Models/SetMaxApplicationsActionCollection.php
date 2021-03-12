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
 * @extends MapperSequence<SetMaxApplicationsAction>
 * @method SetMaxApplicationsAction current()
 * @method SetMaxApplicationsAction at($offset)
 */
class SetMaxApplicationsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMaxApplicationsAction $value
     * @psalm-param SetMaxApplicationsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMaxApplicationsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMaxApplicationsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMaxApplicationsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMaxApplicationsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMaxApplicationsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
