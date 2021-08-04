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
 * @extends ErrorObjectCollection<QueryTimedOutError>
 * @method QueryTimedOutError current()
 * @method QueryTimedOutError at($offset)
 */
class QueryTimedOutErrorCollection extends ErrorObjectCollection
{
    /**
     * @psalm-assert QueryTimedOutError $value
     * @psalm-param QueryTimedOutError|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return QueryTimedOutErrorCollection
     */
    public function add($value)
    {
        if (!$value instanceof QueryTimedOutError) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?QueryTimedOutError
     */
    protected function mapper()
    {
        return function (?int $index): ?QueryTimedOutError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var QueryTimedOutError $data */
                $data = QueryTimedOutErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
