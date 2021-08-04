<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearch;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ResultItem>
 * @method ResultItem current()
 * @method ResultItem end()
 * @method ResultItem at($offset)
 */
class ResultItemCollection extends MapperSequence
{
    /**
     * @psalm-assert ResultItem $value
     * @psalm-param ResultItem|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ResultItemCollection
     */
    public function add($value)
    {
        if (!$value instanceof ResultItem) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ResultItem
     */
    protected function mapper()
    {
        return function (?int $index): ?ResultItem {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ResultItem $data */
                $data = ResultItemModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
