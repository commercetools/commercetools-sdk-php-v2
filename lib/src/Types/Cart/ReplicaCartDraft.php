<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Base\JsonObject;

use Commercetools\Types\Common\Reference;

interface ReplicaCartDraft extends JsonObject {
    const FIELD_REFERENCE = 'reference';

    /**
     * @return Reference
     */
    public function getReference();

    /**
     * @param Reference $reference
     * @return $this
     */
    public function setReference(Reference $reference);

}
