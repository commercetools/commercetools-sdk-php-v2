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
 * @extends MapperSequence<MissingImages>
 * @method MissingImages current()
 * @method MissingImages at($offset)
 */
class MissingImagesCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingImages $value
     * @psalm-param MissingImages|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingImagesCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingImages) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingImages
     */
    protected function mapper()
    {
        return function (int $index): ?MissingImages {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingImages $data */
                $data = MissingImagesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
