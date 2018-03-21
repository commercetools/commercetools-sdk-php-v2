<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Base\JsonCollection;

class LineItemImportDraftCollectionModel extends JsonCollection implements LineItemImportDraftCollection {

    /**
     * @param LineItemImportDraft $value
     * @return LineItemImportDraftCollection
     */
    public function add($value) {
        if (!$value instanceof LineItemImportDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return LineItemImportDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof LineItemImportDraft) {
            $data = $this->mapData(LineItemImportDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
