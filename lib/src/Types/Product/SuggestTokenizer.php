<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface SuggestTokenizer extends JsonObject
{
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'custom' => Types\Product\CustomTokenizer::class,
        'whitespace' => Types\Product\WhitespaceTokenizer::class,

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
