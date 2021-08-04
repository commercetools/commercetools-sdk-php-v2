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
 * @extends MapperSequence<MyCustomerUpdate>
 * @method MyCustomerUpdate current()
 * @method MyCustomerUpdate end()
 * @method MyCustomerUpdate at($offset)
 */
class MyCustomerUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCustomerUpdate $value
     * @psalm-param MyCustomerUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCustomerUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCustomerUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCustomerUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?MyCustomerUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyCustomerUpdate $data */
                $data = MyCustomerUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
