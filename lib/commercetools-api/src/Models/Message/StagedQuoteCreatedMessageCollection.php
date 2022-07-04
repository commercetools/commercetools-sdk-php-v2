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
 * @extends MessageCollection<StagedQuoteCreatedMessage>
 * @method StagedQuoteCreatedMessage current()
 * @method StagedQuoteCreatedMessage end()
 * @method StagedQuoteCreatedMessage at($offset)
 */
class StagedQuoteCreatedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StagedQuoteCreatedMessage $value
     * @psalm-param StagedQuoteCreatedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteCreatedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteCreatedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteCreatedMessage $data */
                $data = StagedQuoteCreatedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
