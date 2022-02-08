<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditAppliedMessage extends OrderMessage
{
    public const FIELD_EDIT = 'edit';
    public const FIELD_RESULT = 'result';

    /**
     * @return null|OrderEditReference
     */
    public function getEdit();

    /**
     * @return null|OrderEditApplied
     */
    public function getResult();

    /**
     * @param ?OrderEditReference $edit
     */
    public function setEdit(?OrderEditReference $edit): void;

    /**
     * @param ?OrderEditApplied $result
     */
    public function setResult(?OrderEditApplied $result): void;
}
