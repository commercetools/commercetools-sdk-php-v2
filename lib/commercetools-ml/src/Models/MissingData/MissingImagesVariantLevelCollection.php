<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Ml\Models\MissingData\MissingImagesCountCollection;
use stdClass;

/**
 * @extends MissingImagesCountCollection<MissingImagesVariantLevel>
 * @method MissingImagesVariantLevel current()
 * @method MissingImagesVariantLevel at($offset)
 */
class MissingImagesVariantLevelCollection extends MissingImagesCountCollection
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
        return function (?int $index): ?MissingImagesVariantLevel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingImagesVariantLevel $data */
                $data = MissingImagesVariantLevelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
