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
 * @extends MapperSequence<QueryTimedOutError>
 * @method QueryTimedOutError current()
 * @method QueryTimedOutError at($offset)
 */
class QueryTimedOutErrorCollection extends MapperSequence
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
        return function (int $index): ?QueryTimedOutError {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = QueryTimedOutErrorModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
