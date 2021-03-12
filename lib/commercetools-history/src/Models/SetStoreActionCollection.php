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
 * @extends MapperSequence<SetStoreAction>
 * @method SetStoreAction current()
 * @method SetStoreAction at($offset)
 */
class SetStoreActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetStoreAction $value
     * @psalm-param SetStoreAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStoreActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStoreAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStoreAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetStoreAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetStoreActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
