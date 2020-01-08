<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\GraphQL;

use Commercetools\Base\JsonObject;

interface GraphQLErrorLocation extends JsonObject
{
    const FIELD_LINE = 'line';
    const FIELD_COLUMN = 'column';

    /**
     * @return null|int
     */
    public function getLine();

    /**
     * @return null|int
     */
    public function getColumn();

    public function setLine(?int $line): void;

    public function setColumn(?int $column): void;
}
