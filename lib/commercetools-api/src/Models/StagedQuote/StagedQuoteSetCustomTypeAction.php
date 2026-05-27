<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StagedQuote;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedQuoteSetCustomTypeAction extends StagedQuoteUpdateAction
{
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the StagedQuote with <a href="ctp:api:type:CustomFields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the StagedQuote.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Object containing the <a href="ctp:api:type:CustomFields">Custom Fields</a> fields for the StagedQuote.</p>
     * <p>Required if at least one Custom Field is defined as required in the <code>fieldDefinitions</code> of the referenced <a href="ctp:api:type:Type">Type</a>.</p>
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
