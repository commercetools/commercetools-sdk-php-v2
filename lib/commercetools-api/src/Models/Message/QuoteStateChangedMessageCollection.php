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
 * @extends MessageCollection<QuoteStateChangedMessage>
 * @method QuoteStateChangedMessage current()
 * @method QuoteStateChangedMessage end()
 * @method QuoteStateChangedMessage at($offset)
 */
class QuoteStateChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteStateChangedMessage $value
     * @psalm-param QuoteStateChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteStateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteStateChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteStateChangedMessage $data */
                $data = QuoteStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
