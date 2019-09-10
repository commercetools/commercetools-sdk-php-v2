<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<OrderPagedQueryResponse>
 * @method OrderPagedQueryResponse current()
 * @method OrderPagedQueryResponse at($offset)
 */
class OrderPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderPagedQueryResponse $value
     * @psalm-param OrderPagedQueryResponse|stdClass $value
     * @return OrderPagedQueryResponseCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderPagedQueryResponse
     */
    protected function mapper()
    {
        return function(int $index): ?OrderPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}