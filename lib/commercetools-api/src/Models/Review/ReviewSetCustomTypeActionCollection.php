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
 * @extends MapperSequence<ReviewSetCustomTypeAction>
 * @method ReviewSetCustomTypeAction current()
 * @method ReviewSetCustomTypeAction at($offset)
 */
class ReviewSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ReviewSetCustomTypeAction $value
     * @psalm-param ReviewSetCustomTypeAction|stdClass $value
     * @return ReviewSetCustomTypeActionCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ReviewSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReviewSetCustomTypeAction
     */
    protected function mapper()
    {
        return function(int $index): ?ReviewSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReviewSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}