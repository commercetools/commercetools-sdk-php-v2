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
 * @extends MapperSequence<AddCustomLineItemChange>
 * @method AddCustomLineItemChange current()
 * @method AddCustomLineItemChange at($offset)
 */
class AddCustomLineItemChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert AddCustomLineItemChange $value
     * @psalm-param AddCustomLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddCustomLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddCustomLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddCustomLineItemChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddCustomLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddCustomLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
