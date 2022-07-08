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
 * @extends MessageCollection<QuoteRequestDeletedMessage>
 * @method QuoteRequestDeletedMessage current()
 * @method QuoteRequestDeletedMessage end()
 * @method QuoteRequestDeletedMessage at($offset)
 */
class QuoteRequestDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert QuoteRequestDeletedMessage $value
     * @psalm-param QuoteRequestDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QuoteRequestDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof QuoteRequestDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QuoteRequestDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?QuoteRequestDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QuoteRequestDeletedMessage $data */
                $data = QuoteRequestDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
