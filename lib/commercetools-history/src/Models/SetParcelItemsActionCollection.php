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
 * @extends MapperSequence<SetParcelItemsAction>
 * @method SetParcelItemsAction current()
 * @method SetParcelItemsAction at($offset)
 */
class SetParcelItemsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetParcelItemsAction $value
     * @psalm-param SetParcelItemsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetParcelItemsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetParcelItemsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetParcelItemsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetParcelItemsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetParcelItemsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
