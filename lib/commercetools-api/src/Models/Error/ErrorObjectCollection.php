<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ErrorObject>
 * @method ErrorObject current()
 * @method ErrorObject at($offset)
 */
class ErrorObjectCollection extends MapperSequence
{
    /**
     * @psalm-assert ErrorObject $value
     * @psalm-param ErrorObject|stdClass $value
     * @return ErrorObjectCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof ErrorObject) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ErrorObject
     */
    protected function mapper()
    {
        return function(int $index): ?ErrorObject {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ErrorObjectModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}