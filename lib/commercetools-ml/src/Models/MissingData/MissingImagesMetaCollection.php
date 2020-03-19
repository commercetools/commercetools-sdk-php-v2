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
 * @extends MapperSequence<MissingImagesMeta>
 * @method MissingImagesMeta current()
 * @method MissingImagesMeta at($offset)
 */
class MissingImagesMetaCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingImagesMeta $value
     * @psalm-param MissingImagesMeta|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingImagesMetaCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingImagesMeta) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingImagesMeta
     */
    protected function mapper()
    {
        return function (int $index): ?MissingImagesMeta {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingImagesMetaModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
