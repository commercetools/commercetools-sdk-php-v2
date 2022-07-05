<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface StagedOrderSetParcelCustomTypeAction extends StagedOrderUpdateAction
{
    public const FIELD_PARCEL_ID = 'parcelId';
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';

    /**

     * @return null|string
     */
    public function getParcelId();

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the Parcel with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the Parcel.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the Parcel.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * @param ?string $parcelId
     */
    public function setParcelId(?string $parcelId): void;

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;
}
