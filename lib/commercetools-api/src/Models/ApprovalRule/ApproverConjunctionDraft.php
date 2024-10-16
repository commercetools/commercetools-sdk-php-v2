<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApprovalRule;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ApproverConjunctionDraft extends JsonObject
{
    public const FIELD_AND = 'and';

    /**
     * <p>All of the nested disjunctions must be approved in order for the conjunction to be considered approved.</p>
     *

     * @return null|ApproverDisjunctionDraftCollection
     */
    public function getAnd();

    /**
     * @param ?ApproverDisjunctionDraftCollection $and
     */
    public function setAnd(?ApproverDisjunctionDraftCollection $and): void;
}
