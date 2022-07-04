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
 * @extends MessageCollection<StagedQuoteStateChangedMessage>
 * @method StagedQuoteStateChangedMessage current()
 * @method StagedQuoteStateChangedMessage end()
 * @method StagedQuoteStateChangedMessage at($offset)
 */
class StagedQuoteStateChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StagedQuoteStateChangedMessage $value
     * @psalm-param StagedQuoteStateChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteStateChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteStateChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteStateChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteStateChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteStateChangedMessage $data */
                $data = StagedQuoteStateChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
