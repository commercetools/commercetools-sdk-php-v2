<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<CustomerCompanyNameSetMessage>
 * @method CustomerCompanyNameSetMessage current()
 * @method CustomerCompanyNameSetMessage at($offset)
 */
class CustomerCompanyNameSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert CustomerCompanyNameSetMessage $value
     * @psalm-param CustomerCompanyNameSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerCompanyNameSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerCompanyNameSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerCompanyNameSetMessage
     */
    protected function mapper()
    {
        return function (int $index): ?CustomerCompanyNameSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerCompanyNameSetMessage $data */
                $data = CustomerCompanyNameSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
