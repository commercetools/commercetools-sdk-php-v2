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
 * @extends ChangeCollection<RemovePaymentChange>
 * @method RemovePaymentChange current()
 * @method RemovePaymentChange end()
 * @method RemovePaymentChange at($offset)
 */
class RemovePaymentChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert RemovePaymentChange $value
     * @psalm-param RemovePaymentChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemovePaymentChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemovePaymentChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemovePaymentChange
     */
    protected function mapper()
    {
        return function (?int $index): ?RemovePaymentChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var RemovePaymentChange $data */
                $data = RemovePaymentChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
