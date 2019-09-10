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
 * @extends MapperSequence<InvalidInputError>
 * @method InvalidInputError current()
 * @method InvalidInputError at($offset)
 */
class InvalidInputErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidInputError $value
     * @psalm-param InvalidInputError|stdClass $value
     * @return InvalidInputErrorCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof InvalidInputError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidInputError
     */
    protected function mapper()
    {
        return function(int $index): ?InvalidInputError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidInputErrorModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}