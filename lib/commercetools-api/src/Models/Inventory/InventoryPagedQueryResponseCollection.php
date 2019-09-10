<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InventoryPagedQueryResponse>
 * @method InventoryPagedQueryResponse current()
 * @method InventoryPagedQueryResponse at($offset)
 */
class InventoryPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert InventoryPagedQueryResponse $value
     * @psalm-param InventoryPagedQueryResponse|stdClass $value
     * @return InventoryPagedQueryResponseCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof InventoryPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InventoryPagedQueryResponse
     */
    protected function mapper()
    {
        return function(int $index): ?InventoryPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InventoryPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}