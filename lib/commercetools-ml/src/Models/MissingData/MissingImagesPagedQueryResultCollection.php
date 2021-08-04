<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingImagesPagedQueryResult>
 * @method MissingImagesPagedQueryResult current()
 * @method MissingImagesPagedQueryResult at($offset)
 */
class MissingImagesPagedQueryResultCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingImagesPagedQueryResult $value
     * @psalm-param MissingImagesPagedQueryResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingImagesPagedQueryResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingImagesPagedQueryResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingImagesPagedQueryResult
     */
    protected function mapper()
    {
        return function (?int $index): ?MissingImagesPagedQueryResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingImagesPagedQueryResult $data */
                $data = MissingImagesPagedQueryResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
