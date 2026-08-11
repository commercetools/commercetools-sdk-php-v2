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
 * @extends VariantUpdateActionCollection<VariantUnpublishAction>
 * @method VariantUnpublishAction current()
 * @method VariantUnpublishAction end()
 * @method VariantUnpublishAction at($offset)
 */
class VariantUnpublishActionCollection extends VariantUpdateActionCollection
{
    /**
     * @psalm-assert VariantUnpublishAction $value
     * @psalm-param VariantUnpublishAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantUnpublishActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantUnpublishAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantUnpublishAction
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantUnpublishAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantUnpublishAction $data */
                $data = VariantUnpublishActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
