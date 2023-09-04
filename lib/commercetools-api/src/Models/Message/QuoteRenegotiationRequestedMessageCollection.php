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
 * @extends MessageCollection<QuoteRenegotiationRequestedMessage>
 * @method QuoteRenegotiationRequestedMessage current()
 * @method QuoteRenegotiationRequestedMessage end()
 * @method QuoteRenegotiationRequestedMessage at($offset)
 */
class QuoteRenegotiationRequestedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteRenegotiationRequestedMessage $value
     * @psalm-param QuoteRenegotiationRequestedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRenegotiationRequestedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRenegotiationRequestedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRenegotiationRequestedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRenegotiationRequestedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRenegotiationRequestedMessage $data */
                $data = QuoteRenegotiationRequestedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
