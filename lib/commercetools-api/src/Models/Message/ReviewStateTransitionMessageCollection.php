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
 * @extends MapperSequence<ReviewStateTransitionMessage>
 * @method ReviewStateTransitionMessage current()
 * @method ReviewStateTransitionMessage at($offset)
 */
class ReviewStateTransitionMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewStateTransitionMessage $value
     * @psalm-param ReviewStateTransitionMessage|stdClass $value
     * @return ReviewStateTransitionMessageCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ReviewStateTransitionMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewStateTransitionMessage
     */
    protected function mapper()
    {
        return function(int $index): ?ReviewStateTransitionMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewStateTransitionMessageModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}