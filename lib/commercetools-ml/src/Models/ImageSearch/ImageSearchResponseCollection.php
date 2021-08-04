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
 * @extends MapperSequence<ImageSearchResponse>
 * @method ImageSearchResponse current()
 * @method ImageSearchResponse end()
 * @method ImageSearchResponse at($offset)
 */
class ImageSearchResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert ImageSearchResponse $value
     * @psalm-param ImageSearchResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ImageSearchResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof ImageSearchResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ImageSearchResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?ImageSearchResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ImageSearchResponse $data */
                $data = ImageSearchResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
