<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Common\ResourceIdentifierCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ResourceIdentifierCollection<VariantResourceIdentifier>
 * @method VariantResourceIdentifier current()
 * @method VariantResourceIdentifier end()
 * @method VariantResourceIdentifier at($offset)
 */
class VariantResourceIdentifierCollection extends ResourceIdentifierCollection
{
    /**
     * @psalm-assert VariantResourceIdentifier $value
     * @psalm-param VariantResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantResourceIdentifier
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantResourceIdentifier $data */
                $data = VariantResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}
