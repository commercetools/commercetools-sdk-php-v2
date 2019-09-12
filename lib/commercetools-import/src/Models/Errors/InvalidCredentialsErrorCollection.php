<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<InvalidCredentialsError>
 *
 * @method InvalidCredentialsError current()
 * @method InvalidCredentialsError at($offset)
 */
class InvalidCredentialsErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert InvalidCredentialsError $value
     * @psalm-param InvalidCredentialsError|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return InvalidCredentialsErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof InvalidCredentialsError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?InvalidCredentialsError
     */
    protected function mapper()
    {
        return function (int $index): ?InvalidCredentialsError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = InvalidCredentialsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
