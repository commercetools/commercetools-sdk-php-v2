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
 * @extends ChangeCollection<SetAssetTagsChange>
 * @method SetAssetTagsChange current()
 * @method SetAssetTagsChange at($offset)
 */
class SetAssetTagsChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAssetTagsChange $value
     * @psalm-param SetAssetTagsChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetTagsChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetTagsChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetTagsChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetTagsChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAssetTagsChange $data */
                $data = SetAssetTagsChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
