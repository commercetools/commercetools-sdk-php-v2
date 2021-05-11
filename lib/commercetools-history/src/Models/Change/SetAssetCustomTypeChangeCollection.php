<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetAssetCustomTypeChange>
 * @method SetAssetCustomTypeChange current()
 * @method SetAssetCustomTypeChange at($offset)
 */
class SetAssetCustomTypeChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAssetCustomTypeChange $value
     * @psalm-param SetAssetCustomTypeChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetCustomTypeChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetCustomTypeChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetCustomTypeChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetCustomTypeChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAssetCustomTypeChange $data */
                $data = SetAssetCustomTypeChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
