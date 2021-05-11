<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyPayment>
 * @method MyPayment current()
 * @method MyPayment at($offset)
 */
class MyPaymentCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPayment $value
     * @psalm-param MyPayment|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPayment) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPayment
     */
    protected function mapper()
    {
        return function (int $index): ?MyPayment {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPayment $data */
                $data = MyPaymentModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
