<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CustomerCustomTypeSetMessage extends Message
{
    public const FIELD_CUSTOM_FIELDS = 'customFields';
    public const FIELD_PREVIOUS_TYPE_ID = 'previousTypeId';

    /**
     * <p>The Custom Fields that have been set.</p>
     *

     * @return null|CustomFields
     */
    public function getCustomFields();

    /**
     * <p><code>id</code> of the previous <a href="ctp:api:type:Type">Custom Type</a>.</p>
     * <p>Absent when there has not been a Custom Type before.</p>
     *

     * @return null|string
     */
    public function getPreviousTypeId();

    /**
     * @param ?CustomFields $customFields
     */
    public function setCustomFields(?CustomFields $customFields): void;

    /**
     * @param ?string $previousTypeId
     */
    public function setPreviousTypeId(?string $previousTypeId): void;
}
