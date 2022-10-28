<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitSetAddressCustomTypeAction extends BusinessUnitUpdateAction
{
    public const FIELD_TYPE = 'type';
    public const FIELD_FIELDS = 'fields';
    public const FIELD_ADDRESS_ID = 'addressId';

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the <code>address</code> with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the <code>address</code>.</p>
     *

     * @return null|TypeResourceIdentifier
     */
    public function getType();

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> for the <code>address</code>.</p>
     *

     * @return null|FieldContainer
     */
    public function getFields();

    /**
     * <p>ID of the address to be extended.</p>
     *

     * @return null|string
     */
    public function getAddressId();

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void;

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void;

    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void;
}
