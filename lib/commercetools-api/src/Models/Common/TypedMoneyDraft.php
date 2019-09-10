<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;

interface TypedMoneyDraft extends Money
{
    const DISCRIMINATOR_FIELD = 'type';
    const FIELD_TYPE = 'type';

    /**
     *
     * @return string|null
     */
    public function getType();
    public function setType(?string $type): void;
}