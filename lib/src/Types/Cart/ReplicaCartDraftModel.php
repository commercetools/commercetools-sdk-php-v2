<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Base\JsonObjectModel;

use Commercetools\Types\Common\Reference;

class ReplicaCartDraftModel extends JsonObjectModel implements ReplicaCartDraft {
    /**
     * @var Reference
     */
    protected $reference;

    /**
     * @return Reference
     */
    public function getReference()
    {
        if (is_null($this->reference)) {
            $value = $this->raw(ReplicaCartDraft::FIELD_REFERENCE);
            $resolvedClass = $this->resolveDiscriminator(Reference::class, $value);
            if (is_null($value)) {
                return $this->mapData($resolvedClass, null);
            }
            $value = $this->mapData($resolvedClass, $value);

            $this->reference = $value;
        }
        return $this->reference;
    }

    /**
     * @param Reference $reference
     * @return $this
     */
    public function setReference(Reference $reference)
    {
        $this->reference = $reference;

        return $this;
    }

}
