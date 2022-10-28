<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\OrderEdit\OrderEdit;
use Commercetools\Api\Models\OrderEdit\OrderEditApplied;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderEditAppliedMessage extends OrderMessage
{
    public const FIELD_EDIT = 'edit';
    public const FIELD_RESULT = 'result';

    /**
     * <p><a href="ctp:api:type:OrderEdit">OrderEdit</a> that was applied.</p>
     *

     * @return null|OrderEdit
     */
    public function getEdit();

    /**
     * <p>Information about a successfully applied <a href="ctp:api:type:OrderEdit">OrderEdit</a>.</p>
     *

     * @return null|OrderEditApplied
     */
    public function getResult();

    /**
     * @param ?OrderEdit $edit
     */
    public function setEdit(?OrderEdit $edit): void;

    /**
     * @param ?OrderEditApplied $result
     */
    public function setResult(?OrderEditApplied $result): void;
}
