<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomFieldDateType>
 * @method CustomFieldDateType current()
 * @method CustomFieldDateType at($offset)
 */
class CustomFieldDateTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldDateType $value
     * @psalm-param CustomFieldDateType|stdClass $value
     * @return CustomFieldDateTypeCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldDateType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldDateType
     */
    protected function mapper()
    {
        return function(int $index): ?CustomFieldDateType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldDateTypeModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}