<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Review;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReviewSetRatingAction>
 * @method ReviewSetRatingAction current()
 * @method ReviewSetRatingAction at($offset)
 */
class ReviewSetRatingActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewSetRatingAction $value
     * @psalm-param ReviewSetRatingAction|stdClass $value
     * @return ReviewSetRatingActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetRatingAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetRatingAction
     */
    protected function mapper()
    {
        return function(int $index): ?ReviewSetRatingAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewSetRatingActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}