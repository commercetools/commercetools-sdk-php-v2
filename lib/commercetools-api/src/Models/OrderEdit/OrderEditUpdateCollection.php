<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditUpdate>
 * @method OrderEditUpdate current()
 * @method OrderEditUpdate at($offset)
 */
class OrderEditUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditUpdate $value
     * @psalm-param OrderEditUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var OrderEditUpdate $data */
                $data = OrderEditUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
