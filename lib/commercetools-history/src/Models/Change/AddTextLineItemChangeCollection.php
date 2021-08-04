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
 * @extends ChangeCollection<AddTextLineItemChange>
 * @method AddTextLineItemChange current()
 * @method AddTextLineItemChange at($offset)
 */
class AddTextLineItemChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddTextLineItemChange $value
     * @psalm-param AddTextLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddTextLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddTextLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddTextLineItemChange
     */
    protected function mapper()
    {
        return function (?int $index): ?AddTextLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddTextLineItemChange $data */
                $data = AddTextLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
