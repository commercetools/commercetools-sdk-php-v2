<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomerIndexingProgress>
 * @method CustomerIndexingProgress current()
 * @method CustomerIndexingProgress end()
 * @method CustomerIndexingProgress at($offset)
 */
class CustomerIndexingProgressCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomerIndexingProgress $value
     * @psalm-param CustomerIndexingProgress|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomerIndexingProgressCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomerIndexingProgress) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomerIndexingProgress
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomerIndexingProgress {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomerIndexingProgress $data */
                $data = CustomerIndexingProgressModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
