<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ErrorResponse>
 * @method ErrorResponse current()
 * @method ErrorResponse end()
 * @method ErrorResponse at($offset)
 */
class ErrorResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ErrorResponse $value
     * @psalm-param ErrorResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ErrorResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ErrorResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ErrorResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ErrorResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ErrorResponse $data */
                $data = ErrorResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
