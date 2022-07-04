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
 * @extends MessageCollection<QuoteCreatedMessage>
 * @method QuoteCreatedMessage current()
 * @method QuoteCreatedMessage end()
 * @method QuoteCreatedMessage at($offset)
 */
class QuoteCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteCreatedMessage $value
     * @psalm-param QuoteCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteCreatedMessage $data */
                $data = QuoteCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
