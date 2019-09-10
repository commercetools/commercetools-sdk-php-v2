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
 * @extends MapperSequence<InvalidTokenError>
 * @method InvalidTokenError current()
 * @method InvalidTokenError at($offset)
 */
class InvalidTokenErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidTokenError $value
     * @psalm-param InvalidTokenError|stdClass $value
     * @return InvalidTokenErrorCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof InvalidTokenError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidTokenError
     */
    protected function mapper()
    {
        return function(int $index): ?InvalidTokenError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidTokenErrorModel::of($data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}