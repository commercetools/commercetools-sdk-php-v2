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
 * @extends ChangeCollection<SetAssetCustomFieldChange>
 * @method SetAssetCustomFieldChange current()
 * @method SetAssetCustomFieldChange at($offset)
 */
class SetAssetCustomFieldChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAssetCustomFieldChange $value
     * @psalm-param SetAssetCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetCustomFieldChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetAssetCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAssetCustomFieldChange $data */
                $data = SetAssetCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
