<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Variant\VariantUpdateActionCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends VariantUpdateActionCollection<VariantRemoveStagedChangesAction>
 * @method VariantRemoveStagedChangesAction current()
 * @method VariantRemoveStagedChangesAction end()
 * @method VariantRemoveStagedChangesAction at($offset)
 */
class VariantRemoveStagedChangesActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantRemoveStagedChangesAction $value
     * @psalm-param VariantRemoveStagedChangesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantRemoveStagedChangesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantRemoveStagedChangesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantRemoveStagedChangesAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantRemoveStagedChangesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantRemoveStagedChangesAction $data */
                $data = VariantRemoveStagedChangesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
