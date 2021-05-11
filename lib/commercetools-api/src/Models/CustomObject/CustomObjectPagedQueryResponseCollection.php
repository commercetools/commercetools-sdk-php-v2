<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomObject;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomObjectPagedQueryResponse>
 * @method CustomObjectPagedQueryResponse current()
 * @method CustomObjectPagedQueryResponse at($offset)
 */
class CustomObjectPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomObjectPagedQueryResponse $value
     * @psalm-param CustomObjectPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomObjectPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomObjectPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomObjectPagedQueryResponse
     */
    protected function mapper()
    {
        return function (int $index): ?CustomObjectPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomObjectPagedQueryResponse $data */
                $data = CustomObjectPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
