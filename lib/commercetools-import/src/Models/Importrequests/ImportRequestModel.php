<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ImportRequestModel extends JsonObjectModel implements ImportRequest
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<ImportRequest> >
     *
     */
    private static $discriminatorClasses = [
       'category' => CategoryImportRequestModel::class,
       'customer' => CustomerImportRequestModel::class,
       'inventory' => InventoryImportRequestModel::class,
       'order' => OrderImportRequestModel::class,
       'order-patch' => OrderPatchImportRequestModel::class,
       'price' => PriceImportRequestModel::class,
       'product' => ProductImportRequestModel::class,
       'product-draft' => ProductDraftImportRequestModel::class,
       'product-type' => ProductTypeImportRequestModel::class,
       'product-variant' => ProductVariantImportRequestModel::class,
       'product-variant-patch' => ProductVariantPatchRequestModel::class,
       'standalone-price' => StandalonePriceImportRequestModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $type = null
    ) {
        $this->type = $type;
    }

    /**
     * <p>The type of the import resource.</p>
     *
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }





    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ImportRequest>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ImportRequest::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<ImportRequest> */
        $type = ImportRequestModel::class;
        return $type;
    }
}
