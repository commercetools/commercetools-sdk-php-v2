<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface FacetResult extends JsonObject
{
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'filter' => Types\Product\FilteredFacetResult::class,
        'range' => Types\Product\RangeFacetResult::class,
        'terms' => Types\Product\TermFacetResult::class,

    ];

    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

}
