<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ErrorObjectCollection<SearchExecutionFailureError>
 * @method SearchExecutionFailureError current()
 * @method SearchExecutionFailureError end()
 * @method SearchExecutionFailureError at($offset)
 */
class SearchExecutionFailureErrorCollection extends ErrorObjectCollection
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
        return function (?int $index): ?SearchExecutionFailureError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SearchExecutionFailureError $data */
                $data = SearchExecutionFailureErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
