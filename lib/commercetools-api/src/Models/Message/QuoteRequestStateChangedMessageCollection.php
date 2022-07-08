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
 * @extends MessageCollection<QuoteRequestStateChangedMessage>
 * @method QuoteRequestStateChangedMessage current()
 * @method QuoteRequestStateChangedMessage end()
 * @method QuoteRequestStateChangedMessage at($offset)
 */
class QuoteRequestStateChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteRequestStateChangedMessage $value
     * @psalm-param QuoteRequestStateChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestStateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestStateChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestStateChangedMessage $data */
                $data = QuoteRequestStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
