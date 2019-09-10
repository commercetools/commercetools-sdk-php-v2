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
 * @extends MapperSequence<ReviewRatingSetMessagePayload>
 * @method ReviewRatingSetMessagePayload current()
 * @method ReviewRatingSetMessagePayload at($offset)
 */
class ReviewRatingSetMessagePayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewRatingSetMessagePayload $value
     * @psalm-param ReviewRatingSetMessagePayload|stdClass $value
     * @return ReviewRatingSetMessagePayloadCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ReviewRatingSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewRatingSetMessagePayload
     */
    protected function mapper()
    {
        return function(int $index): ?ReviewRatingSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewRatingSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}