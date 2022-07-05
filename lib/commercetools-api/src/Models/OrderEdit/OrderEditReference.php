<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Common\Reference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditReference extends Reference
{
    public const FIELD_OBJ = 'obj';

    /**
     * <p>Contains the representation of the expanded OrderEdit. Only present in responses to requests with <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> for OrderEdits.</p>
     *

     * @return null|OrderEdit
     */
    public function getObj();

    /**
     * <p>Unique identifier of the referenced <a href="ctp:api:type:OrderEdit">OrderEdit</a>.</p>
     *

     * @return null|string
     */
    public function getId();

    /**
     * @param ?OrderEdit $obj
     */
    public function setObj(?OrderEdit $obj): void;

    /**
     * @param ?string $id
     */
    public function setId(?string $id): void;
}
