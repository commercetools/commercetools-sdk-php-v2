<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<AddCustomLineItemChange>
 * @method AddCustomLineItemChange current()
 * @method AddCustomLineItemChange end()
 * @method AddCustomLineItemChange at($offset)
 */
class AddCustomLineItemChangeCollection extends ChangeCollection
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
        return function (?int $index): ?AddCustomLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddCustomLineItemChange $data */
                $data = AddCustomLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
