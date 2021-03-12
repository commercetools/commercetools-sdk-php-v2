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
 * @extends MapperSequence<SetAssetTagsAction>
 * @method SetAssetTagsAction current()
 * @method SetAssetTagsAction at($offset)
 */
class SetAssetTagsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetAssetTagsAction $value
     * @psalm-param SetAssetTagsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAssetTagsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAssetTagsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAssetTagsAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetAssetTagsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetAssetTagsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
