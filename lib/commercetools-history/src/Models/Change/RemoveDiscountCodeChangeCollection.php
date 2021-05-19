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
 * @extends ChangeCollection<RemoveDiscountCodeChange>
 * @method RemoveDiscountCodeChange current()
 * @method RemoveDiscountCodeChange at($offset)
 */
class RemoveDiscountCodeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemoveDiscountCodeChange $value
     * @psalm-param RemoveDiscountCodeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveDiscountCodeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveDiscountCodeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveDiscountCodeChange
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveDiscountCodeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemoveDiscountCodeChange $data */
                $data = RemoveDiscountCodeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
