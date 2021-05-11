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
 * @extends MapperSequence<ImageSearchConfigResponse>
 * @method ImageSearchConfigResponse current()
 * @method ImageSearchConfigResponse at($offset)
 */
class ImageSearchConfigResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ImageSearchConfigResponse $value
     * @psalm-param ImageSearchConfigResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImageSearchConfigResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImageSearchConfigResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImageSearchConfigResponse
     */
    protected function mapper()
    {
        return function (int $index): ?ImageSearchConfigResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImageSearchConfigResponse $data */
                $data = ImageSearchConfigResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
