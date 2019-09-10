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
 * @extends MapperSequence<InvalidFieldError>
 * @method InvalidFieldError current()
 * @method InvalidFieldError at($offset)
 */
class InvalidFieldErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidFieldError $value
     * @psalm-param InvalidFieldError|stdClass $value
     * @return InvalidFieldErrorCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof InvalidFieldError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidFieldError
     */
    protected function mapper()
    {
        return function(int $index): ?InvalidFieldError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidFieldErrorModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}