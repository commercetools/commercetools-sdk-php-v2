<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Base\JsonCollection;

class AttributeDefinitionDraftCollectionModel extends JsonCollection implements AttributeDefinitionDraftCollection {

    /**
     * @param AttributeDefinitionDraft $value
     * @return AttributeDefinitionDraftCollection
     */
    public function add($value) {
        if (!$value instanceof AttributeDefinitionDraft) {
            throw new \InvalidArgumentException();
        }
        parent::add($value);

        return $this;
    }

    /**
     * @return AttributeDefinitionDraft
     */
    public function map($data, $index)
    {
        if (!is_null($data) && !$data instanceof AttributeDefinitionDraft) {
            $data = $this->mapData(AttributeDefinitionDraft::class, $data);
            $this->rawSet($data, $index);
        }
        return $data;
    }
}
