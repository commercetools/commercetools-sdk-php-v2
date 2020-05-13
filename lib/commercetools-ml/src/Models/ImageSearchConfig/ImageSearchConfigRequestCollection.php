<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ImageSearchConfigRequest>
 * @method ImageSearchConfigRequest current()
 * @method ImageSearchConfigRequest at($offset)
 */
class ImageSearchConfigRequestCollection extends MapperSequence
{
    /**
     * @psalm-assert ImageSearchConfigRequest $value
     * @psalm-param ImageSearchConfigRequest|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImageSearchConfigRequestCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImageSearchConfigRequest) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImageSearchConfigRequest
     */
    protected function mapper()
    {
        return function (int $index): ?ImageSearchConfigRequest {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ImageSearchConfigRequestModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
