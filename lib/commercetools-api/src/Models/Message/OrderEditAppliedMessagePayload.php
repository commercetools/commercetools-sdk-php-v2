<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Api\Models\OrderEdit\OrderEditReference;

interface OrderEditAppliedMessagePayload extends MessagePayload
{
    const FIELD_EDIT = 'edit';
    const FIELD_RESULT = 'result';

    /**
     * @return null|OrderEditReference
     */
    public function getEdit();

    /**
     * @return null|OrderEditApplied
     */
    public function getResult();

    public function setEdit(?OrderEditReference $edit): void;

    public function setResult(?OrderEditApplied $result): void;
}
