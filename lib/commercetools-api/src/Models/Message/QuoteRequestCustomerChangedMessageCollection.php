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
 * @extends MessageCollection<QuoteRequestCustomerChangedMessage>
 * @method QuoteRequestCustomerChangedMessage current()
 * @method QuoteRequestCustomerChangedMessage end()
 * @method QuoteRequestCustomerChangedMessage at($offset)
 */
class QuoteRequestCustomerChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteRequestCustomerChangedMessage $value
     * @psalm-param QuoteRequestCustomerChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestCustomerChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestCustomerChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestCustomerChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestCustomerChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestCustomerChangedMessage $data */
                $data = QuoteRequestCustomerChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
