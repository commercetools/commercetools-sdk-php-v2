<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<QuoteDeletedMessagePayload>
 * @method QuoteDeletedMessagePayload current()
 * @method QuoteDeletedMessagePayload end()
 * @method QuoteDeletedMessagePayload at($offset)
 */
class QuoteDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteDeletedMessagePayload $value
     * @psalm-param QuoteDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteDeletedMessagePayload $data */
                $data = QuoteDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
