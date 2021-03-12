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
 * @extends MapperSequence<SetAssetCustomFieldAction>
 * @method SetAssetCustomFieldAction current()
 * @method SetAssetCustomFieldAction at($offset)
 */
class SetAssetCustomFieldActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAssetCustomFieldAction $value
     * @psalm-param SetAssetCustomFieldAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetCustomFieldActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetCustomFieldAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetCustomFieldAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetCustomFieldAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAssetCustomFieldActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
