<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface CategorySetAssetCustomFieldAction extends CategoryUpdateAction
{
    public const FIELD_ASSET_ID = 'assetId';
    public const FIELD_ASSET_KEY = 'assetKey';
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * @return null|string
     */
    public function getAssetId();

    /**
     * @return null|string
     */
    public function getAssetKey();

    /**
     * @return null|string
     */
    public function getName();

    /**
     * <p>The value of a Custom Field.
     * The data type of the value depends on the specific <a href="/projects/types#fieldtype">FieldType</a> given in the <code>type</code> field of the <a href="/ctp:api:type:FieldDefinition">FieldDefinition</a> for a Custom Field.
     * It can be any of the following:</p>
     * <p>| Field type                                                 | Data type                                                                                                                                                                 |
     * | ---------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
     * | <a href="ctp:api:type:CustomFieldBooleanType">CustomFieldBooleanType</a>                 | Boolean (<code>true</code> or <code>false</code>)                                                                                                                                                     |
     * | <a href="ctp:api:type:CustomFieldStringType">CustomFieldStringType</a>                   | String                                                                                                                                                                |
     * | <a href="ctp:api:type:CustomFieldLocalizedStringType">CustomFieldLocalizedStringType</a> | <a href="ctp:api:type:LocalizedString">LocalizedString</a>                                                                                                                             |
     * | <a href="ctp:api:type:CustomFieldEnumType">CustomFieldEnumType</a>                       | String. Must be a <code>key</code> of one of the <a href="ctp:api:type:CustomFieldEnumValue">EnumValues</a> defined in the <a href="ctp:api:type:CustomFiedEnumType">EnumType</a>                                     |
     * | <a href="ctp:api:type:CustomFieldLocalizedEnumType">CustomFieldLocalizedEnumType</a>     | String. Must be a <code>key</code> of one of the <a href="ctp:api:type:CustomFieldLocalizedEnumValue">LocalizedEnumValues</a> defined in the <a href="ctp:api:type:CustomFieldLocalizedEnumType">LocalizedEnumType</a> |
     * | <a href="ctp:api:type:CustomFieldNumberType">CustomFieldNumberType</a>                   | Number                                                                                                                                                                |
     * | <a href="ctp:api:type:CustomFieldMoneyType">CustomFieldMoneyType</a>                     | <a href="/../api/types#centprecisionmoney">CentPrecisionMoney</a>                                                                                                                                         |
     * | <a href="ctp:api:type:CustomFieldDateType">CustomFieldDateType</a>                       | <a href="ctp:api:type:Date">Date</a>                                                                                                                                                   |
     * | <a href="ctp:api:type:CustomFieldTimeType">CustomFieldTimeType</a>                       | <a href="ctp:api:type:Time">Time</a>                                                                                                                                                   |
     * | <a href="ctp:api:type:CustomFieldDateTimeType">CustomFieldDateTimeType</a>               | <a href="ctp:api:type:DateTime">DateTime</a>                                                                                                                                           |
     * | <a href="ctp:api:type:CustomFieldReferenceType">CustomFieldReferenceType</a>             | <a href="/../api/types#reference">Reference</a>                                                                                                                                         |
     * | <a href="ctp:api:type:CustomFieldSetType">CustomFieldSetType</a>                         | JSON array without duplicates consisting of <a href="ctp:api:type:CustomFieldValue">CustomFieldValues</a> of a single <a href="ctp:api:type:FieldType">FieldType</a>. For example, a Custom Field of SetType of DateType takes a JSON array of mutually different Dates for its value. The order of items in the array is not fixed. For more examples, see the <a href="ctp:api:type:FieldContainer">example FieldContainer</a>.|</p>
     *
     * @return null|mixed
     */
    public function getValue();

    /**
     * @param ?string $assetId
     */
    public function setAssetId(?string $assetId): void;

    /**
     * @param ?string $assetKey
     */
    public function setAssetKey(?string $assetKey): void;

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void;

    /**
     * @param mixed $value
     */
    public function setValue($value): void;
}
