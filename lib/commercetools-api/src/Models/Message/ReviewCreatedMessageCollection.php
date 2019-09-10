<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReviewCreatedMessage>
 * @method ReviewCreatedMessage current()
 * @method ReviewCreatedMessage at($offset)
 */
class ReviewCreatedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewCreatedMessage $value
     * @psalm-param ReviewCreatedMessage|stdClass $value
     * @return ReviewCreatedMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ReviewCreatedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewCreatedMessage
     */
    protected function mapper()
    {
        return function(int $index): ?ReviewCreatedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewCreatedMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}