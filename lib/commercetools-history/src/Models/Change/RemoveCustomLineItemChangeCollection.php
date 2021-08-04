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
 * @extends ChangeCollection<RemoveCustomLineItemChange>
 * @method RemoveCustomLineItemChange current()
 * @method RemoveCustomLineItemChange at($offset)
 */
class RemoveCustomLineItemChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveCustomLineItemChange $value
     * @psalm-param RemoveCustomLineItemChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveCustomLineItemChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveCustomLineItemChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveCustomLineItemChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemoveCustomLineItemChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveCustomLineItemChange $data */
                $data = RemoveCustomLineItemChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
