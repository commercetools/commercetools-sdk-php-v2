<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class ProductVariantImportDraftCollectionModel extends JsonCollection implements ProductVariantImportDraftCollection
{

    /**
     * @param ProductVariantImportDraft $value
     * @return ProductVariantImportDraftCollection
     */
    public function add($value) {
        if (!$value instanceof ProductVariantImportDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return ProductVariantImportDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof ProductVariantImportDraft) {
            $data = $this->mapData(ProductVariantImportDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
