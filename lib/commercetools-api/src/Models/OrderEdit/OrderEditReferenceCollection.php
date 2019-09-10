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
 * @extends MapperSequence<OrderEditReference>
 * @method OrderEditReference current()
 * @method OrderEditReference at($offset)
 */
class OrderEditReferenceCollection extends MapperSequence
{
    /**
     * @psalm-assert OrderEditReference $value
     * @psalm-param OrderEditReference|stdClass $value
     * @return OrderEditReferenceCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof OrderEditReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?OrderEditReference
     */
    protected function mapper()
    {
        return function(int $index): ?OrderEditReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = OrderEditReferenceModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}