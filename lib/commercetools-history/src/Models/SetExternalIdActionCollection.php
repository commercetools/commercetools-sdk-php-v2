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
 * @extends MapperSequence<SetExternalIdAction>
 * @method SetExternalIdAction current()
 * @method SetExternalIdAction at($offset)
 */
class SetExternalIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetExternalIdAction $value
     * @psalm-param SetExternalIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetExternalIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetExternalIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetExternalIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetExternalIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetExternalIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
