<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\TaxCategory;

use Commercetools\Base\JsonCollection;
use Commercetools\Exception\InvalidArgumentException;

class TaxCategoryDraftCollectionModel extends JsonCollection implements TaxCategoryDraftCollection
{

    /**
     * @param TaxCategoryDraft $value
     * @return TaxCategoryDraftCollection
     */
    public function add($value) {
        if (!$value instanceof TaxCategoryDraft) {
            throw new InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return TaxCategoryDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof TaxCategoryDraft) {
            $data = $this->mapData(TaxCategoryDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
