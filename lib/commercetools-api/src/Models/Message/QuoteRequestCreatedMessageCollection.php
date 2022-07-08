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
 * @extends MessageCollection<QuoteRequestCreatedMessage>
 * @method QuoteRequestCreatedMessage current()
 * @method QuoteRequestCreatedMessage end()
 * @method QuoteRequestCreatedMessage at($offset)
 */
class QuoteRequestCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteRequestCreatedMessage $value
     * @psalm-param QuoteRequestCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestCreatedMessage $data */
                $data = QuoteRequestCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
