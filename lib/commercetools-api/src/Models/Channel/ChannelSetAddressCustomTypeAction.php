<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ChannelSetAddressCustomTypeAction extends ChannelUpdateAction
{
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>If absent, the <a href="/../api/projects/custom-fields">custom</a> type and any existing <a href="/../api/projects/custom-fields">CustomFields</a> are removed from the address.</p>
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Valid JSON object, based on the <a href="/../api/projects/types#fielddefinition">FieldDefinitions</a> of the <a href="/../api/projects/types#type">Type</a>.
     * Sets the <a href="/../api/projects/custom-fields">custom</a> fields to this value.</p>
     *
     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
