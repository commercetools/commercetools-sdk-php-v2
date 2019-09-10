<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderEditResult>
 * @method OrderEditResult current()
 * @method OrderEditResult at($offset)
 */
class OrderEditResultCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditResult $value
     * @psalm-param OrderEditResult|stdClass $value
     * @return OrderEditResultCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditResult
     */
    protected function mapper()
    {
        return function(int $index): ?OrderEditResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditResultModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}