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
 * @extends MessageCollection<QuoteDeletedMessage>
 * @method QuoteDeletedMessage current()
 * @method QuoteDeletedMessage end()
 * @method QuoteDeletedMessage at($offset)
 */
class QuoteDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteDeletedMessage $value
     * @psalm-param QuoteDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteDeletedMessage $data */
                $data = QuoteDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
