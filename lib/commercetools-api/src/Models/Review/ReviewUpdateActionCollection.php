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
 * @extends MapperSequence<ReviewUpdateAction>
 * @method ReviewUpdateAction current()
 * @method ReviewUpdateAction at($offset)
 */
class ReviewUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewUpdateAction $value
     * @psalm-param ReviewUpdateAction|stdClass $value
     * @return ReviewUpdateActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ReviewUpdateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewUpdateAction
     */
    protected function mapper()
    {
        return function(int $index): ?ReviewUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewUpdateActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}