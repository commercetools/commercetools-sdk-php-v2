<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Error;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class GraphQLErrorObjectModel extends JsonObjectModel implements GraphQLErrorObject
{

    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $code;

    /**
     * @psalm-var array<string, class-string<GraphQLErrorObject> >
     * 
     */
    private static $discriminatorClasses = [
       'TooManyRequests' => GraphQLTooManyRequestsErrorModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $code = null
    ) {
        $this->code = $code;

    }

    /**
     * <p>One of the error codes that is listed on the <a href="/errors">Errors</a> page.</p>
     *
     *
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }



    /**
     * @return mixed
     */
    public function by(string $key)
    {
        $data = $this->raw($key);
        if (is_null($data)) {
            return null;
        }
        if (preg_match(GraphQLErrorObject::FIELD_PATTERN1, $key) === 1) {
            /** @psalm-var stdClass $data */
            return JsonObjectModel::of($data);
        }

        return $data;
    }


    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<GraphQLErrorObject>
     */
    public static function resolveDiscriminatorClass($value): string
    {
       $fieldName = GraphQLErrorObject::DISCRIMINATOR_FIELD;
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

       /** @psalm-var class-string<GraphQLErrorObject> */
       $type = GraphQLErrorObjectModel::class;
       return $type;
    }
}
