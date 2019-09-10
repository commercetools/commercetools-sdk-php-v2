<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ShoppingListReference>
 * @method ShoppingListReference current()
 * @method ShoppingListReference at($offset)
 */
class ShoppingListReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert ShoppingListReference $value
     * @psalm-param ShoppingListReference|stdClass $value
     * @return ShoppingListReferenceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListReference
     */
    protected function mapper()
    {
        return function(int $index): ?ShoppingListReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ShoppingListReferenceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}