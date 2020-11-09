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
 * @extends MapperSequence<SearchExecutionFailureError>
 * @method SearchExecutionFailureError current()
 * @method SearchExecutionFailureError at($offset)
 */
class SearchExecutionFailureErrorCollection extends MapperSequence
{
    /**
     * @psalm-assert SearchExecutionFailureError $value
     * @psalm-param SearchExecutionFailureError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SearchExecutionFailureErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof SearchExecutionFailureError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SearchExecutionFailureError
     */
    protected function mapper()
    {
        return function (int $index): ?SearchExecutionFailureError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SearchExecutionFailureErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
