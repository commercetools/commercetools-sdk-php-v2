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
 * @extends MapperSequence<MyPaymentUpdate>
 * @method MyPaymentUpdate current()
 * @method MyPaymentUpdate end()
 * @method MyPaymentUpdate at($offset)
 */
class MyPaymentUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert MyPaymentUpdate $value
     * @psalm-param MyPaymentUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyPaymentUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyPaymentUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyPaymentUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?MyPaymentUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyPaymentUpdate $data */
                $data = MyPaymentUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
