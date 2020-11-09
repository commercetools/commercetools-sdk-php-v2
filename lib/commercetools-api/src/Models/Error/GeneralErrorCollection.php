<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<GeneralError>
 * @method GeneralError current()
 * @method GeneralError at($offset)
 */
class GeneralErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert GeneralError $value
     * @psalm-param GeneralError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return GeneralErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof GeneralError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?GeneralError
     */
    protected function mapper()
    {
        return function (int $index): ?GeneralError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = GeneralErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
