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
 * @extends MessagePayloadCollection<StagedQuoteSellerCommentSetMessagePayload>
 * @method StagedQuoteSellerCommentSetMessagePayload current()
 * @method StagedQuoteSellerCommentSetMessagePayload end()
 * @method StagedQuoteSellerCommentSetMessagePayload at($offset)
 */
class StagedQuoteSellerCommentSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StagedQuoteSellerCommentSetMessagePayload $value
     * @psalm-param StagedQuoteSellerCommentSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteSellerCommentSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteSellerCommentSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteSellerCommentSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteSellerCommentSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteSellerCommentSetMessagePayload $data */
                $data = StagedQuoteSellerCommentSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
