<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class RetentionPolicyModel extends JsonObjectModel implements RetentionPolicy
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $strategy;

    /**
     * @psalm-var array<string, class-string<RetentionPolicy> >
     *
     */
    private static $discriminatorClasses = [
       'ttl' => TimeToLiveRetentionPolicyModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $strategy = null
    ) {
        $this->strategy = $strategy;
    }

    /**
     * <p>The strategy of the retention policy. Used to determine how the ImportContainer should be retained.</p>
     *
     *
     * @return null|string
     */
    public function getStrategy()
    {
        if (is_null($this->strategy)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STRATEGY);
            if (is_null($data)) {
                return null;
            }
            $this->strategy = (string) $data;
        }

        return $this->strategy;
    }





    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<RetentionPolicy>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = RetentionPolicy::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<RetentionPolicy> */
        $type = RetentionPolicyModel::class;
        return $type;
    }
}
