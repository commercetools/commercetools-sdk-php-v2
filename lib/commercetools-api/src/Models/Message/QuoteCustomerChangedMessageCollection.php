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
 * @extends MessageCollection<QuoteCustomerChangedMessage>
 * @method QuoteCustomerChangedMessage current()
 * @method QuoteCustomerChangedMessage end()
 * @method QuoteCustomerChangedMessage at($offset)
 */
class QuoteCustomerChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteCustomerChangedMessage $value
     * @psalm-param QuoteCustomerChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteCustomerChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteCustomerChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteCustomerChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteCustomerChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteCustomerChangedMessage $data */
                $data = QuoteCustomerChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
