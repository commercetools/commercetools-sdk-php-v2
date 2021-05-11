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
 * @extends MapperSequence<MissingImagesSearchRequest>
 * @method MissingImagesSearchRequest current()
 * @method MissingImagesSearchRequest at($offset)
 */
class MissingImagesSearchRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingImagesSearchRequest $value
     * @psalm-param MissingImagesSearchRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingImagesSearchRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingImagesSearchRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingImagesSearchRequest
     */
    protected function mapper()
    {
        return function (int $index): ?MissingImagesSearchRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingImagesSearchRequest $data */
                $data = MissingImagesSearchRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
