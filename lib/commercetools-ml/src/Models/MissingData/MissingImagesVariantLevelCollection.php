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
 * @extends MapperSequence<MissingImagesVariantLevel>
 * @method MissingImagesVariantLevel current()
 * @method MissingImagesVariantLevel at($offset)
 */
class MissingImagesVariantLevelCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingImagesVariantLevel $value
     * @psalm-param MissingImagesVariantLevel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingImagesVariantLevelCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingImagesVariantLevel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingImagesVariantLevel
     */
    protected function mapper()
    {
        return function (int $index): ?MissingImagesVariantLevel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingImagesVariantLevelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
