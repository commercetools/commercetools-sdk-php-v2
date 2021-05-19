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
 * @extends ChangeCollection<AddDiscountCodeChange>
 * @method AddDiscountCodeChange current()
 * @method AddDiscountCodeChange at($offset)
 */
class AddDiscountCodeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert AddDiscountCodeChange $value
     * @psalm-param AddDiscountCodeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddDiscountCodeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddDiscountCodeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddDiscountCodeChange
     */
    protected function mapper()
    {
        return function (int $index): ?AddDiscountCodeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AddDiscountCodeChange $data */
                $data = AddDiscountCodeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
