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
 * @extends MapperSequence<CustomerCompanyNameSetMessagePayload>
 *
 * @method CustomerCompanyNameSetMessagePayload current()
 * @method CustomerCompanyNameSetMessagePayload at($offset)
 */
class CustomerCompanyNameSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerCompanyNameSetMessagePayload $value
     * @psalm-param CustomerCompanyNameSetMessagePayload|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return CustomerCompanyNameSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCompanyNameSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCompanyNameSetMessagePayload
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerCompanyNameSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomerCompanyNameSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
