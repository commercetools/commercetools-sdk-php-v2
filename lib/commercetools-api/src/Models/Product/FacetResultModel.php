<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class FacetResultModel extends JsonObjectModel implements FacetResult
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @psalm-var array<string, class-string<FacetResult> >
     */
    private static $discriminatorClasses = [
        'filter' => FilteredFacetResultModel::class,
        'range' => RangeFacetResultModel::class,
        'terms' => TermFacetResultModel::class,
    ];

    public function __construct(
    ) {
        $this->type = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(FacetResult::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<FacetResult>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = FacetResult::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<FacetResult> */
        $type = FacetResultModel::class;

        return $type;
    }
}
