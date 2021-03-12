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
 * @extends MapperSequence<SetCustomFieldAction>
 * @method SetCustomFieldAction current()
 * @method SetCustomFieldAction at($offset)
 */
class SetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomFieldAction $value
     * @psalm-param SetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
