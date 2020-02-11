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
 * @extends MapperSequence<OrderEditNotProcessed>
 * @method OrderEditNotProcessed current()
 * @method OrderEditNotProcessed at($offset)
 */
class OrderEditNotProcessedCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditNotProcessed $value
     * @psalm-param OrderEditNotProcessed|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return OrderEditNotProcessedCollection
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditNotProcessed) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditNotProcessed
     */
    protected function mapper()
    {
        return function (int $index): ?OrderEditNotProcessed {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditNotProcessedModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
