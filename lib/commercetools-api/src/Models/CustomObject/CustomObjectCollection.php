<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomObject>
 * @method CustomObject current()
 * @method CustomObject at($offset)
 */
class CustomObjectCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomObject $value
     * @psalm-param CustomObject|stdClass $value
     * @return CustomObjectCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomObject) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomObject
     */
    protected function mapper()
    {
        return function(int $index): ?CustomObject {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomObjectModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}