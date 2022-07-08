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
 * @extends MessagePayloadCollection<QuoteRequestDeletedMessagePayload>
 * @method QuoteRequestDeletedMessagePayload current()
 * @method QuoteRequestDeletedMessagePayload end()
 * @method QuoteRequestDeletedMessagePayload at($offset)
 */
class QuoteRequestDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert QuoteRequestDeletedMessagePayload $value
     * @psalm-param QuoteRequestDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestDeletedMessagePayload $data */
                $data = QuoteRequestDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
