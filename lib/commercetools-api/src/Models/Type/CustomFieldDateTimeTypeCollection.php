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
 * @extends MapperSequence<CustomFieldDateTimeType>
 * @method CustomFieldDateTimeType current()
 * @method CustomFieldDateTimeType at($offset)
 */
class CustomFieldDateTimeTypeCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomFieldDateTimeType $value
     * @psalm-param CustomFieldDateTimeType|stdClass $value
     * @return CustomFieldDateTimeTypeCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof CustomFieldDateTimeType) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomFieldDateTimeType
     */
    protected function mapper()
    {
        return function(int $index): ?CustomFieldDateTimeType {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = CustomFieldDateTimeTypeModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}