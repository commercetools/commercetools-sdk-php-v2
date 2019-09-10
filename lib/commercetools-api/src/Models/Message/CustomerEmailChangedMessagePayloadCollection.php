<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerEmailChangedMessagePayload>
 *
 * @method CustomerEmailChangedMessagePayload current()
 * @method CustomerEmailChangedMessagePayload at($offset)
 */
class CustomerEmailChangedMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerEmailChangedMessagePayload $value
     * @psalm-param CustomerEmailChangedMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerEmailChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerEmailChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerEmailChangedMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerEmailChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerEmailChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
