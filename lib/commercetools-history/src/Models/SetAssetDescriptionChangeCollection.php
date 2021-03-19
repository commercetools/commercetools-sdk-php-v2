<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetAssetDescriptionChange>
 * @method SetAssetDescriptionChange current()
 * @method SetAssetDescriptionChange at($offset)
 */
class SetAssetDescriptionChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAssetDescriptionChange $value
     * @psalm-param SetAssetDescriptionChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetDescriptionChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetDescriptionChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetDescriptionChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetDescriptionChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAssetDescriptionChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
