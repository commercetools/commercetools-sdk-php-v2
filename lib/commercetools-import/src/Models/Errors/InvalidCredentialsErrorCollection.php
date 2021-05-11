<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Import\Models\Errors\ErrorObjectCollection;
use stdClass;

/**
 * @extends ErrorObjectCollection<InvalidCredentialsError>
 * @method InvalidCredentialsError current()
 * @method InvalidCredentialsError at($offset)
 */
class InvalidCredentialsErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert InvalidCredentialsError $value
     * @psalm-param InvalidCredentialsError|stdClass $value
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
                /** @var InvalidCredentialsError $data */
                $data = InvalidCredentialsErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
